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
}
