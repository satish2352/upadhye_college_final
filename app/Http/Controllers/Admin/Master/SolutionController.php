<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Master\SolutionServices;
use Validator;
use Illuminate\Validation\Rule;

class SolutionController extends Controller
{
    public function __construct()
    {
        $this->service = new SolutionServices();
    }
    public function index()
    {
        try {
            $incidenttype_data = $this->service->getAll();
            return view('admin.pages.master.location-address.list-solution', compact('incidenttype_data'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function add()
    {
        return view('admin.pages.master.location-address.add-solution');
    }

    public function store(Request $request) {
        $rules = [
            'solution_name' => 'required|max:255',
            // |unique:solution_name|regex:/^[a-zA-Z\s]+$/u|max:255',
         ];
        $messages = [   
            'solution_name'       =>  'Please enter title.',
            // 'solution_name.regex' => 'Please  enter text only.',
            // 'solution_name.unique' => 'Title already exist.',
        ];

        try {
            $validation = Validator::make($request->all(),$rules,$messages);
            if($validation->fails() )
            {
                return redirect('add-solution')
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
                        return redirect('list-solution')->with(compact('msg','status'));
                    }
                    else {
                        return redirect('add-solution')->withInput()->with(compact('msg','status'));
                    }
                }

            }
        } catch (Exception $e) {
            return redirect('add-solution')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
    
    public function edit(Request $request)
    {
        $edit_data_id = base64_decode($request->edit_id);
        $incidenttype_data = $this->service->getById($edit_data_id);
        return view('admin.pages.master.location-address.edit-solution', compact('incidenttype_data'));
   
    }
   

    public function update(Request $request)
{
    $id = $request->input('id'); // Assuming the 'id' value is present in the request
    $rules = [
        'solution_name' => ['required', 'max:255','regex:/^[a-zA-Z\s]+$/u', Rule::unique('our_solutions_master', 'solution_name')->ignore($id, 'id')],
    ];

    $messages = [
        'solution_name.required' => 'Please enter an title.',
        'solution_name.regex' => 'Please  enter text only.',
        'solution_name.max' => 'Please enter an  title with a maximum of 255 characters.',
        'solution_name.unique' => 'The title already exists.',
    ];

    try {
        $validation = Validator::make($request->all(), $rules, $messages);

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
                    return redirect('list-solution')->with(compact('msg', 'status'));
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

    public function show(Request $request)
    {
        try {
            $incidenttype_data = $this->service->getById($request->show_id);
            return view('admin.pages.master.location-address.show-solution', compact('incidenttype_data'));
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateOne(Request $request){
        try {
            $active_id = $request->active_id;
        $result = $this->service->updateOne($active_id);
            return redirect('list-solution')->with('flash_message', 'Updated!');  
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
                    return redirect('list-solution')->with(compact('msg', 'status'));
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
