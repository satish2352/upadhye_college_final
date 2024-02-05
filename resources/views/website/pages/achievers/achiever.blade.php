@extends('website.layout.master')
 @section('content')     
<style>
.imgAdjust{
    width: 85%;
    height: auto;
    margin-left: 16px;
    padding-top: 10px;
}
</style>
<section>
    {{-- start --}}
    <div class="edu-intructor-area edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Skilled Students</span>
                        <h3 class="title">Introduce Our Achievers</h3>
                    </div>
                </div>
            </div>
{{-- JEE ADVANCED --}}
            <div class="row g-5 mt--20">
                <center><h6 class="title" style="background-color:rgb(34, 34, 91) ; color:white">JEE ADVANCED</h6></center>

@foreach($jeeAdvancedData as $data)

<div class="card mb-3 border-top border-3" style="max-width: 250px;">
    <div class="row g-0">
        <div class="col-md-3" style="margin-top: 10px">
            <div class="card-body d-flex flex-column align-items-center" style="border-top-left-radius: 40px; background-color: #00558E; height: 120px; width: 70px; border-bottom-right-radius: 40px; padding-top: 20px;">
                <h6 class="card-title mb-auto text-white">AIR {{$data->rank}}*</h6>
            </div>
        </div>
        <div class="col-md-9 d-flex flex-column align-items-center justify-content-center">
            <div class="imgAdjust" style="max-height: 180px; overflow: hidden;">
                <img src="{{ Config::get('DocumentConstant.CAMPUS_GALLERY_VIEW')}}{{$data->image}}" style="width: 100%; height: auto; width: 85%; height: auto;" class="img-fluid rounded-start" alt="...">
            </div>
            </div>
            <div class="bottom text-white border-top border-3" style="background-color: #00558E; border-top-left-radius: 10px; border-top-right-radius: 10px;">{{$data->name}}</div>
        </div>
    </div>

@endforeach

             {{-- start JEE MAINS --}}
            <div class="row g-5 mt--20">
                <center><h6 class="title" style="background-color:rgb(34, 34, 91) ; color:white">JEE MAINS</h6></center>



@foreach($jeeMainsData as $data)

<div class="card mb-3 border-top border-3" style="max-width: 250px;">
    <div class="row g-0">
        <div class="col-md-3" style="margin-top: 10px">
            <div class="card-body d-flex flex-column align-items-center" style="border-top-left-radius: 40px; background-color: #00558E; height: 150px; width: 70px; border-bottom-right-radius: 40px; padding-top: 20px;">
                <h6 class="card-title mb-auto text-white">AIR {{$data->rank}}*</h6>
            </div>
        </div>
        <div class="col-md-9 d-flex flex-column align-items-center justify-content-center">
            <div class="imgAdjust" style="max-height: 180px; overflow: hidden;">
                <img src="{{ Config::get('DocumentConstant.CAMPUS_GALLERY_VIEW')}}{{$data->image}}" style="width: 100%; height: auto;" class="img-fluid rounded-start" alt="...">
            </div>
            </div>
            <div class="bottom text-white border-top border-3" style="background-color: #00558E; border-top-left-radius: 10px; border-top-right-radius: 10px;">{{$data->name}}</div>
        </div>
    </div>

@endforeach
             
            {{-- start MHT-CET-2023 --}}
            <div class="row g-5 mt--20">
                <center><h6 class="title" style="background-color:rgb(34, 34, 91) ; color:white">MHT-CET-2023</h6></center>


@foreach($mhtCetData as $data)

<div class="card mb-3 border-top border-3" style="max-width: 250px;">
    <div class="row g-0">
        <div class="col-md-3" style="margin-top: 10px">
            <div class="card-body d-flex flex-column align-items-center" style="border-top-left-radius: 40px; background-color: #00558E; height: 150px; width: 70px; border-bottom-right-radius: 40px; padding-top: 20px;">
                <h6 class="card-title mb-auto text-white">AIR {{$data->rank}}*</h6>
            </div>
        </div>
        <div class="col-md-9 d-flex flex-column align-items-center justify-content-center">
            <div class="imgAdjust" style="max-height: 180px; overflow: hidden;">
                <img src="{{ Config::get('DocumentConstant.CAMPUS_GALLERY_VIEW')}}{{$data->image}}" style="width: 100%; height: auto;" class="img-fluid rounded-start" alt="...">
            </div>
            </div>
            <div class="bottom text-white border-top border-3" style="background-color: #00558E; border-top-left-radius: 10px; border-top-right-radius: 10px;">{{$data->name}}</div>
        </div>
    </div>

@endforeach
            {{-- start --}}
            <div class="row g-5 mt--20">

                <center><h6 class="title" style="background-color:rgb(34, 34, 91) ; color:white">NEET-2023-ACHIEVERS</h6></center>

@foreach($neetData as $data)

<div class="card mb-3 border-top border-3" style="max-width: 250px;">
    <div class="row g-0">
        <div class="col-md-3" style="margin-top: 10px">
            <div class="card-body d-flex flex-column align-items-center" style="border-top-left-radius: 40px; background-color: #00558E; height: 150px; width: 70px; border-bottom-right-radius: 40px; padding-top: 20px;">
                <h6 class="card-title mb-auto text-white">AIR {{$data->rank}}*</h6>
            </div>
        </div>
        <div class="col-md-9 d-flex flex-column align-items-center justify-content-center">
            <div class="imgAdjust" style="max-height: 180px; overflow: hidden;">
                <img src="{{ Config::get('DocumentConstant.CAMPUS_GALLERY_VIEW')}}{{$data->image}}" style="width: 100%; height: auto;" class="img-fluid rounded-start" alt="...">
            </div>
            </div>
            <div class="bottom text-white border-top border-3" style="background-color: #00558E; border-top-left-radius: 10px; border-top-right-radius: 10px;">{{$data->name}}</div>
        </div>
    </div>

@endforeach

            </div>
        </div>
    </div>
{{-- end --}}
</section>
@endsection