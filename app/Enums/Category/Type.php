<?php

namespace App\Enums\Category;

enum Type: string
{
    case TOP_CATEGORY = 'top_category';
    case WITH_SUBCATEGORIES = 'with_subcategories';

    public static function options(): array
    {
        return [
            self::TOP_CATEGORY->value => 'Top kategorija',
            self::WITH_SUBCATEGORIES->value => 'Ar apakškategorijām',
        ];
    }
}
