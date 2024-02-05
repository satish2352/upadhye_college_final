@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">Achievers
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-gallery') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Achievers </li>
                    </ol>
                </nav>
            </div>
              <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('add-achievers') }}" method="POST" enctype="multipart/form-data" id="regForm">
                                @csrf
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="dropdown">Select an Option </label>&nbsp;<span class="red-text">*</span><br>
                                        <select name="achieversType" id="achieversType" class="form-control">
                                            <option value="">Select Type of Achiever</option>
                                            <option value="all">ALL</option>
                                            <option value="JEE ADVANCED">JEE ADVANCED</option>
                                            <option value="JEE MAINS">JEE MAINS</option>
                                            <option value="MHT-CET-2023">MHT-CET-2023</option>
                                            <option value="NEET-2023-ACHIEVER">NEET-2023-ACHIEVERS</option>
                                        </select>
                                        @if ($errors->has('dropdown'))
                                            <span class="red-text"><?php echo $errors->first('dropdown', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="image">Image </label>&nbsp;<span class="red-text">*</span><br>
                                        <input type="file" name="image" id="image" accept="image/*" value="{{ old('image') }}" class="form-control mb-2">
                                        @if ($errors->has('image'))
                                            <span class="red-text"><?php echo $errors->first('image', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <!-- New Fields -->
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name </label>&nbsp;<span class="red-text">*</span><br>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="red-text"><?php echo $errors->first('name', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="rank">Rank </label>&nbsp;<span class="red-text">*</span><br>
                                        <input type="text" name="rank" id="rank" class="form-control" value="{{ old('rank') }}">
                                        @if ($errors->has('rank'))
                                            <span class="red-text"><?php echo $errors->first('rank', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>
                                <!-- End of New Fields -->

                                <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Save &amp; Submit
                                        </button>
                                        <span><a href="{{ route('list-achievers') }}" class="btn btn-sm btn-primary">Back</a></span>
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
    function checkFormValidity() {
        const image = $('#image').val();
        const name = $('#name').val();
        const dropdown =$('#achieversType').val(); // Update the selector here
        const rank = $('#rank').val();
        }

        $.validator.addMethod("fileExtension", function (value, element, param) {
            const extension = value.split('.').pop().toLowerCase();
            return $.inArray(extension, param) !== -1;
        }, "Invalid file extension.");

        $.validator.addMethod("fileSize", function (value, element, param) {
            const fileSizeKB = element.files[0].size / 1024;
            return fileSizeKB >= param[0] && fileSizeKB <= param[1];
        }, "File size must be between {0} KB and {1} KB.");

        $('#image').attr('accept', 'image/jpeg, image/png');

        $('input, select').on('input change', checkFormValidity);

        $("#regForm").validate({
            rules: {
                image: {
                    required: true,
                    fileExtension: ["jpg", "jpeg", "png"],
                    // Add fileSize validation if needed
                },
                name: {
                    required: true,
                },
                achieversType: {
                    required: true,
                },
                rank: {
                    required: true,
                },
            },
            messages: {
                image: {
                    required: "Please upload an Image (jpg, jpeg, png).",
                    fileExtension: "Only jpg, JPEG, and png images are allowed.",
                    // fileSize: "File size must be between 10 KB and 2 MB.",
                },
                name: {
                    required: "Please enter a Name.",
                },
                achieversType: {
                    required: "Please select an option.",
                },
                rank: {
                    required: "Please enter a Rank.",
                },
            },
        });
    });
</script>
    @endsection