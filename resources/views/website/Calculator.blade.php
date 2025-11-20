@extends('layouts.main_layout')
@section('content')
    <h2 class="fw-600 clr-3b3b3b  mt-4 font-poppins">Calculator</h2>
    <div class="row  mt-4">
        <div class="col-md-3 col-6 mt-4">
            <a href="./Total-Analysis">
                <div class="calculater-score d-flex  justify-content-between  py-3 px-3 rounded-10 border-1px-555-30">
                    <div class="d-flex flex-column justify-content-between student-text">
                        <p class=" mb-0 font-poppins font-14 clr-3b3b3b ">Low <span
                                class="clr-555-60 font-12">(3students)</span></p>
                        <h5 class=" mb-0 fw-600  font-poppins font-18 red">-$1,649</h5>
                    </div>
                    <div class="align-items-center d-flex justify-content-center student-img">
                        <img src="{{ asset('assets/images/low.png') }}" alt="" class="w-24">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-6 mt-4">
             <a href="./Total-Analysis">
            <div class="calculater-score d-flex  justify-content-between  py-3 px-3 rounded-10 border-1px-555-30">
                <div class="d-flex flex-column justify-content-between student-text">
                    <p class=" mb-0 font-poppins font-14 clr-3b3b3b ">Minimum </p>
                    <h5 class=" mb-0 fw-600  font-poppins font-18 yellow">$4,013</h5>
                </div>
                <div class="align-items-center d-flex justify-content-center student-img">
                    <img src="{{ asset('assets/images/Minimum.png') }}" alt="" class="w-24">
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3 col-6 mt-4">
             <a href="./Total-Analysis">
            <div class="calculater-score d-flex  justify-content-between  py-3 px-3 rounded-10 border-1px-555-30">
                <div class="d-flex flex-column justify-content-between student-text">
                    <p class=" mb-0 font-poppins font-14 clr-3b3b3b ">Medium </p>
                    <h5 class=" mb-0 fw-600  font-poppins font-18 green">$6,377</h5>
                </div>
                <div class="align-items-center d-flex justify-content-center student-img">
                    <img src="{{ asset('assets/images/Medium.png') }}" alt="" class="w-24">
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3 col-6 mt-4">
             <a href="./Total-Analysis">
            <div class="calculater-score d-flex  justify-content-between  py-3 px-3 rounded-10 border-1px-555-30">
                <div class="d-flex flex-column justify-content-between student-text">
                    <p class=" mb-0 font-poppins font-14 clr-3b3b3b ">Maximum </p>
                    <h5 class=" mb-0 fw-600  font-poppins font-18 green">$8,741</h5>
                </div>
                <div class="align-items-center d-flex justify-content-center student-img">
                    <img src="{{ asset('assets/images/Maximum.png') }}" alt="" class="w-24">
                </div>
            </div>
            </a>
        </div>
    </div>
    <h2 class="fw-600 clr-3b3b3b  mt-5 mb-4 font-poppins">Calculate your Budget </h2>
    <div class="row px-3">
        <a href="./General-info" class="px-0">
            <div class="col-12 d-flex justify-content-between align-items-center  px-3 py-2 rounded-10 border-1px-555-30">
                <p class=" mb-0 font-poppins font-15 clr-555">General Info</p>
                <div class="right-arrow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/right.png') }}" alt="" class="wh-18">
                </div>

            </div>
        </a>
        <a href="./Expenses" class="px-0">
            <div
                class="col-12 d-flex justify-content-between align-items-center mt-3  px-3 py-2 rounded-10 border-1px-555-30">
                <p class=" mb-0 font-poppins font-15 clr-555">Expense detail</p>
                <div class="right-arrow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/right.png') }}" alt="" class="wh-18">
                </div>
            </div>
        </a>
        <a href="./Profit-Goals" class="px-0">
            <div
                class="col-12 d-flex justify-content-between align-items-center mt-3  px-3 py-2 rounded-10 border-1px-555-30">
                <p class=" mb-0 font-poppins font-15 clr-555">Profit goals</p>
                <div class="right-arrow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/right.png') }}" alt="" class="wh-18">
                </div>
            </div>
        </a>
        <a href="./Pricing-Options" class="px-0">
            <div
                class="col-12 d-flex justify-content-between align-items-center mt-3  px-3 py-2 rounded-10 border-1px-555-30">
                <p class=" mb-0 font-poppins font-15 clr-555">Pricing options</p>
                <div class="right-arrow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/right.png') }}" alt="" class="wh-18">
                </div>
            </div>
        </a>
        <a href="./Student-Breakdown" class="px-0">
            <div
                class="col-12 d-flex justify-content-between align-items-center mt-3 px-3 py-2 rounded-10 border-1px-555-30">
                <p class=" mb-0 font-poppins font-15 clr-555">Student breakdown</p>
                <div class="right-arrow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/right.png') }}" alt="" class="wh-18">
                </div>
            </div>
        </a>
    </div>
@endsection