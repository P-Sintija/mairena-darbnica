<?php

namespace App\Views;

use App\Enums\Menu\Type as MenuType;
use App\Models\Menu\Menu;
use App\Models\Page;
use App\Nova\MenuBuilder\MenuItemTypes\MenuItemPageType;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType;

final class LayoutViewComposer
{
    public function compose(View $view)
    {
        $view->with([
            'locale' => app()->getLocale(),
            'seoUrl' => request()->url(),
            'jsControllerName' => $this->getJsControllerName(),
            'languageMenu' => $this->getLanguagemenu(),
            'menu' => $this->getMenu(MenuType::HEADER->value),
            'footerMenuLeft' => $this->getMenu(MenuType::FOOTER_LEFT->value),
            'footerMenuRight' => $this->getMenu(MenuType::FOOTER_RIGHT->value),
        ]);
    }

    protected function getJsControllerName(): ?string
    {
        if (($currentActionName = $this->getCurrentActionName())) {
            $parts = explode("\\", $this->getCurrentActionName());
            return end($parts);
        }
        return null;
    }

    protected function getCurrentActionName(): ?string
    {
        return Route::getCurrentRoute() ?
            Route::getCurrentRoute()->getActionName() : null;
    }

    protected function getMenu(string $menuType): array
    {
        $menu = [];
        $menuItems = Menu::where('slug', $menuType)->first() ?
            Menu::where('slug', $menuType)
                ->first()
                ->rootMenuItems
                ->where('locale', app()->getLocale())
                ->where('enabled', true) :
            [];

        foreach ($menuItems as $item) {
            if ($item->class === MenuItemPageType::class && !empty($item->data['page_id'])) {
                $redirectPage = Page::find($item->data['page_id']) ?? null;

                if ($redirectPage) {
                    $menu[] = [
                        'label' => $item->name,
                        'url' => $redirectPage->path[app()->getLocale()],
                        'target' => $item->target,
                    ];
                }
            }

            if ($item->class === MenuItemStaticURLType::class && $item->value) {
                $menu[] = [
                    'label' => $item->name,
                    'url' => $item->value,
                    'target' => $item->target,
                ];
            }
        }

        return $menu;
    }

    protected function getLanguageMenu(): array
    {
        return [
            [
                'label' => 'LV',
                'url' => '/lv',
                'active' => request()->route()->uri() === 'lv',
            ],
            [
                'label' => 'EN',
                'url' => '/en',
                'active' => request()->route()->uri() === 'en',
            ],
            [
                'label' => 'RU',
                'url' => '/ru',
                'active' => request()->route()->uri() === 'ru',
            ],
        ];
    }
}
