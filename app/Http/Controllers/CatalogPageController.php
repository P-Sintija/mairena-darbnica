<?php

namespace App\Http\Controllers;

class CatalogPageController extends Controller
{
    protected function getIndexTemplate(): string
    {
        return 'controllers.catalog.index';
    }

    protected function getTemplateData(): array
    {
        $page = $this->loadPage($this->request);
        $pageData = $page->data ? $page->data[app()->getLocale()] : null;

        return [
            'page' => $page,
            'pageData' => $pageData,
        ];
    }
}
