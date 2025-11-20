@extends('layouts.main_layout')
@section('content')

    <h2 class=" clr-3b3b3b font-poppins  my-4">Pricing & Registration</h2>
    <div class="row  my-4">
        <div class="col-md-6  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Trip amount</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
        </div>
        <div class="col-md-6  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Deposit amount</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
        </div>
        <div class="col-md-4 mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Registration closing date</label>
            <input type="date" class="form-control w-100 border-1px-555-30 height-50">
        </div>
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Add promo</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
        </div>
        <div class="col-md-4  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Discount percentage</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
        </div>
        <div class="col-md-6 mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Interest-Free payment plans</label>
            <select class="form-select form-control w-100 border-1px-555-30 height-50" aria-label="Default select example">

                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Payment type</label>
            <select class="form-select form-control w-100 border-1px-555-30 height-50" aria-label="Default select example">

                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
   <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn   save-btn  rounded-100">Submit</button>
                    </div>
                </div>

@endsection