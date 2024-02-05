<?php
namespace App\Http\Services\Admin\Master;

use App\Http\Repository\Admin\Master\ResourceRepository;

use App\ResourceModel;
use Carbon\Carbon;


class ResourceServices{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct(){
        $this->repo = new ResourceRepository();
    }
    public function getAll(){
        try {
            return $this->repo->getAll();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function addAll($request) {
        try {
            $add_Incidenttype = $this->repo->addAll($request);
            // dd($add_Incidenttype);
            if ($add_Incidenttype) {
                return ['status' => 'success', 'msg' => 'Resource Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Resource Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function getById($id){
        try {
            return $this->repo->getById($id);
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateAll($request){
        try {
            $update_Incidenttype = $this->repo->updateAll($request);
            // dd($update_Incidenttype);
            if ($update_Incidenttype) {
                return ['status' => 'success', 'msg' => 'Resource Updated Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Resource Not Updated.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function deleteById($id){
        try {
            $delete = $this->repo->deleteById($id);
            if ($delete) {
                return ['status' => 'success', 'msg' => 'Deleted Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' Not Deleted.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        } 
    }
   
    public function updateOne($id)
    {
        return $this->repo->updateOne($id);
    }


}