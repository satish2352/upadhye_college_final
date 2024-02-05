<?php
namespace App\Http\Services\Admin\Master;
use App\Http\Repository\Admin\Master\ComiteeRepository;
use Carbon\Carbon;
use App\Models\ {
    ComiteeDetails
    };

use Config;
class ComiteeDetailsServices
{
	protected $repo;
    public function __construct(){
        $this->repo = new ComiteeRepository();
    }
    public function getAll(){
        try {
            return $this->repo->getAll();
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function addAll($request)
{
    try {
        $last_id = $this->repo->addAll($request);
        // dd($last_id);
        $ImageName = $last_id['ImageName'] ?? null;
        
        if ($ImageName !== null) {
            $path = Config::get('DocumentConstant.SERVICES_ADD');
            uploadImage($request, 'image', $path, $ImageName);

            if ($last_id) {
                return ['status' => 'success', 'msg' => 'Services Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Services Not Added.'];
            }
        } else {
            return ['status' => 'error', 'msg' => 'ImageName key not found in the array.'];
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
            $return_data = $this->repo->updateAll($request);
            
            $path = Config::get('DocumentConstant.SERVICES_ADD');
            if ($request->hasFile('image')) {
                if ($return_data['image']) {
                    if (file_exists_view(Config::get('DocumentConstant.SERVICES_DELETE') . $return_data['image'])) {
                        removeImage(Config::get('DocumentConstant.SERVICES_DELETE') . $return_data['image']);
                    }

                }
                if ($request->hasFile('image')) {
                    $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_image.' . $request->file('image')->extension();
                } 
                uploadImage($request, 'image', $path, $englishImageName);
                $slide_data = ComiteeDetails::find($return_data['last_insert_id']);
                $slide_data->image = $englishImageName;
                $slide_data->save();
            }          
            if ($return_data) {
                return ['status' => 'success', 'msg' => 'Data Updated Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Data Not Updated.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }

   
    public function updateOne($id){
        return $this->repo->updateOne($id);
    }   
        
    public function deleteById($id)
    {
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
}