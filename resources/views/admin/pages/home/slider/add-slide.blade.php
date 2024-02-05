@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">Slide
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-slide') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Slide </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('add-slide') }}" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="rank_no">Rank Number</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="rank_no" id="rank_no"
                                                placeholder="Enter the Rank Number" name="rank_no"
                                                value="{{ old('rank_no') }}">
                                            @if ($errors->has('rank_no'))
                                                <span class="red-text"><?php echo $errors->first('rank_no', ':message'); ?></span>
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

                                  

                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton"
                                            {{-- disabled --}}>
                                            Save &amp; Submit
                                        </button>
                                        {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-slide') }}"
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
                    const rank_no = $('#rank_no').val();
                    const image = $('#image').val();                   
                }
                $('input').on('input change', checkFormValidity);
                $.validator.addMethod("spcenotallow", function(value, element) {
                    if ("select" === element.nodeName.toLowerCase()) {
                        var e = $(element).val();
                        return e && e.length > 0;
                    }
                    return this.checkable(element) ? this.getLength(value, element) > 0 : value.trim().length >
                        0;
                }, "Enter Some Text");
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

                // Initialize the form validation
                $("#regForm").validate({
                    rules: {
                        rank_no: {
                            required: true,
                            spcenotallow: true,
                        },
                        title: {
                            required: true,
                            spcenotallow: true,
                        },
                        long_description: {
                            required: true,
                            spcenotallow: true,
                        },
                        image: {
                            required: true,
                            // fileExtension: ["jpg", "jpeg", "png"],
                            // fileSize: [1800, 20480], // Min 10KB and Max 2MB (2 * 1024 KB)
                        },
                    },
                    messages: {
                        rank_no: {
                            required: "Please enter the Rank Number.",
                            spcenotallow: "Enter Some Number",
                        },
                        title: {
                            required: "Please enter title.",
                            spcenotallow: "Enter Some Number",
                        },
                        long_description: {
                            required: "Please enter description.",
                            spcenotallow: "Enter Some Number",
                        },
                        image: {
                            required: "Please upload an Image (JPG, JPEG, PNG).",
                            // fileExtension: "Only JPG, JPEG, and PNG images are allowed.",
                            // fileSize: "File size must be between 10 KB and 2 MB.",
                        },
                    },
                });
            });
        </script>
    @endsection
