<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Page;

class Controller extends BaseController
{
    use AuthorizesRequests;

    protected Request $request;

    public function __construct(
        Request $request
    )
    {
        $this->request = $request;
    }

    public function index(Request $request): Factory|View|Application
    {
        $view = $this->getIndexTemplate();
        $templateData = $this->getTemplateData();

        return view($view, $templateData);
    }

    protected function loadPage(Request $request): Page
    {
        $action = $request->route()->getAction();

        return Page::findOrFail($action['page_id']);
    }

    protected function getIndexTemplate(): string
    {
        return '';
    }

    protected function getTemplateData(): array
    {
        return [];
    }
}
