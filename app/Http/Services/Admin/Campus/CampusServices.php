<?php
namespace App\Http\Services\Admin\Campus;
use App\Http\Repository\Admin\Campus\CampusRepository;
use Carbon\Carbon;
// use App\Helpers\helpercustom; // Import the namespace of your helper file
use App\Models\ {
    CampusMOdel
    };
use Config;
class CampusServices
{
	protected $repo;
    public function __construct(){
        $this->repo = new CampusRepository();
    }
    public function getAll(){
        try {
            return $this->repo->getAll();
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function addAll($request){
        try {
            $last_id = $this->repo->addAll($request);
            $path = Config::get('DocumentConstant.CAMPUS_GALLERY_ADD');
            $ImageName = $last_id['ImageName'];
            uploadImage($request, 'image', $path, $ImageName);
           
            if ($last_id) {
                return ['status' => 'success', 'msg' => 'Image Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' Image get Not Added.'];
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
            
            $path = Config::get('DocumentConstant.CAMPUS_GALLERY_ADD');
            if ($request->hasFile('image')) {
                if ($return_data['image']) {
                    if (file_exists_view(Config::get('DocumentConstant.CAMPUS_GALLERY_DELETE') . $return_data['image'])) {
                        removeImage(Config::get('DocumentConstant.CAMPUS_GALLERY_DELETE') . $return_data['image']);
                    }

                }
                if ($request->hasFile('image')) {
                    $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_image.' . $request->file('image')->extension();
                    
                    // Rest of your code...
                } else {
                    // Handle the case where 'image' key is not present in the request.
                    // For example, you might want to skip the file handling or return an error message.
                }

                
                // $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_image.' . $request->image->extension();
                uploadImage($request, 'image', $path, $englishImageName);
                $slide_data = CampusMOdel::find($return_data['last_insert_id']);
                $slide_data->image = $englishImageName;
                $slide_data->save();
            }
                
            // print_r($return_data);
            // die();
            if ($return_data) {
                return ['status' => 'success', 'msg' => 'Image Updated Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Image  Not Updated.'];
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