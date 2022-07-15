<?php

namespace Tests\Helpers;

use App\Models\Page;

trait WithRootPage
{
    use WithPage;

    public function createRootPage(?array $data = ['lv' => [], 'en' => [], 'ru' => []]): Page
    {
        return $this->createPage([
            'template' => 'home-page',
            'name' => [
                'lv' => 'LV',
                'en' => 'EN',
                'ru' => 'RU',
            ],
            'slug' => [
                'lv' => 'lv',
                'en' => 'en',
                'ru' => 'ru',
            ],
            'data' => $data,
        ]);
    }
}
