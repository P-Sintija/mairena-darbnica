<?php

namespace App\Nova\MenuBuilder\MenuItemTypes;

use App\Models\Page;
use Laravel\Nova\Fields\Select;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;

class MenuItemPageType extends BaseMenuItemType
{
    public static function getIdentifier(): string
    {
        return 'page';
    }

    public static function getName(): string
    {
        return 'Page';
    }

    public static function getType(): string
    {
        return 'page';
    }

    public static function getDisplayValue($value, ?array $data, $locale)
    {
        return $value;
    }

    public static function getValue($value, ?array $data, $locale)
    {
        return $value;
    }

    public static function getData($data = null)
    {
        return $data;
    }

    public static function getRules(): array
    {
        return [
            'page_id' => 'required',
        ];
    }

    public static function getFields(): array
    {
        return [
            Select::make(__('Page'), 'page_id')
                ->options(Page::all()->pluck('name', 'id')->toArray())
                ->rules('required'),
        ];
    }
}
