<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class PageFactory extends Factory
{
    protected $model = Page::class;

    #[ArrayShape([
        'active' => "boolean",
        'template' => "string",
        'name' => "array",
        'slug' => "array",
        'data' => "array"
    ])] public function definition(): array
    {
        return [
            'active' => true,
            'template' => $this->faker->word,
            'name' => [app()->getLocale() => $this->faker->word],
            'slug' => [app()->getLocale() => $this->faker->slug],
            'data' => [app()->getLocale() => [$this->faker->word => $this->faker->word]],
        ];
    }
}
