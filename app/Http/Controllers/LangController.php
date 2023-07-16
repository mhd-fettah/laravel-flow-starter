<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function locale(string $locale)
    {
        App::setLocale($locale);
        Session::put('locale', $locale);

        return back();
    }
}
