<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Gallery\GalleryServices;
use Session;
use Validator;
use Config;
class GalleryController extends Controller
{
    public function __construct(){
    $this->service = new GalleryServices();
    }
    public function index(){
        try {
            $getOutput = $this->service->getAll();
            return view('admin.pages.gallery.gallery.list-gallery', compact('getOutput'));
        } catch (\Exception $e) {
            return $e;
        }
    }    
    public function add(){
        return view('admin.pages.gallery.gallery.add-gallery');
    }
    public function store(Request $request){
        $rules = [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5010|min:5|dimensions:min_width=10,min_height=10,max_width=10240,max_height=10240'
           
        ];
        $messages = [    
            'image.required' => 'The image is required.',
            'image.image' => 'The image must be a valid image file.',
            'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
            'image.max' => 'The image size must not exceed 500 KB .',
            'image.min' => 'The image size must not be less than 5 KB .',
            'image.dimensions' => 'The image dimensions must be between 100X100 and 1024x1024 pixels.',
           
        ];

        try {
            $validation = Validator::make($request->all(), $rules, $messages);
            
            if ($validation->fails()) {
                return redirect('add-gallery')
                    ->withInput()
                    ->withErrors($validation);
            } else {
                $add_record = $this->service->addAll($request);

                if ($add_record) {
                    $msg = $add_record['msg'];
                    $status = $add_record['status'];

                    if ($status == 'success') {
                        return redirect('list-gallery')->with(compact('msg', 'status'));
                    } else {
                        return redirect('add-gallery')->withInput()->with(compact('msg', 'status'));
                    }
                }
            }
        } catch (Exception $e) {
            return redirect('add-gallery')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
    public function show(Request $request){
        try {
            $showData = $this->service->getById($request->show_id);
            return view('admin.pages.gallery.gallery.show-gallery', compact('showData'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function edit(Request $request){
        $edit_data_id = base64_decode($request->edit_id);
        $editData = $this->service->getById($edit_data_id);
        return view('admin.pages.gallery.gallery.edit-gallery', compact('editData'));
    }
    public function update(Request $request){
        $rules = [            
        ];

        if($request->has('image')) {
            $rules['image'] =  'required|image|mimes:jpeg,png,jpg|max:5010|min:5|dimensions:min_width=10,min_height=10,max_width=10240,max_height=10240';
        }
       
        $messages = [   
            'image.image' => 'The image must be a valid image file.',
            'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
            'image.max' => 'The image size must not exceed 500 KB .',
            'image.min' => 'The image size must not be less than 5 KB .',
            'image.dimensions' => 'The image dimensions must be between 100X100 and 1024x1024 pixels.',
           
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
                        return redirect('list-gallery')->with(compact('msg', 'status'));
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
            return redirect('list-gallery')->with('flash_message', 'Updated!');  
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
                    return redirect('list-gallery')->with(compact('msg', 'status'));
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