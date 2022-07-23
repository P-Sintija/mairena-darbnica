<?php

namespace App\Http\Controllers;

use App\Models\Categories\Category;
use App\Models\Page;
use App\Nova\Templates\CatalogPageTemplate;
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
            'categoryData' => $this->getCategoryData(),
        ];
    }

    protected function getCategoryData()
    {
        $categories = Category::where('show_in_home_view', true)->get();

        $categoryDataCollection = collect($categories);
        $categoryDataCollection->sortBy('position');

        $catalogPage = Page::where('template', CatalogPageTemplate::$name)
            ->where('active', true)
            ->first();

        $categoryData = [];

        if ($catalogPage && !empty($catalogPage->path[app()->getLocale()])) {
            foreach ($categoryDataCollection as $item) {
                $categoryData[] = [
                    'image' => $item->media->first()->getUrl(),
                    'label' => $item->name,
                    'url' => $catalogPage->path[app()->getLocale()] . '/' . $item->slug,
                ];
            }
        }

        return $categoryData;
    }
}
