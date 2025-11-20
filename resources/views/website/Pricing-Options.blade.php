@extends('layouts.main_layout')
@section('content')
    <div class="add-detail  mt-4 d-flex align-items-center gap-2">
        <img src="{{ asset('assets/images/ChevronLeftOutline.png') }}" alt="" class="wh-24" id="backBtn">
        <h2 class=" mb-0 font-poppins fw-500 clr-3b3b3b font-28">Pricing Options</h2>
    </div>
    <div class="row  my-4">

      
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">VIP price</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50" >
        </div>
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Early bird</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50" >
        </div>
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Regular</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50" >
        </div>
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Other price 1</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50" >
        </div>
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Other price 2</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50" >
        </div>
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Other price 3</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50" >
        </div>

    </div>
@endsection