<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResourceModel;
use App\Http\Services\Admin\Master\ResourceServices;
use Validator;
use Illuminate\Validation\Rule;

class ResourceController extends Controller
{
    public function __construct()
    {
        $this->service = new ResourceServices();
    }
    public function index()
    {
        try {
            $incidenttype_data = $this->service->getAll();
// dd($incidenttype_data);
            return view('admin.pages.master.resource-insights.list-resource', compact('incidenttype_data'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function add()
    {
        return view('admin.pages.master.resource-insights.add-resource');
    }

    public function store(Request $request) {
        $rules = [
            'name' => 'required|max:255',
            // |unique:name|regex:/^[a-zA-Z\s]+$/u|max:255',
         ];
        $messages = [   
            'name'       =>  'Please enter title.',
            // 'name.regex' => 'Please  enter text only.',
            // 'name.unique' => 'Title already exist.',
        ];

        try {
            $validation = Validator::make($request->all(),$rules,$messages);
            if($validation->fails() )
            {
                return redirect('add-resource')
                    ->withInput()
                    ->withErrors($validation);
            }
            else
            {
                $add_incidenttype_data = $this->service->addAll($request);
                if($add_incidenttype_data)
                {

                    $msg = $add_incidenttype_data['msg'];
                    $status = $add_incidenttype_data['status'];
                    if($status=='success') {
                        return redirect('list-resource')->with(compact('msg','status'));
                    }
                    else {
                        return redirect('add-resource')->withInput()->with(compact('msg','status'));
                    }
                }

            }
        } catch (Exception $e) {
            return redirect('add-resource')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
    
    public function edit(Request $request)
    {
        $edit_data_id = base64_decode($request->edit_id);
        $incidenttype_data = $this->service->getById($edit_data_id);
        return view('admin.pages.master.resource-insights.edit-resource', compact('incidenttype_data'));
   
    }
   

    public function update(Request $request)
{
    $id = $request->input('id'); // Assuming the 'id' value is present in the request
    $rules = [
        'name' => ['required', 'max:255','regex:/^[a-zA-Z\s]+$/u', Rule::unique('resource_master', 'name')->ignore($id, 'id')],
    ];

    $messages = [
        'name.required' => 'Please enter an title.',
        'name.regex' => 'Please  enter text only.',
        'name.max' => 'Please enter an  title with a maximum of 255 characters.',
        'name.unique' => 'The title already exists.',
    ];

    try {
        $validation = Validator::make($request->all(), $rules, $messages);
// dd($validation->fails());
        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $update_incidenttype_data = $this->service->updateAll($request);

            if ($update_incidenttype_data) {
                $msg = $update_incidenttype_data['msg'];
                $status = $update_incidenttype_data['status'];

                if ($status == 'success') {
                    return redirect('list-resource')->with(compact('msg', 'status'));
                } else {
                    return redirect()->back()
                        ->withInput()
                        ->with(compact('msg', 'status'));
                }
            }
        }
    } catch (Exception $e) {
            dd($e);
        return redirect()->back()
            ->withInput()
            ->with(['msg' => $e->getMessage(), 'status' => 'error']);
    }
}

    public function show(Request $request)
    {
        try {
            $incidenttype_data = $this->service->getById($request->show_id);
            return view('admin.pages.master.resource-insights.show-resource', compact('incidenttype_data'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateOne(Request $request){
        try {
            $active_id = $request->active_id;
        $result = $this->service->updateOne($active_id);
            return redirect('list-resource')->with('flash_message', 'Updated!');  
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function destroy(Request $request){
        try {
            $incidenttype_data = $this->service->deleteById($request->delete_id);
            if ($incidenttype_data) {
                $msg = $incidenttype_data['msg'];
                $status = $incidenttype_data['status'];
                if ($status == 'success') {
                    return redirect('list-resource')->with(compact('msg', 'status'));
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
