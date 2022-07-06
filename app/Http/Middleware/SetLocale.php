<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $action = $request->route()->getAction();

        if (isset($action['page_locale'])) {
            app()->setLocale($action['page_locale']);
        }

        return $next($request);
    }
}
