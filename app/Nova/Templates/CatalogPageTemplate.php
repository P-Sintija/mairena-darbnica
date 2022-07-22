<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Outl1ne\PageManager\Template;

class CatalogPageTemplate extends Template
{
    public static string $name = 'catalog-page';

    public function fields(Request $request): array
    {
        return [];
    }
}
