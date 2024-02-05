<?php

namespace App\Http\Controllers\Admin\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\Models\ {
    RegistrationModel
};

class RegistrationController extends Controller
{
  
    public function index(){
        try {
            $get_contactus= RegistrationModel::join('courses', 'courses.id', '=', 'registration.course_id')
                                ->select('courses.service_name', 'registration.*')
                                ->orderBy('created_at', 'desc')
                                ->get();
            // dd($get_contactus);
            return view('admin.pages.list-registration', compact('get_contactus'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function destroy(Request $request)
    {
        try {
            $contactus_data = RegistrationModel::find($request->delete_id);

            if ($contactus_data) {
                $contactus_data->delete();
            }

            return redirect()->back()
                ->with('status', 'Successfully Deleted');

        } catch (\Exception $e) {
            return $e;
        }
    }

      
}
