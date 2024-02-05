<?php
namespace App\Http\Services\Admin;
use App\Http\Repository\Admin\WebsiteContactDetailsRepository;
use Carbon\Carbon;
use App\Models\ {
    WebsiteContactDetails
    };

use Config;
class WebsiteContactDetailsServices
{
	protected $repo;
    public function __construct(){
        $this->repo = new WebsiteContactDetailsRepository();
    }

    public function getById($id){
        try {
            return $this->repo->getById($id);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function updateAll($request){
        // dd($request);
        try {

            $return_data = $this->repo->updateAll($request);
            return ['status' => 'success', 'msg' => 'Website Details Updated Successfully.'];
           
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }

}