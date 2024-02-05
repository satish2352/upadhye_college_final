<?php
namespace App\Http\Repository\Website\AboutUsOne;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;

use Session;
use App\Models\ {
    AboutUsContactUs
};

class AboutUsRepositoryy  {


    public function aboutusContact($request)
    {
        try {
            $contact = new AboutUsContactUs();
            $contact->full_name = $request['full_name'];
            $contact->email = $request['email'];
            $contact->mobile_number = $request['mobile_number'];
            $contact->zip_code = $request['zip_code'];
            $contact->save();

            return $contact;


        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }

}