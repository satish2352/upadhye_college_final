<?php

namespace App\Http\Controllers\Admin\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\ContactUs\AboutUsContactUsListServices;
use Session;
use Validator;
use App\Models\Subscribers;
class AboutUsContactUsListController extends Controller
{
    public function __construct(){
        $this->service = new AboutUsContactUsListServices();
        }
        public function index(){
            try {
                $get_contactus=Subscribers::get();
                return view('admin.pages.about-us-contactus.list-subscribers', compact('get_contactus'));
            } catch (\Exception $e) {
                return $e;
            }
        }
       
        public function destroy(Request $request)
    {
        try {
            // dd($request);
            // Get the id from the request
            $subscriberId = $request->input('delete_id');

            // Find the subscriber by id and delete
            $subscriber = Subscribers::find($subscriberId);
            
            if ($subscriber) {
                $subscriber->delete();
                $msg = 'Subscriber deleted successfully!';
                $status = 'success';
            } else {
                $msg = 'Subscriber not found!';
                $status = 'error';
            }

            return redirect()->back()->with(compact('msg', 'status'));
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
}
