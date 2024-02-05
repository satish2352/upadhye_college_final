@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">Course Details
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-course-details') }}">Courses</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Course Details </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('add-course-details') }}" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                @csrf
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="Solution">Courses:</label> &nbsp<span class="red-text">*</span>
                                            <select  class="form-control mb-2" name="course_id" id="course_id">
                                            <option value="" default>Select Courses</option>
                                                @foreach($data as $courses)
                                                <option value="{{ $courses->id }}">{{ $courses->service_name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('title'))
                                            <span class="red-text">
                                                <?php echo $errors->first('title', ':message'); ?>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="title" id="title"
                                                placeholder="Enter the Title" name="title"
                                                value="{{ old('title') }}">
                                            @if ($errors->has('title'))
                                                <span class="red-text"><?php echo $errors->first('title', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="image">Image </label>&nbsp<span class="red-text">*</span><br>
                                            <input type="file" name="image" id="image" accept="image/*"
                                                value="{{ old('image') }}" class="form-control mb-2">
                                            @if ($errors->has('image'))
                                                <span class="red-text"><?php echo $errors->first('image', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="summernote_id">
                                            <label for="description">Short Description <span class="red-text">*</span></label>
                                            <textarea class="form-control" name="short_description" id="short_description" placeholder="Enter Short Content">{{ old('short_description') }}</textarea>
                                            @if ($errors->has('short_description'))
                                                <span class="red-text">{{ $errors->first('short_description') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="summernote_id">
                                            <label for="description">Long Description <span class="red-text">*</span></label>
                                            <textarea class="form-control" name="long_description" id="long_description" placeholder="Enter Long Content">{{ old('long_description') }}</textarea>
                                            @if ($errors->has('long_description'))
                                                <span class="red-text">{{ $errors->first('long_description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton"  >
                                            Save &amp; Submit
                                        </button>
                                        {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-course-details') }}"
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
               // Custom validation method to check file size
                $.validator.addMethod("fileSize", function(value, element, param) {
                    // Convert bytes to KB
                    const fileSizeKB = element.files[0].size / 1024;
                    return fileSizeKB >= param[0] && fileSizeKB <= param[1];
                }, "File size must be between 5 KB and 2048 KB.");



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
                        title: {
                            required: true,
                            spcenotallow: true,
                        },
                        short_description: {
                            required: true,
                        },
                        long_description: {
                            required: true,
                        },
                                image: {
                        required: true,
                        fileExtension: ["jpg", "jpeg", "png"],
                        fileSize: [5, 2048], // Min 5 KB and Max 2048 KB
                        imageDimensions: [500, 500, 800, 800, 8000], // Min width x height and Max width x height
                    },
                    },
                    messages: {
                        title: {
                            required: "Please enter the Title.",
                            spcenotallow: "Enter Some Title",
                        },
                        short_description: {
                            required: "Please Enter the Description",
                        },
                        long_description: {
                            required: "Please Enter the Description",
                        },
                        image: {
                            required: "Please upload an Image (jpg, jpeg, png).",
                            fileExtension: "Only JPG, JPEG, and PNG images are allowed.",
                            fileSize: "File size must be between 5 KB and 2048 KB.",
                            imageDimensions: "Image dimensions must be between 100x100 and 800x800 pixels.",
                        },
                    },
                });
            });
        </script>
    @endsection
