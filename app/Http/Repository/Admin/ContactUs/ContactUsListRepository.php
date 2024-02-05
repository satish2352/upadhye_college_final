<?php
namespace App\Http\Repository\Admin\ContactUs;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
	ContactUs
};
use Config;

class ContactUsListRepository  {

    public function getAll(){
        try {
            return ContactUs::all();
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getById($id)
    {
        try {
            $contactus_data = ContactUs::find($id);
            if ($contactus_data) {
                return $contactus_data;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by id Scolarship List.',
                'status' => 'error'
            ];
        }
    }
    public function deleteById($id)
    {
        try {
            $contactus_data = ContactUs::find($id);

            if ($contactus_data) {
                $contactus_data->delete();
            }

            return $contactus_data;
        } catch (\Exception $e) {
            return $e;
        }
    }
}