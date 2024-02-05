<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Home\ResourcesAndInsightsServices;
use Session;
use Validator;
use Config;

class ResourcesAndInsightsController extends Controller
{ 
    public function __construct(){
        $this->service = new ResourcesAndInsightsServices();
        }
        public function index(){
            try {
                $getOutput = $this->service->getAll();
                return view('admin.pages.home.resource-and-insights.list-resource-and-insights', compact('getOutput'));
            } catch (\Exception $e) {
                return $e;
            }
        }    
        public function add(){
            return view('admin.pages.home.resource-and-insights.add-resource-and-insights');
        }
        public function store(Request $request){
            $rules = [
                'title' => 'required|min:7|max:150',
                'duration' => 'required|min:7|max:150',
                'review' => 'required|min:7|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:501|min:5|dimensions:width=2000,height=600',
               
            ];
            $messages = [    
                'title.required'=>'Please enter title.',
                'title.min'=>'Please enter minimum 7 character.',
                'title.max'=>'Please enter maximum character upto 150.',
                'duration.required' => 'Please  enter description.',
                'duration.min'=>'Please enter minimum 7 character.',
                'duration.max'=>'Please enter maximum character upto 150.',
                'review.required' => 'Please  enter description.',
                'review.min'=>'Please enter minimum 7 character.',
                'review.max'=>'Please enter maximum character upto 255.',
                'image.required' => 'The image is required.',
                'image.image' => 'The image must be a valid image file.',
                'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
                'image.max' => 'The image size must not exceed 500 KB .',
                'image.min' => 'The image size must not be less than 5 KB .',
                'image.dimensions' => 'The image dimensions must be between 100X100 and 500x529 pixels.',
            ];
    
            try {
                $validation = Validator::make($request->all(), $rules, $messages);
                
                if ($validation->fails()) {
                    return redirect('add-resource-and-insights')
                        ->withInput()
                        ->withErrors($validation);
                } else {
                    $add_record = $this->service->addAll($request);
    
                    if ($add_record) {
                        $msg = $add_record['msg'];
                        $status = $add_record['status'];
    
                        if ($status == 'success') {
                            return redirect('list-resource-and-insights')->with(compact('msg', 'status'));
                        } else {
                            return redirect('add-resource-and-insights')->withInput()->with(compact('msg', 'status'));
                        }
                    }
                }
            } catch (Exception $e) {
                return redirect('add-resource-and-insights')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
            }
        }
        public function show(Request $request){
            try {
                $showData = $this->service->getById($request->show_id);
                return view('admin.pages.home.resource-and-insights.show-resource-and-insights', compact('showData'));
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function edit(Request $request){
            $edit_data_id = base64_decode($request->edit_id);
            $editData = $this->service->getById($edit_data_id);
           
            return view('admin.pages.home.resource-and-insights.edit-resource-and-insights', compact('editData'));
        }
        public function update(Request $request){
            $rules = [
                'title' => 'required|min:7|max:150',
                'duration' => 'required|min:7|max:150',
                'review' => 'required|min:7|max:255',              
               
            ];
            
    
            if($request->has('image')) {
                $rules['image'] = 'required|image|mimes:jpeg,png,jpg|max:501|min:5|dimensions:width=2000,height=600';
            }
           
            $messages = [   
                'title.required'=>'Please enter title.',
                'title.min'=>'Please enter minimum 7 character.',
                'title.max'=>'Please enter maximum character upto 150.',
                'duration.required' => 'Please  enter description.',
                'duration.min'=>'Please enter minimum 7 character.',
                'duration.max'=>'Please enter maximum character upto 150.',
                'review.required' => 'Please  enter description.',
                'review.min'=>'Please enter minimum 7 character.',
                'review.max'=>'Please enter maximum character upto 255.',
                'image.required' => 'The image is required.',
                'image.image' => 'The image must be a valid image file.',
                'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
                'image.max' => 'The image size must not exceed 500 KB .',
                'image.min' => 'The image size must not be less than 5 KB .',
                'image.dimensions' => 'The image dimensions must be between 100X100 and 500x529 pixels.',
               
            ];
    
            try {
                $validation = Validator::make($request->all(),$rules, $messages);
                if ($validation->fails()) {
                    return redirect()->back()
                        ->withInput()
                        ->withErrors($validation);
                } else {
                    $update_data = $this->service->updateAll($request);
                    if ($update_data) {
                        $msg = $update_data['msg'];
                        $status = $update_data['status'];
                        if ($status == 'success') {
                            return redirect('list-resource-and-insights')->with(compact('msg', 'status'));
                        } else {
                            return redirect()->back()
                                ->withInput()
                                ->with(compact('msg', 'status'));
                        }
                    }
                }
            } catch (Exception $e) {
                return redirect()->back()
                    ->withInput()
                    ->with(['msg' => $e->getMessage(), 'status' => 'error']);
            }
        }
        public function updateOne(Request $request){
            try {
                $active_id = $request->active_id;
            $result = $this->service->updateOne($active_id);
                return redirect('list-resource-and-insights')->with('flash_message', 'Updated!');  
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function destroy(Request $request){
            try {
                $delete_record = $this->service->deleteById($request->delete_id);
                if ($delete_record) {
                    $msg = $delete_record['msg'];
                    $status = $delete_record['status'];
                    if ($status == 'success') {
                        return redirect('list-resource-and-insights')->with(compact('msg', 'status'));
                    } else {
                        return redirect()->back()
                            ->withInput()
                            ->with(compact('msg', 'status'));
                    }
                }
            } catch (\Exception $e) {
                return $e;
            }
        } 
}
