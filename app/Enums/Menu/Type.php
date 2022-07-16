<?php

namespace App\Enums\Menu;

enum Type: string
{
    case HEADER = 'header';
    case FOOTER_LEFT = 'footer-left';
    case FOOTER_RIGHT = 'footer-right';
}
