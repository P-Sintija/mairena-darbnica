<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
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
    protected PageRepository $pageRepository;

    public function __construct(
        Request        $request,
        PageRepository $pageRepository,
    )
    {
        $this->request = $request;
        $this->pageRepository = $pageRepository;
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

        return $this->pageRepository->getPageById($action['page_id']);
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
