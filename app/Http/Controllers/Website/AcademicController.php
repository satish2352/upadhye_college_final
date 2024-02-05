<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function academic()
    {
        try {
            return view('website.pages.academics.academic');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
