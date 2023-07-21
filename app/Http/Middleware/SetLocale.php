<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            // If the locale is already set in the session, use it.
            $locale = Session::get('locale');
        } else {
            // Otherwise, determine the locale from the Accept-Language header.
            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
        }

        App::setLocale($locale);

        return $next($request);
    }
}
