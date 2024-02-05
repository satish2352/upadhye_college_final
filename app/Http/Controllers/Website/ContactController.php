<?php

namespace App\Http\Controllers\Website;
use Session;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Models\ContactUs;
class ContactController extends Controller
{
    public function contact()
    {
        try {
            return view('website.pages.contact.contactme');
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function addContactUsForm(Request $request) {
    $rules = [
            'full_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];

        $messages = [   
            'full_name.required' => 'Please Enter Full Name.',
            'email.required' => 'Please Enter Email.',
            'email.email' => 'Please Enter a Valid Email Address.',
            'subject.required' => 'Please Enter Subject.',
            'message.required' => 'Please Enter Message.',
            ];
    
        try {
    $validator = Validator::make($request->all(), $rules, $messages);
        // dd($validator->fails());

    if ($validator->fails()) {
        return redirect('contact')->with(['msg' => "Failed To Submit Details...", 'status' => 'error']);
    }

    $contact = new ContactUs();
    $contact->full_name = $request->input('full_name');
    $contact->email = $request->input('email');
    $contact->subject = $request->input('subject');
    $contact->message = $request->input('message');
    $contact->save();


    return redirect('contact')->with(['msg' => 'Contact information submitted successfully!', 'status' => 'success']);
    } catch (Exception $e) {
            return redirect('contact')->with(['msg' => "Failed To Submit Details...", 'status' => 'error']);
        }
    }
}
