<?php

namespace App\Repositories;

use Outl1ne\PageManager\Models\Page;

class PageRepository
{
    public function getPageById(int $id): Page
    {
        return Page::findOrFail($id);
    }
}
