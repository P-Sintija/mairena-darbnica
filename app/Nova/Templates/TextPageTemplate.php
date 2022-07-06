<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Outl1ne\PageManager\Template;

class TextPageTemplate extends Template
{
    public static string $name = 'text-page';

    public function fields(Request $request): array
    {
        return [];
    }
}
