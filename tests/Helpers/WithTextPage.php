<?php

namespace Tests\Helpers;

use App\Models\Page;

trait WithTextPage
{
    use WithPage;

    public function createTextPage(?array $data = null): Page
    {
        return $this->createPage([
            'template' => 'text-page',
            'name' => [
                'lv' => 'Text Page',
                'en' => 'Text Page',
                'ru' => 'Text Page',
            ],
            'slug' => [
                'lv' => 'text-page-lv',
                'en' => 'text-page-en',
                'ru' => 'text-page-ru',
            ],
            'data' => $data,
        ]);
    }
}
