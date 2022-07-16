<?php

namespace Database\Factories\Menu;

use App\Enums\Menu\Type;
use App\Models\Menu\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    protected $model = Menu::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => Type::HEADER->value,
        ];
    }
}
