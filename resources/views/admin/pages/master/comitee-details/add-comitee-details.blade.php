@extends('admin.layout.master')

@section('content')

<head>
    <style>
        /* Custom CSS for the button */
        .btn-secondary {
            background-color: grey;
            /* Set button background color */
            border-color: #007bff;
            /* Set button border color */
        }

        /* Custom CSS for the dropdown menu */
        .dropdown-menu {
            background-color: #343a40;
            /* Set dropdown menu background color */
        }

        .dropdown-item {
            color: #ffffff;
            /* Set dropdown item text color */
        }
    </style>
</head>
<div class="main-panel">
    <div class="content-wrapper mt-6">
        <div class="page-header">
            <h3 class="page-name">Our Comitee
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('list-comitee-details') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Our Services </li>
                </ol>
            </nav>
        </div>
        <form class="forms-sample" action="{{ route('add-comitee-details') }}" method="POST" enctype="multipart/form-data"
            id="regForm">
            @csrf
            <div class="row">
                <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="Service">Service:</label> &nbsp<span class="red-text">*</span>
                        <select  class="form-control mb-2" name="service_id" id="service_id">
                        <option value="" default>Select Service</option>
                            @foreach($data as $service)
                            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('name'))
                        <span class="red-text">
                            <?php echo $errors->first('name', ':message'); ?>
                        </span>
                        @endif
                    </div>
                </div> -->

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="name">Name</label>&nbsp<span class="red-text">*</span>
                        <input class="form-control mb-2" name="name" id="name" placeholder="Enter the name"
                            name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                        <span class="red-text">
                            <?php echo $errors->first('name', ':message'); ?>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="image">Image </label>&nbsp<span class="red-text">*</span><br>
                        <input type="file" name="image" id="image" accept="image/*" value="{{ old('image') }}"
                            class="form-control mb-2">
                        @if ($errors->has('image'))
                        <span class="red-text">
                            <?php echo $errors->first('image', ':message'); ?>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group" id="summernote_id">
                        <label for="description">Role<span class="red-text">*</span></label>
                        <textarea class="form-control" name="role" id="role"
                            placeholder="Enter the user Role">{{ old('role') }}</textarea>
                        @if ($errors->has('role'))
                        <span class="red-text">{{ $errors->first('role') }}</span>
                        @endif
                    </div>
                </div>

               {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group" id="summernote_id">
                        <label for="description">Long Description <span class="red-text">*</span></label>
                        <textarea class="form-control" name="long_description" id="long_description"
                            placeholder="Enter Long Content">{{ old('long_description') }}</textarea>
                        @if ($errors->has('long_description'))
                        <span class="red-text">{{ $errors->first('long_description') }}</span>
                        @endif
                    </div>
                </div>--}}
                <div class="col-md-12 col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                        Save &amp; Submit
                    </button>
                    {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                    <span><a href="{{ route('list-comitee-details') }}" class="btn btn-sm btn-primary ">Back</a></span>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function () {
        // Function to check if all input fields are filled with valid data
        function checkFormValidity() {
            const name = $('#name').val();
            const description = $('#description textarea').val();
            const image = $('#image').val();
        }

        // Custom validation method to check file extension
        $.validator.addMethod("fileExtension", function (value, element, param) {
            // Get the file extension
            const extension = value.split('.').pop().toLowerCase();
            return $.inArray(extension, param) !== -1;
        }, "Invalid file extension.");

        // Custom validation method to check file size
        $.validator.addMethod("fileSize", function (value, element, param) {
            // Convert bytes to KB
            const fileSizeKB = element.files[0].size / 1024;
            return fileSizeKB >= param[0] && fileSizeKB <= param[1];
        }, "File size must be between {0} KB and {1} KB.");

        // Update the accept attribute to validate based on file extension
        $('#image').attr('accept', 'image/jpeg, image/png');

        // Call the checkFormValidity function on input change
        $('input, textarea, #image').on('input change', checkFormValidity);
        $.validator.addMethod("spcenotallow", function (value, element) {
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
                name: {
                    required: true,
                    spcenotallow: true,
                },
                role: {
                    required: true,
                },
                long_description: {
                    required: true,
                },
                image: {
                    required: true,
                    fileExtension: ["jpg", "jpeg", "png"],
                    fileSize: [5, 501], // Min 10KB and Max 2MB (2 * 1024 KB)
                    imageDimensions: [50, 50, 800, 800], // Min width x height and Max width x height
                },
            },
            messages: {
                name: {
                    required: "Please enter the name.",
                    spcenotallow: "Enter Some name",
                },
                role: {
                    required: "Please Enter the Description",
                },
                long_description: {
                    required: "Please Enter the Description",
                },
                image: {
                    required: "Please upload an Image (jpg, jpeg, png).",
                    fileExtension: "Only JPG, JPEG, and PNG images are allowed.",
                    fileSize: "File size must be between 10 KB and 500 KB.",
                    imageDimensions: "Image dimensions must be between 100x100 and 800x800 pixels.",
                },
            },
        });
    });
</script>
<script>
    // Add an event listener to each dropdown item
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function () {
            // Set the selected Service's ID to the hidden input field
            document.getElementById('selectedServiceId').value = this.getAttribute('data-value');

            // Update the dropdown button text with the selected Service's name
            document.getElementById('dropdownMenuButton').innerText = this.innerText;
        });
    });
</script>

@endsection