<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Outl1ne\PageManager\Template;

class HomePageTemplate extends Template
{
    public static string $name = 'home-page';

    public function fields(Request $request): array
    {
        return [
            Image::make(__('Hero image'), 'image'),
            Text::make(__('Hero title'), 'hero_title'),
            Textarea::make(__('Hero text'), 'hero_text'),
            Text::make(__('Hero redirect label'), 'hero_redirect_label'),
            Text::make(__('Hero redirect url'), 'hero_redirect_url'),
            Text::make(__('Facebook link'), 'facebook_link'),
            Text::make(__('Instagram link'), 'instagram_link'),
        ];
    }
}
