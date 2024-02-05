<?php
namespace App\Http\Repository\Admin;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    WebsiteContactDetails
};
use Config;

class WebsiteContactDetailsRepository  {
 
    public function getById($id){
        try {
            $dataOutputByid = WebsiteContactDetails::where('id',1)->get()->toArray();
            return $dataOutputByid;
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by id Data.',
                'status' => 'error'
            ];
        }
    }
    public function updateAll($request){
        try {
            $return_data = array();
            $dataOutput = WebsiteContactDetails::where('id',1)->update([
                            'contact_one'  => isset($request['contact_one']) ? $request['contact_one'] : '#',
                            'contact_two'  => isset($request['contact_two']) ? $request['contact_two'] : '#',
                            'contact_three'  => isset($request['contact_three']) ? $request['contact_three'] : '#',
                            'youtube_link'  => isset($request['youtube_link']) ? $request['youtube_link'] : '#',
                            'twitter_link'  => isset($request['twitter_link']) ? $request['twitter_link'] : '#',
                            'mail_id'  => isset($request['mail_id']) ? $request['mail_id'] : '#',
                            'facebook_link'  => isset($request['facebook_link']) ? $request['facebook_link'] : '#',
                            'instagram_link'  => isset($request['instagram_link']) ? $request['instagram_link'] : '#',
                            'address'  => isset($request['address']) ? $request['address'] : '#',
                        ]);


            return  $return_data;
        
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to Update Data.',
                'status' => 'error',
                'error' => $e->getMessage() // Return the error message for debugging purposes
            ];
        }
    }
  
}