<?php

namespace App\Repositories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Collection;

class PageRepository
{
    public function getPageById(int $id): Page
    {
        return Page::findOrFail($id);
    }

    public function getPageByTemplate(string $template): ?Collection
    {
        return Page::where('template', $template)->get();
    }
}
