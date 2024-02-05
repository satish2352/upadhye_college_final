@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                    Scholarship List
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="{{ route('list-contactus-form') }}">Registration From Website</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page"> Scholarship</li>
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
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Email</th>
                                                    <th>Full Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Address</th>
                                                    <th>Course Name</th>
                                                    <th>Admission Mode</th>
                                                    <th>SMS/CALL Service</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($get_contactus as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ strip_tags($item->email) }}</td>
                                                        <td>{{ strip_tags($item->fullname) }}</td>
                                                        <td>{{ strip_tags($item->mobile_number) }}</td>
                                                        <td>{{ strip_tags($item->address) }}</td>
                                                        <td>{{ strip_tags($item->service_name) }}</td>
                                                        <td>{{ strip_tags(ucwords($item->admission_mode)) }}</td>
                                                        <td>{{ strip_tags($item->agree_to_receive_sms_call == 1 ? 'Yes' : 'No' )}}</td>                                                       
                                                        <td><a data-id="{{ $item->id }}"
                                                            class="delete-btn btn btn-sm btn-outline-danger m-1"
                                                            role="Delete Slide"><i class="fas fa-archive"></i></a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ url('/show-contactus-form') }}" id="showform">
            @csrf
            <input type="hidden" name="show_id" id="show_id" value="">
        </form>
        <form method="POST" action="{{ url('/delete-registration') }}" id="deleteform">
            @csrf
            <input type="hidden" name="delete_id" id="delete_id" value="">
        </form>
        <!-- content-wrapper ends -->
    @endsection
