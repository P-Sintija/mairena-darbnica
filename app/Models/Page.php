<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Outl1ne\PageManager\Models\Page as OriginalPageModel;

class Page extends OriginalPageModel
{
    use HasTranslations, HasFactory;
}
