<?php

namespace App\Nova\Resources;

use App\Enums\Category\Type;
use App\Nova\Resource;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\NovaTranslatable\HandlesTranslatable;

class Category extends Resource
{
    use HandlesTranslatable;

    public static $model = \App\Models\Categories\Category::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'type',
    ];

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()
                ->sortable(),
            Text::make(__('Name'), 'name')
                ->translatable()
                ->rules('required')
                ->rulesFor(['lv', 'en', 'ru'], function ($locale) {
                    return ["unique:categories,slug->$locale,{{resourceId}}"];
                }),
            Slug::make(__('Slug'), 'slug')
                ->from('Name')
                ->separator('_')
                ->translatable()
                ->rules('required')
                ->rulesFor(['lv', 'en', 'ru'], function ($locale) {
                    return ["unique:categories,slug->$locale,{{resourceId}}"];
                }),
            Boolean::make(__('Show In Home View'), 'show_in_home_view')
                ->sortable(),
            Number::make(__('Position'), 'position')
                ->sortable(),
            Images::make('Image', 'image')
                ->conversionOnIndexView('preview')
                ->rules('required')
                ->enableExistingMedia(),
            Select::make(__('Type'), 'type')
                ->options(Type::options())
                ->rules('required')
                ->displayUsing(function () {
                    return Type::options()[$this->model()->type];
                }),
        ];
    }

    public function cards(NovaRequest $request): array
    {
        return [];
    }

    public function filters(NovaRequest $request): array
    {
        return [];
    }

    public function lenses(NovaRequest $request): array
    {
        return [];
    }

    public function actions(NovaRequest $request): array
    {
        return [];
    }
}
