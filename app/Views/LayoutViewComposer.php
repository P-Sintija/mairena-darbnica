<?php

namespace App\Views;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

final class LayoutViewComposer
{
    public function compose(View $view)
    {
        $view->with([
            'locale' => app()->getLocale(),
            'seoUrl' => request()->url(),
            'jsControllerName' => $this->getJsControllerName(),
            'menu' => $this->getMenu(),
            'languageMenu' => $this->getLanguagemenu(),
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

    protected function getMenu(): array
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
