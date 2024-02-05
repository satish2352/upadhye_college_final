<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\WebsiteContactDetailsServices;
use Session;
use Validator;
use Config;
use App\Models\ServiceMasters;

class WebsiteContactDetailsController extends Controller
{ 
    public function __construct(){
        $this->service = new WebsiteContactDetailsServices();
    }

    public function edit(Request $request){
        $edit_data_id = 1;
        $website_contact_details = $this->service->getById($edit_data_id);
        return view('admin.pages.webiste-contact-details.edit-website-contact', compact('website_contact_details'));
    }

    public function update(Request $request){
        $rules = [
            'contact_one' => 'required|max:255',
            'contact_two' => 'required|max:255',
            'contact_three' => 'required|max:255',
            'mail_id' => 'required',
            'facebook_link' => 'required|max:255',
            'twitter_link' => 'required|max:255',
            'youtube_link' => 'required|max:255',
            'instagram_link' => 'required|max:255',
            'address'  => 'required|max:255'
        ];

        
        $messages = [   
            'contact_one.required'=>'Please enter contact number.',
            'contact_one.min'=>'Please enter minimum 7 character.',
            'contact_one.max'=>'Please enter maximum character upto 10.',

            'contact_two.required'=>'Please enter contact number.',
            'contact_two.min'=>'Please enter minimum 7 character.',
            'contact_two.max'=>'Please enter maximum character upto 10.',

            'mail_id.required'=>'Please enter mail id.',
            'mail_id.min'=>'Please enter minimum 7 character.',
            'mail_id.max'=>'Please enter maximum character upto 10.',

            'facebook_link.required'=>'Please enter some link.',
            'instagram_link.required'=>'Please enter some link.',
            'address.required'=>'Please enter some link.',
           
            
        ];

        try {
            // $validation = Validator::make($request->all(),$rules, $messages);
            // if ($validation->fails()) {
            //     return redirect()->back()
            //         ->withInput()
            //         ->withErrors($validation);
            // } else {
                $update_data = $this->service->updateAll($request);
                // dd($update_data);
                if ($update_data) {
                    $msg = $update_data['msg'];
                    $status = $update_data['status'];
                    if ($status == 'success') {
                        return redirect('edit-website-contact-details')->with(compact('msg', 'status'));
                    } else {
                        return redirect()->back()
                            ->withInput()
                            ->with(compact('msg', 'status'));
                    }
                // }
            }
        } catch (Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }

  
}
