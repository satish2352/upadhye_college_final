<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
      return view('website.index');
      }
    public function about(){
      return view('website.about');
    }
    public function courses(){
      return view('website.courses');
    }
    public function contactme(){
      return view('website.contactme');
    }
}
