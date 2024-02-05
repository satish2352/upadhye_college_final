<?php
namespace App\Http\Repository\Website\Subscriber;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Subcribers
};

class SubscriberRepository  {


    public function aboutusContact($request)
    {
        try {
            $contact = new Subcribers();
            $contact->email = $request['email'];
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