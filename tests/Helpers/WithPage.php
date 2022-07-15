<?php

namespace Tests\Helpers;

use App\Models\Page;
use Illuminate\Database\Eloquent\Collection;

trait WithPage
{
    public function makePage($attributes = [], $count = null): Page|Collection
    {
        return Page::factory()->count($count)->make($attributes);
    }

    public function createPage($attributes = [], $count = null): Page|Collection
    {
        return Page::factory()->count($count)->create($attributes);
    }
}
