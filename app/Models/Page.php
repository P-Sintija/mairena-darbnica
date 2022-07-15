<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Outl1ne\PageManager\Models\Page as OriginalPageModel;

class Page extends OriginalPageModel
{
    use HasTranslations, HasFactory;

    public function menu(string $menuType): ?Menu
    {
        if (!empty($this->data[app()->getLocale()][$menuType])) {
            $menu = Menu::find($this->data[app()->getLocale()][$menuType]);
            return $menu ?? null;
        }

        return null;
    }
}
