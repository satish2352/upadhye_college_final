@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">Addtional Solutions
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-website-contact') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Addtional Solutions </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('add-website-contact') }}" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                @csrf
                                <div class="row">

                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="description"> Enter Facebook Link<span class="red-text">*</span></label>
                                            <textarea class="form-control" name="address" id="address" placeholder="Enter Short Content">{{ old('address') }}</textarea>
                                            @if ($errors->has('address'))
                                                <span class="red-text">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    
                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="description"> Enter Contact No 1<span class="red-text">*</span></label>
                                            <textarea class="form-control" name="contact_one" id="contact_one" placeholder="Enter Short Content">{{ old('contact_one') }}</textarea>
                                            @if ($errors->has('contact_one'))
                                                <span class="red-text">{{ $errors->first('contact_one') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                     <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="description"> Enter Contact No 2<span class="red-text">*</span></label>
                                            <textarea class="form-control" name="contact_two" id="contact_two" placeholder="Enter Short Content">{{ old('contact_two') }}</textarea>
                                            @if ($errors->has('contact_two'))
                                                <span class="red-text">{{ $errors->first('contact_two') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                   
                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="description"> Enter Facebook Link<span class="red-text">*</span></label>
                                            <textarea class="form-control" name="mail_id" id="mail_id" placeholder="Enter Short Content">{{ old('mail_id') }}</textarea>
                                            @if ($errors->has('mail_id'))
                                                <span class="red-text">{{ $errors->first('mail_id') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="description"> Enter Facebook Link<span class="red-text">*</span></label>
                                            <textarea class="form-control" name="facebook_link" id="facebook_link" placeholder="Enter Short Content">{{ old('facebook_link') }}</textarea>
                                            @if ($errors->has('facebook_link'))
                                                <span class="red-text">{{ $errors->first('facebook_link') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="description">Instagram Link<span class="red-text">*</span></label>
                                            <textarea class="form-control" name="instagram_link" id="instagram_link" placeholder="Enter Long Content">{{ old('instagram_link') }}</textarea>
                                            @if ($errors->has('instagram_link'))
                                                <span class="red-text">{{ $errors->first('instagram_link') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton"  >
                                            Save &amp; Submit
                                        </button>
                                        {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-website-contact') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {
                    const title = $('#title').val();
                    const description = $('#description textarea').val();
                    const image = $('#image').val();                    
                }
                
                // Custom validation method to check file extension
                $.validator.addMethod("fileExtension", function(value, element, param) {
                    // Get the file extension
                    const extension = value.split('.').pop().toLowerCase();
                    return $.inArray(extension, param) !== -1;
                }, "Invalid file extension.");

                // Custom validation method to check file size
                $.validator.addMethod("fileSize", function(value, element, param) {
                    // Convert bytes to KB
                    const fileSizeKB = element.files[0].size / 1024;
                    return fileSizeKB >= param[0] && fileSizeKB <= param[1];
                }, "File size must be between {0} KB and {1} KB.");

                // Update the accept attribute to validate based on file extension
                $('#image').attr('accept', 'image/jpeg, image/png');

                // Call the checkFormValidity function on input change
                $('input, textarea, #image').on('input change', checkFormValidity);
                $.validator.addMethod("spcenotallow", function(value, element) {
                    if ("select" === element.nodeName.toLowerCase()) {
                        var e = $(element).val();
                        return e && e.length > 0;
                    }
                    return this.checkable(element) ? this.getLength(value, element) > 0 : value.trim().length >
                        0;
                }, "Enter Some Text");

                // Initialize the form validation
                $("#regForm").validate({
                    rules: {
                        mail_id: {
                            required: true,
                            spcenotallow: true,
                        },
                        facebook_link: {
                            required: true,
                        },
                        instagram_link: {
                            required: true,
                        },
                      
                    },
                    messages: {
                        mail_id: {
                            required: "Please enter the mail id.",
                            spcenotallow: "Enter Some Title",
                        },
                        facebook_link: {
                            required: "Please Enter the Description",
                        },
                        instagram_link: {
                            required: "Please Enter the Description",
                        },
                       
                    },
                });
            });
        </script>
    @endsection
