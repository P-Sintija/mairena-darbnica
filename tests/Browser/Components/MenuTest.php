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

    protected string $pageRedirectLabel;
    protected string $linkRedirectLabel;
    protected string $linkRedirectLik;

    public function setUp(): void
    {
        parent::setUp();

        $this->pageRedirectLabel = 'Lapas redirekts';
        $this->linkRedirectLabel = 'Linka redirekts';
        $this->linkRedirectLik = 'https://www.wikipedia.org';


        $menu = Menu::factory()->create();
        $data = [
            'en' => ['menu' => $menu->id],
            'lv' => ['menu' => $menu->id],
            'ru' => ['menu' => $menu->id],
        ];
        $page = $this->createRootPage($data);
    }

    public function testMenuOnHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    private function menuData(): array
    {
        return [
            'en' => [
                [
                    'layout' => Menu::REDIRECT_PAGE,
                    'key' => 'gK1U0dor4xK3QhaO',
                    'attributes' => [
                        'label' => [
                            'en' => $this->pageRedirectLabel,
                            'lv' => $this->pageRedirectLabel,
                            'ru' => $this->pageRedirectLabel,
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
        ];
    }
}
