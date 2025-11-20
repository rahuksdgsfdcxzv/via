@extends('layouts.main_layout')
@section('content')
    <div class="add-detail  mt-4 d-flex align-items-center gap-2">
        <img src="{{ asset('assets/images/ChevronLeftOutline.png') }}" alt="" class="wh-24" id="backBtn">
        <h2 class=" mb-0 font-poppins fw-500 clr-3b3b3b font-28">Add Expenses</h2>
    </div>
    <div class="row  my-4">

        <div class="col-12  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Description</label>
            <input type="text-area" class="form-control w-100 border-1px-555-30 " style="height: 100px;">
        </div>
        <div class="col-md-6 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Type</label>
                        <select class="form-select form-control w-100 border-1px-555-30 height-50" aria-label="Default select example">

                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
        <div class="col-md-6  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Cost</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50" >
        </div>

    </div>
@endsection