<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteContactDetails;
class FooterController extends Controller
{
    public function index()
    {
        $website_contact_details=WebsiteContactDetails::get();
        // dd($data);
        return view('website.layout.footer',compact('website_contact_details'));
    }
}
