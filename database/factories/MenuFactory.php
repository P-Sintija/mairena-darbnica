<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class MenuFactory extends Factory
{
    protected $model = Menu::class;

    #[ArrayShape([
        'name' => "string",
        'menu_items' => "array",
    ])] public function definition(): array
    {
        //{"en":[
        //{"layout":"redirect_page",
        //"key":"gK1U0dor4xK3QhaO",
        //"attributes":{"label":{"en":"Test","lv":"Tests","ru":"Tjest"},"page_id":"2"}}
        //
        //,{"layout":"redirect_link",
        //"key":"j4ligxjZqfEsTzW2",
        //"attributes":{"label":{"en":"Link","lv":"Links","ru":"Ljink"},"link":{"en":"#","lv":"#","ru":"#"}}}
        //]}
        return [
            'name' => $this->faker->word,
            'menu_items' => [
                'en' => [
                    [
                        'layout' => Menu::REDIRECT_PAGE,
                        'key' => 'gK1U0dor4xK3QhaO',
                        'attributes' => [
                            'label' => [
                                'en' => 'Test-page',
                                'lv' => 'Tests-page',
                                'ru' => 'Tjest-page',
                            ],
                            'page_id' => 1,
                        ]
                    ],
                    [
                        'layout' => Menu::REDIRECT_LINK,
                        'key' => 'j4ligxjZqfEsTzW2',
                        'attributes' => [
                            'label' => [
                                'en' => 'Test-link',
                                'lv' => 'Tests-link',
                                'ru' => 'Tjest-link',
                            ],
                            'link' => [
                                'en' => '#',
                                'lv' => '#',
                                'ru' => '#',
                            ],
                        ]
                    ],
                ],
            ],
        ];
    }
}
