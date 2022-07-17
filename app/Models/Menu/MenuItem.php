<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Outl1ne\MenuBuilder\Models\MenuItem as OriginalMenuItem;

class MenuItem extends OriginalMenuItem
{
    use HasFactory;
}
