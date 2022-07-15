<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{
    use HasTranslations, HasFactory;

    const REDIRECT_PAGE = 'redirect_page';
    const REDIRECT_LINK = 'redirect_link';

    protected $table = 'menus';

    protected $fillable = [
        'name',
        'menu_items',
    ];

    protected $translatable = ['menu_items'];
}
