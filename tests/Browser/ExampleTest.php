<?php

namespace Tests\Browser;

use App\Models\Menu;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\Helpers\WithPage;
use Tests\Helpers\WithRootPage;

class ExampleTest extends DuskTestCase
{
    use WithRootPage;
    use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $menu = Menu::factory()->create();
        $data = [
            'en' => ['menu' => $menu->id],
            'lv' => ['menu' => $menu->id],
            'ru' => ['menu' => $menu->id],
        ];
        $page = $this->createRootPage($data);
    }

    public function testBasicExample()
    {


        //dd($menu);

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
}
