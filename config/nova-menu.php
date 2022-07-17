<?php

use App\Enums\Menu\Type as MenuType;

return [
    /*
    |------------------|
    | Required options |
    |------------------|
    */


    /*
    |--------------------------------------------------------------------------
    | Table names
    |--------------------------------------------------------------------------
    */

    'menus_table_name' => 'nova_menu_menus',
    'menu_items_table_name' => 'nova_menu_menu_items',


    /*
    |--------------------------------------------------------------------------
    | Locales
    |--------------------------------------------------------------------------
    |
    | Set all the available locales as either [key => name] pairs, a closure
    | or a callable (ie 'locales' => 'nova_get_locales').
    |
    */

    'locales' => [
        'lv' => 'Latvian',
        'en' => 'English',
        'ru' => 'Russian',
    ],


    /*
    |--------------------------------------------------------------------------
    | Menus
    |--------------------------------------------------------------------------
    |
    | Set all the possible menus in a keyed array of arrays with the options
    | 'name' and optionally 'menu_item_types' and unique.
    /  Unique is true by default
    |
    | For example: ['header' => ['name' => 'Header', 'unique' => true, 'menu_item_types' => []]]
    |
    */

    'menus' => [
        MenuType::HEADER->value => [
             'name' => 'Header',
             'unique' => true,
             'max_depth' => 1,
             'menu_item_types' => []
         ],
        MenuType::FOOTER_LEFT->value => [
            'name' => 'Footer Left',
            'unique' => true,
            'max_depth' => 1,
            'menu_item_types' => []
        ],
        MenuType::FOOTER_RIGHT->value => [
            'name' => 'Footer Right',
            'unique' => true,
            'max_depth' => 1,
            'menu_item_types' => []
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu item types
    |--------------------------------------------------------------------------
    |
    | Set all the available menu item types as an array.
    |
    */

    'menu_item_types' => [
        \Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType::class,
        \App\Nova\MenuBuilder\MenuItemTypes\MenuItemPageType::class,
    ],

    /*
    |--------------------------------|
    | Optional configuration options |
    |--------------------------------|
    */
    'show_duplicate' => true,

    'collapsed_as_default' => true,

    /*
    |--------------------------------------------------------------------------
    | Resource
    |--------------------------------------------------------------------------
    |
    | Optionally override the original Menu resource.
    |
    */

    'resource' => Outl1ne\MenuBuilder\Nova\Resources\MenuResource::class,


    /*
    |--------------------------------------------------------------------------
    | Menu Model
    |--------------------------------------------------------------------------
    |
    | Optionally override the original Menu model.
    |
    */

    'menu_model' => App\Models\Menu\Menu::class,


    /*
    |--------------------------------------------------------------------------
    | MenuItem Model
    |--------------------------------------------------------------------------
    |
    | Optionally override the original Menu Item model.
    |
    */

    'menu_item_model' => App\Models\Menu\MenuItem::class,


    /*
    |--------------------------------------------------------------------------
    | Auto-load migrations
    |--------------------------------------------------------------------------
    |
    | Allow auto-loading of migrations (without the need to publish them)
    |
    */

    'auto_load_migrations' => true,


];
