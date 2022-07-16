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

class HomePageTest extends DuskTestCase
{
    use WithRootPage;
    use DatabaseMigrations;

    protected array $pageData;

    public function setUp(): void
    {
        parent::setUp();

        $this->pageData = [
            'lv' => [
                'hero_title' => 'Hero title',
                'hero_text' => 'Hero text',
                'hero_redirect_label' => 'Hero redirect label',
                'hero_redirect_url' => 'https://www.example.com/'
            ],
        ];

        $this->createRootPage($this->pageData);
    }

    public function testHomePageHeroSection()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee($this->pageData['lv']['hero_title'])
                    ->assertSee($this->pageData['lv']['hero_text'])
                    ->assertSeeLink($this->pageData['lv']['hero_redirect_label'])
                    ->clickLink($this->pageData['lv']['hero_redirect_label'])
                    ->assertUrlIs($this->pageData['lv']['hero_redirect_url']);
        });
    }
}
