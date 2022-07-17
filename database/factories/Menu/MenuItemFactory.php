<?php

namespace Database\Factories\Menu;

use App\Models\Menu\MenuItem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Outl1ne\MenuBuilder\MenuItemTypes\MenuItemStaticURLType;

class MenuItemFactory extends Factory
{
    protected $model = MenuItem::class;

    public function definition(): array
    {
        return [
            'menu_id' => 1,
            'name' => $this->faker->word,
            'locale' => 'lv',
            'class' => MenuItemStaticURLType::class,
            'value' => '#',
            'target' => '_self',
            'data' => json_encode([]),
            'parent_id' => null,
            'order' => $this->faker->randomNumber(1),
            'enabled' => true,
            'nestable' => true,
        ];
    }
}
