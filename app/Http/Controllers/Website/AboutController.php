<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        try {
            return view('website.pages.about.about');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
