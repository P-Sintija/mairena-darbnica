<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    protected function getIndexTemplate(): string
    {
        return 'controllers.home.index';
    }

    protected function getTemplateData(): array
    {
        $page = $this->loadPage($this->request);
        $pageData = $page->data ? $page->data[app()->getLocale()] : null;
        $heroImage = !empty($pageData['image']) && Storage::disk('public')->exists($pageData['image']) ?
            Storage::disk('public')->url($pageData['image']) : null;

        return [
            'page' => $page,
            'pageData' => $pageData,
            'heroImage' => $heroImage,
        ];
    }
}
