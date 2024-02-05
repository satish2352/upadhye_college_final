<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Website\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use App\Models\CourseModel;
class AdmissionController extends Controller
{
    public function admission()
    {
        try {
            return view('website.pages.admissions.admission');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function registrationOfAdmission(Request $request){
        try
        {
             $request->validate([
            'course_id' => 'required|numeric',
            'admission_mode' => 'required|string',
            'fullname' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'mobile_number' => 'required|string', 
            'agree_to_receive_sms_call' => 'nullable|boolean',
        ]);
           
            $data = new RegistrationModel;
                
            $data->course_id = $request->input('course_id');
            $data->admission_mode = $request->input('admission_mode');
            $data->fullname = $request->input('fullname');
            $data->email = $request->input('email');
            $data->address = $request->input('address');
            $data->mobile_number = $request->input('mobile_number');
            $data->agree_to_receive_sms_call = $request->input('agree_to_receive_sms_call');
            $data->save();

            return view('website.pages.admissions.admission')->with(['msg' => 'Registration successful!', 'status' => 'success']);
            } catch (\Exception $e) {
            return redirect()->back()->withInput()->with(['msg' => 'Registration Failed!', 'status' => 'error']);
        }

    }

    public function scholarshipform()
    {
        try {
            $course = CourseModel::all();
            // dd($course);
            return view('website.pages.admissions.scholarshipform', compact('course'));
        } catch (\Exception $e) {
            return $e;
        }
    }
}
