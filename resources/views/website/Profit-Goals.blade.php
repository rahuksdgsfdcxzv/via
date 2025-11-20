@extends('layouts.main_layout')
@section('content')
    <div class="add-detail  mt-4 d-flex align-items-center gap-2">
        <img src="{{ asset('assets/images/ChevronLeftOutline.png') }}" alt="" class="wh-24" id="backBtn">
        <h2 class=" mb-0 font-poppins fw-500 clr-3b3b3b font-28">Profit Goals</h2>
    </div>
    <div class="row  my-4">

      <div class="col-12 mt-3">
          <label for="" class="form-label clr-555 font-15 font-poppins">Good <span><img src="{{ asset('assets/images/error.png') }}" alt="" class="wh-16"></span></label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
       </div>
      <div class="col-12 mt-3">
          <label for="" class="form-label clr-555 font-15 font-poppins">Better <span><img src="{{ asset('assets/images/error.png') }}" alt="" class="wh-16"></span></label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
       </div>
      <div class="col-12 mt-3">
          <label for="" class="form-label clr-555 font-15 font-poppins">Best <span><img src="{{ asset('assets/images/error.png') }}" alt="" class="wh-16"></span></label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
       </div>

    </div>
@endsection