@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-name">
                    Comitee Details
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-comitee-details') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Update Comitee</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('update-comitee-details') }}" method="post"
                                id="regForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    {{--<div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="Service">Service:</label> &nbsp<span class="red-text">*</span>
                                            <select class="form-control mb-2" name="service_id" id="service_id">
                                                <option value="" default>Select Comitee</option>
                                                @foreach ($data as $service)
                                                    <option value="{{ $service->id }}"
                                                        @if ($editData->service_id == $service->id) {{ 'selected' }} @endif>
                                                        {{ $service->service_name }}

                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('name'))
                                                <span class="red-text">
                                                    <?php echo $errors->first('name', ':message'); ?>
                                                </span>
                                            @endif
                                        </div>
                                    </div>--}}
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name </label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control" name="name" id="name"
                                                placeholder="Enter the name"
                                                value="@if (old('name')) {{ old('name') }}@else{{ $editData->name }} @endif">
                                            <label class="error py-2" for="name" id="title_error"></label>
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php echo $errors->first('name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" class="form-control mb-2"
                                                id="english_image" accept="image/*" placeholder="image">
                                            @if ($errors->has('image'))
                                                <span class="red-text"><?php echo $errors->first('image', ':message'); ?></span>
                                            @endif
                                        </div>
                                        <img id="english"
                                            src="{{ Config::get('DocumentConstant.SERVICES_VIEW') }}{{ $editData->image }}"
                                            class="img-fluid img-thumbnail" width="150">
                                        <img id="english_imgPreview" src="#"
                                            alt=" {{ strip_tags($editData['name']) }} Image"
                                            class="img-fluid img-thumbnail" width="150" style="display:none">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="summernote_id">
                                            <label for="role">Role Of The User</label>&nbsp<span
                                                class="red-text">*</span>
                                            <span class="summernote1">
                                             <textarea class="form-control" name="role" id="role" placeholder="Enter the role" rows="5">@if (old('role')){{ old('role') }}@else{{ $editData->role }}@endif</textarea>



                                            </span>
                                            @if ($errors->has('role'))
                                                <span class="red-text"><?php echo $errors->first('role', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>


                                    <!-- {{--<div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="summernote_id">
                                            <label for="long_description">Long Description</label>&nbsp<span
                                                class="red-text">*</span>
                                            <span class="summernote1">
                                              <textarea class="form-control" name="long_description" id="long_description" placeholder="Enter the Long Description"
                                                style="min-height: 100px; resize: none;">{{ old('long_description') ?? $editData->long_description }}</textarea>
                                            </span>
                                            @if ($errors->has('long_description'))
                                                <span class="red-text"><?php echo $errors->first('long_description', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>--}} -->
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Save &amp; Update
                                        </button>
                                        {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-comitee-details') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" class="form-control"
                                    value="{{ $editData->id }}" placeholder="">
                                {{-- <input type="text" name="currentMarathiImage" id="currentMarathiImage"
                                    class="form-control" value="" placeholder=""> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
