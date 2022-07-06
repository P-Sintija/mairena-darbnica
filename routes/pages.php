<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\TextPageController;
use App\Nova\Templates\HomePageTemplate;
use App\Nova\Templates\TextPageTemplate;
use App\Services\PageRoutes;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect::to('/lv');
});

PageRoutes::for(HomePageTemplate::$name, function ($page, $pagePath, $pageLocale) {
    Route::get($pagePath, [
        'uses' => HomePageController::class . '@index',
        'page_id' => $page->id,
        'page_locale' => $pageLocale,
    ])->name('language.' . $page->id);
});

PageRoutes::for(TextPageTemplate::$name, function ($page, $pagePath, $pageLocale) {
    Route::get($pagePath, [
        'uses' => TextPageController::class . '@index',
        'page_id' => $page->id,
        'page_locale' => $pageLocale,
    ])->name('language.' . $page->id);
});
