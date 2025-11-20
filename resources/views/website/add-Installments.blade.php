@extends('layouts.main_layout')
@section('content')
    <div class="add-detail  mt-4 d-flex align-items-center gap-2">
        <img src="{{ asset('assets/images/ChevronLeftOutline.png') }}" alt="" class="wh-24" id="backBtn">
        <h2 class=" mb-0 font-poppins fw-500 clr-3b3b3b font-28"> Add Installments</h2>
    </div>
    <div class="row  my-4">

        <div class="col-md-12  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Installment name</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">

        </div>
        <div class="col-md-12  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Price</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">

        </div>
        <div class="col-md-12  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Installment date</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">

        </div>
    </div>
       <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn   save-btn  rounded-100">Save</button>
                    </div>
                </div>

@endsection