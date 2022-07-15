<?php

namespace App\Nova\Resources;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;
use App\Models\Menu as MenuModel;
use App\Models\Page;
use Outl1ne\NovaTranslatable\HandlesTranslatable;
use Whitecube\NovaFlexibleContent\Flexible;

class Menu extends Resource
{
    use HandlesTranslatable;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Menu::class;

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name',
    ];

    public function title(): string
    {
        return $this->name;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')
                ->sortable()
                ->rules('required'),
            Flexible::make(__('Menu items'), 'menu_items')
                ->addLayout(__('Redirect link'), MenuModel::REDIRECT_LINK, [
                    Text::make(__('Label'), 'label')
                        ->translatable()
                        ->rules('required'),
                    Text::make(__('Link'), 'link')
                        ->translatable()
                        ->rules('required'),
                ])
                ->addLayout(__('Redirect page'), MenuModel::REDIRECT_PAGE, [
                    Text::make(__('Label'), 'label')
                        ->translatable()
                        ->rules('required'),
                    Select::make(__('Page'), 'page_id')
                        ->options(function () {
                            return Page::all()->pluck('name', 'id');
                        })->rules('required')
                        ->displayUsingLabels(),
                ])->button(__('Add menu item')),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
