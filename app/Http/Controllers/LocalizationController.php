<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($locale)
    {
        if (!in_array($locale, config('localization.locales'))) {
            abort(404);
        }

        session(['locale' => $locale]);
        return redirect()->back();
    }
}
