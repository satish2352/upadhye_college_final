<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\ResourcesAndInsights;
use App\Models\ComiteeDetails;
use App\Models\Gallery;
use App\Models\Subscribers;
use App\Models\WebsiteContactDetails;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        try {
            // Fetch data from Slider model
            $dataSlider = Slider::where('is_active', 1)->get();

            // Fetch data from ResourcesAndInsights model
            $resourcesData = ResourcesAndInsights::where('is_active', 1)->get();

            // Fetch data from ComiteeDetails model
            $serviceDetailsData = ComiteeDetails::where('is_active', 1)->get();
            
            // Fetching the value of gallery from database
            $galleryDetailsData = Gallery::where('is_active', 1)->get();
    
            // $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();

            // dd($website_contact_details);
            return view('website.pages.index', compact('dataSlider', 'resourcesData', 'serviceDetailsData', 'galleryDetailsData'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function subscriber(Request $request)
    {
        $rules = [
            'email' => 'required|email',
        ];

        $messages = [
            'email.required' => 'Please Enter Email.',
            'email.email' => 'Please Enter a Valid Email Address.',
        ];

        try {
            $request->validate($rules, $messages);

            $subscriber = new Subscribers();
            $subscriber->email = $request->email;
            $subscriber->save();

            $msg = 'Data submitted successfully!';
            $status = 'success';

            return redirect('/')->with(compact('msg', 'status'));
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $status = 'errors';

            return redirect('/')->withInput()->with(compact('msg', 'status'));
        }
    }
}
