@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Website Contact Details
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"> Update Website Contact Details</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @include('admin.layout.alert')
                            <form class="forms-sample" action="{{ route('update-website-contact') }}" method="post"
                                id="regForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact_one"> Enter Contact No 1<span class="text-danger">*</span></label>
                                            <input class="form-control mb-2" name="contact_one" id="contact_one"
                                                placeholder=" Enter Contact No 1"
                                                value="@if (old('contact_one')) {{ old('contact_one') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['contact_one'])){{ $website_contact_details[0]['contact_one'] }} @endif">
                                            @if ($errors->has('contact_one'))
                                                <span class="text-danger">{{ $errors->first('contact_one') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact_two"> Enter Contact No 2<span class="text-danger">*</span></label>
                                            <input class="form-control mb-2" name="contact_two" id="contact_two"
                                                placeholder=" Enter Contact No 2"
                                                value="@if (old('contact_two')) {{ old('contact_two') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['contact_two'])){{ $website_contact_details[0]['contact_two'] }} @endif">
                                            @if ($errors->has('contact_two'))
                                                <span class="text-danger">{{ $errors->first('contact_two') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="mail_id">Enter Contact No 3 <span class="text-danger">*</span></label>
                                            <input class="form-control mb-2" name="contact_three" id="contact_three"
                                                placeholder=" Enter Contact No 3"
                                                value="@if (old('contact_three')) {{ old('contact_three') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['contact_three'])){{ $website_contact_details[0]['contact_three'] }} @endif">
                                            @if ($errors->has('contact_three'))
                                                <span class="text-danger">{{ $errors->first('contact_three') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="facebook_link">Enter Mail Id<span class="text-danger">*</span></label>
                                            <input class="form-control mb-2" name="mail_id" id="facebook_link"
                                                placeholder="Enter Facebook Link"
                                                value="@if (old('mail_id')) {{ old('mail_id') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['mail_id'])){{ $website_contact_details[0]['mail_id'] }} @endif">
                                            @if ($errors->has('facebook_link'))
                                                <span class="text-danger">{{ $errors->first('facebook_link') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="instagram_link">Instagram Link<span class="text-danger">*</span></label>
                                            <input class="form-control mb-2" name="instagram_link" id="instagram_link"
                                                placeholder=" Instagram Link"
                                                value="@if (old('instagram_link')) {{ old('instagram_link') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['instagram_link'])){{ $website_contact_details[0]['instagram_link'] }} @endif">
                                            @if ($errors->has('instagram_link'))
                                                <span class="text-danger">{{ $errors->first('instagram_link') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="facebook_link">Facebook Link<span class="text-danger">*</span></label>
                                            <input class="form-control mb-2" name="facebook_link" id="facebook_link"
                                                placeholder="Enter Facebook Link"
                                                value="@if (old('facebook_link')) {{ old('facebook_link') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['facebook_link'])){{ $website_contact_details[0]['facebook_link'] }} @endif">
                                            @if ($errors->has('facebook_link'))
                                                <span class="text-danger">{{ $errors->first('facebook_link') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="instagram_link">Twitter Link<span class="text-danger">*</span></label>
                                            <input class="form-control mb-2" name="twitter_link" id="twitter_link"
                                                placeholder=" Twitter Link"
                                                value="@if (old('twitter_link')) {{ old('twitter_link') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['twitter_link'])){{ $website_contact_details[0]['twitter_link'] }} @endif">
                                            @if ($errors->has('instagram_link'))
                                                <span class="text-danger">{{ $errors->first('instagram_link') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="youtube_link">Youtube Link<span class="text-danger">*</span></label>
                                            <input class="form-control mb-2" name="youtube_link" id="youtube_link"
                                                placeholder=" Youtube Link"
                                                value="@if (old('youtube_link')) {{ old('youtube_link') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['youtube_link'])){{ $website_contact_details[0]['youtube_link'] }} @endif">
                                            @if ($errors->has('youtube_link'))
                                                <span class="text-danger">{{ $errors->first('youtube_link') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="long_description">Enter address<span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="address" id="address" placeholder="Enter address">@if (old('address')){{ old('address') }}@elseif (!empty($website_contact_details) && isset($website_contact_details[0]['address'])){{ $website_contact_details[0]['address'] }} @endif</textarea>
                                            @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">Save &amp; Update</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</div>-->
@endsection
