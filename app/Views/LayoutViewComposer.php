<?php

namespace App\Views;

use App\Models\Menu;
use App\Models\Page;
use App\Nova\Templates\HomePageTemplate;
use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Outl1ne\PageManager\Helpers\NPMHelpers;

final class LayoutViewComposer
{
    protected PageRepository $pageRepository;

    public function __construct(
        PageRepository $pageRepository,
    )
    {
        $this->pageRepository = $pageRepository;
    }

    public function compose(View $view)
    {
        $view->with([
            'locale' => app()->getLocale(),
            'seoUrl' => request()->url(),
            'jsControllerName' => $this->getJsControllerName(),
            'menu' => $this->getMenu('menu'),
            'languageMenu' => $this->getLanguagemenu(),
            'footerMenuLeft' => $this->getMenu('footer_left'),
            'footerMenuRight' => $this->getMenu('footer_right'),
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

    protected function getRootPage(): ?Page
    {
        return $this->pageRepository->getPageByTemplate(HomePageTemplate::$name)->first() ?? null;
    }

    protected function getMenu(string $menuType): array
    {
        $rootPage = $this->getRootPage();

        if ($rootPage && $rootPage->menu($menuType)) {
            return !empty($rootPage->menu($menuType)->menu_items) ?
                $this->mappedMenu($rootPage->menu($menuType)->menu_items) : [];
        }

        return [];
    }

    protected function mappedMenu(array $menuItems): array
    {
        $menu = [];

        foreach ($menuItems as $item) {

            if ($item['layout'] === Menu::REDIRECT_PAGE) {
                $redirectPage = !empty($item['attributes']['page_id']) ? Page::find($item['attributes']['page_id']) : null;
                if ($redirectPage) {
                    $menu[] = [
                        'label' => $item['attributes']['label'][app()->getLocale()],
                        'url' => $redirectPage->path[app()->getLocale()],
                    ];
                }
            }

            if ($item['layout'] === Menu::REDIRECT_LINK) {
                $menu[] = [
                    'label' => $item['attributes']['label'][app()->getLocale()],
                    'url' => $item['attributes']['link'][app()->getLocale()],
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

    protected function getFooterMenu(): array
    {
        return [
            [
                'label' => 'Home',
                'url' => 'Home',
            ],
            [
                'label' => 'Furniture',
                'url' => '',
            ],
            [
                'label' => 'Lookbook',
                'url' => 'Lookbook',
            ],
            [
                'label' => 'Support',
                'url' => 'Support',
            ],
        ];
    }

    protected function getFooterMenuRight(): array
    {
        return [
            [
                'label' => 'Home',
                'url' => 'Home',
            ],
            [
                'label' => 'Furniture',
                'url' => '',
            ],
            [
                'label' => 'Lookbook',
                'url' => 'Lookbook',
            ],
            [
                'label' => 'Support',
                'url' => 'Support',
            ],
            [
                'label' => 'Home',
                'url' => 'Home',
            ],
            [
                'label' => 'Furniture',
                'url' => '',
            ],
        ];
    }
}
