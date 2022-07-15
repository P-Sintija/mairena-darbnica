<?php

namespace App\Nova\Templates;

use App\Models\Menu;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
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

            Select::make(__('Menu'), 'menu')
                ->options(function () {
                    return Menu::all()->pluck('name', 'id');
                })->nullable(),

            Select::make(__('Footer Left'), 'footer_left')
                ->options(function () {
                    return Menu::all()->pluck('name', 'id');
                })->nullable(),

            Select::make(__('Footer Right'), 'footer_right')
                ->options(function () {
                    return Menu::all()->pluck('name', 'id');
                })->nullable(),
        ];
    }
}
