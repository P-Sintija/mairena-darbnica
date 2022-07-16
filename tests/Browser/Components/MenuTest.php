<?php

namespace Tests\Browser\Components;

use App\Enums\Menu\Type;
use App\Models\Menu\Menu;
use App\Models\Menu\MenuItem;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\Helpers\WithRootPage;
use Tests\Helpers\WithTextPage;

class MenuTest extends DuskTestCase
{
    use WithRootPage;
    use WithTextPage;
    use DatabaseMigrations;

    protected MenuItem $menuItemOne;
    protected MenuItem $menuItemTwo;
    protected MenuItem $leftFooterItem;
    protected MenuItem $rightFooterItem;

    public function setUp(): void
    {
        parent::setUp();

        $this->createRootPage();
        $this->createTextPage();

        $menu = Menu::factory()->create();
        $this->menuItemOne = MenuItem::factory()->for($menu)->create();
        $this->menuItemTwo = MenuItem::factory()->for($menu)->create();

        $leftFooter = Menu::factory()->create(['slug' => Type::FOOTER_LEFT->value]);
        $this->leftFooterItem = MenuItem::factory()->for($leftFooter)->create(['value' => 'left']);

        $rightFooter = Menu::factory()->create(['slug' => Type::FOOTER_RIGHT->value]);
        $this->rightFooterItem = MenuItem::factory()->for($rightFooter)->create(['value' => 'right']);
    }

    public function testShowMenusOnAllPages()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSeeLink($this->menuItemOne->name)
                ->assertSeeLink($this->menuItemTwo->name)
                ->assertSeeLink($this->leftFooterItem->name)
                ->assertSeeLink($this->rightFooterItem->name)
                ->visit('/text-page-lv')
                ->assertSeeLink($this->menuItemOne->name)
                ->assertSeeLink($this->menuItemTwo->name)
                ->assertSeeLink($this->leftFooterItem->name)
                ->assertSeeLink($this->rightFooterItem->name);
        });
    }
}
