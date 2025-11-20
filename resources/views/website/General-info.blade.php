@extends('layouts.main_layout')
@section('content')
    <div class="add-detail  mt-4 d-flex align-items-center gap-2">
        <img src="{{ asset('assets/images/ChevronLeftOutline.png') }}" alt="" class="wh-24" id="backBtn">
        <h2 class=" mb-0  fw-500 clr-3b3b3b font-28">General info</h2>
    </div>
    <div class="row my-4">
        <div class="col-md-8  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Retreat name</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
        </div>
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Date</label>
            <input type="date" class="form-control w-100 border-1px-555-30 height-50">
        </div>
        <h4 class=" mb-0  mt-3 font-poppins">Number of Students</h4>
        <p class=" mb-2 font-poppins mt-2 clr-555 font-14">Enter the possible number of students for each
            scenario.</p>
      
        <div class="col-md-3 mt-3">
          <label for="" class="form-label clr-555 font-15 font-poppins">Low <span><img src="{{ asset('assets/images/error.png') }}" alt="" class="wh-16"></span></label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
       </div>
      <div class="col-md-3 mt-3">
          <label for="" class="form-label clr-555 font-15 font-poppins">Minimum <span><img src="{{ asset('assets/images/error.png') }}" alt="" class="wh-16"></span></label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
       </div>
        <div class="col-md-3 mt-3">
          <label for="" class="form-label clr-555 font-15 font-poppins">Medium <span><img src="{{ asset('assets/images/error.png') }}" alt="" class="wh-16"></span></label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
       </div>
        <div class="col-md-3 mt-3">
          <label for="" class="form-label clr-555 font-15 font-poppins">Maximum  <span><img src="{{ asset('assets/images/error.png') }}" alt="" class="wh-16"></span></label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
       </div
      
    </div>


@endsection