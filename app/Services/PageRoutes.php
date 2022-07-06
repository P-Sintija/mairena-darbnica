<?php

namespace App\Services;

use Outl1ne\PageManager\Models\Page;

class PageRoutes
{
    public static function for($pageClass, $pageRouteClosure)
    {
        if (!self::isDbConfigured()) {
            return;
        }

        foreach (Page::where('template', $pageClass)->get() as $page) {
            foreach ($page->path as $locale => $slug) {
                $pageRouteClosure($page, $slug, $locale);
            }
        }
    }

    protected static function isDbConfigured(): bool
    {
        try {
            \DB::connection()->getPdo();
        } catch (\Exception $e) {
            return false;
        }

        return \Schema::hasTable('pages');
    }
}
