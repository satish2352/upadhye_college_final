@extends('admin.layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper mt-7">
        <div class="page-header">
            <h3 class="page-role">
                Comitee List
                <a href="{{ route('add-comitee-details') }}" class="btn btn-sm btn-primary ml-3">+
                    Add</a>

            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('list-comitee-details') }}">Comitee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Comitee List</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                @include('admin.layout.alert')
                                @if(count($combinedData))
                                <div class="table-responsive">
                                    <table id="order-listing" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                               
                                                <!-- <th>Service Name</th> -->
                                                <th>Name</th>
                                                <th>Role </th>
                                                <!-- <th>Long Description </th> -->
                                                <th>Image </th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($combinedData as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                
                                                <!-- <td>{{ strip_tags($item->service_name) }}</td> -->
                                                <td>{{ strip_tags($item->name) }}</td>
                                                <td>{{ strip_tags($item->role) }}</td>
                                                <!-- <td>{{ strip_tags($item->long_description) }}</td> -->
                                                <td> <img class="img-size"
                                                        src="{{ Config::get('DocumentConstant.SERVICES_VIEW') }}{{ $item->image }}"
                                                        alt=" {{ strip_tags($item['role']) }} Image" />
                                                </td>
                                                <td>
                                                    <label class="switch">
                                                        <input data-id="{{ $item->id }}" type="checkbox" {{
                                                            $item->is_active ? 'checked' : '' }}
                                                        class="active-btn btn btn-sm btn-outline-primary m-1"
                                                        data-toggle="tooltip" data-placement="top"
                                                        role="{{ $item->is_active ? 'Active' : 'Inactive' }}">
                                                        <span class="slider round"></span>
                                                    </label>

                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('edit-comitee-details', base64_encode($item->id)) }}"
                                                            class="btn btn-sm btn-outline-primary m-1"
                                                            role="Edit Slide"><i class="fas fa-pencil-alt"></i></a>

                                                        <a data-id="{{ $item->id }}"
                                                            class="show-btn btn btn-sm btn-outline-primary m-1"
                                                            role="Show Slide "><i class="fas fa-eye"></i></a>

                                                        <a data-id="{{ $item->id }}"
                                                            class="delete-btn btn btn-sm btn-outline-danger m-1"
                                                            role="Delete Slide"><i class="fas fa-archive"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <div class="alert alert-primary" role="alert">
                                                No Data Found
                                            </div>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <div class="alert alert-primary" role="alert">
                                    No Data Found
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ url('/delete-comitee-details') }}" id="deleteform">
        @csrf
        <input type="hidden" name="delete_id" id="delete_id" value="">
    </form>
    <form method="POST" action="{{ url('/show-comitee-details') }}" id="showform">
        @csrf
        <input type="hidden" name="show_id" id="show_id" value="">
    </form>
    <form method="POST" action="{{ url('/update-active-comitee-details') }}" id="activeform">
        @csrf
        <input type="hidden" name="active_id" id="active_id" value="">
    </form>

    <!-- content-wrapper ends -->
    @endsection