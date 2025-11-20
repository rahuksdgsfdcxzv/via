@extends('layouts.main_layout')
@section('content')
    <h2 class="fw-600 clr-3b3b3b  mt-4 font-poppins">Total Analysis</h2>
    <div class="row  mt-4">
        <div class="col-md-6 ">
            <div class="budget p-3 background-clr-f9f9f9 h-100 rounded-10">
                <div class="d-flex  justify-content-between align-items-center">
                    <p class=" mb-0 font-poppins font-16 fw-600 clr-555 ">Low <span
                            class="clr-555-60 fw-400 font-14">(3students)</span></p>
                    <h5 class=" mb-0 fw-600  font-poppins font-18 red">-$1,649</h5>
                </div>
                <div class="total-budget bg-white rounded-10 mt-3 p-3">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Total Revenue</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">$10,800</p>

                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Revenue Per Student</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">$2,287.75</p>

                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Total cost</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">$9.151</p>

                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Total cost(including admin fees)</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">$9.151</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="budget p-3 background-clr-f9f9f9 rounded-10">
                <div class="d-flex  justify-content-between align-items-center">
                    <p class=" mb-0 font-poppins font-16 fw-600 clr-555 ">Price your retreat </p>
                    <!-- <h5 class=" mb-0 fw-600  font-poppins font-18 red">-$1,649</h5> -->
                </div>
                <div class="total-budget bg-white rounded-10 mt-3 p-3">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Early Bird</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">$2,350</p>

                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Regular</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">$2,700</p>

                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Other price 1</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">--</p>

                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Other price 2</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">--</p>

                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Other price 3</h5>
                        <p class="mb-0 font-15 font-poppins clr-555-80">--</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 p-3 background-clr-f9f9f9  rounded-10">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h5 class=" font-poppins font-18 mb-0">Total Expense per student</h5>
            <img src="{{ asset('assets/images/plusOutline.png') }}" alt="" class="w-24">
        </div>
        <h5 class="yellow font-16 font-poppins mt-4">-$2,287.75</h5>
        <div class=" col-12 d-flex mt-2   w-100  p-4 bg-white  rounded-10">
            <div class="col-md-6 pe-4 border-right-1px-555-10 ">
                <div class="budget">

                    <div class="total-budget bg-white rounded-10 ">
                        <p class=" mb-3 font-poppins font-16 fw-500 clr-555 ">Student Lodging </p>
                        <div class=" d-flex justify-content-between align-items-center">
                            <h5 class=" mb-0 font-15 font-poppins clr-555-80">Per student</h5>
                            <p class="mb-0 font-15 font-poppins clr-555-80">$3,600</p>
                        </div>
                        <div class=" d-flex justify-content-between  mt-3 align-items-center">
                            <h5 class=" mb-0 font-15 font-poppins clr-555-80">Total</h5>
                            <p class="mb-0 font-15 font-poppins clr-555-80">$3,600</p>
                        </div>
                        <p class=" mt-4  mb-3 font-poppins font-16 fw-500 clr-555 ">Transportation (Golf carts) </p>
                        <div class=" d-flex justify-content-between align-items-center">
                            <h5 class=" mb-0 font-15 font-poppins clr-555-80">Per student</h5>
                            <p class="mb-0 font-15 font-poppins clr-555-80">$3,600</p>
                        </div>
                        <div class=" d-flex justify-content-between  mt-3 align-items-center">
                            <h5 class=" mb-0 font-15 font-poppins clr-555-80">Total</h5>
                            <p class="mb-0 font-15 font-poppins clr-555-80">$3,600</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  ps-4">
                <div class="budget">

                    <div class="total-budget bg-white rounded-10 ">
                        <p class=" mb-3 font-poppins font-16 fw-500 clr-555 ">Student meals</p>
                        <div class=" d-flex justify-content-between align-items-center">
                            <h5 class=" mb-0 font-15 font-poppins clr-555-80">Per student</h5>
                            <p class="mb-0 font-15 font-poppins clr-555-80">$3,600</p>
                        </div>
                        <div class=" d-flex justify-content-between  mt-3 align-items-center">
                            <h5 class=" mb-0 font-15 font-poppins clr-555-80">Total</h5>
                            <p class="mb-0 font-15 font-poppins clr-555-80">$3,600</p>
                        </div>
                        <p class=" mt-4  mb-3 font-poppins font-16 fw-500 clr-555 ">Teacher food</p>
                        <div class=" d-flex justify-content-between align-items-center">
                            <h5 class=" mb-0 font-15 font-poppins clr-555-80">Per student</h5>
                            <p class="mb-0 font-15 font-poppins clr-555-80">$3,600</p>
                        </div>
                        <div class=" d-flex justify-content-between  mt-3 align-items-center">
                            <h5 class=" mb-0 font-15 font-poppins clr-555-80">Total</h5>
                            <p class="mb-0 font-15 font-poppins clr-555-80">$3,600</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row  mt-4">
        <div class="col-md-4">
            <div class="break-down background-clr-f9f9f9  rounded-10  p-3 ">
                <div class=" d-flex justify-content-between  mt-1 align-items-center">
                    <h5 class=" font-16 clr-555 font-poppins mb-0">Student Breakdown</h5>
                    <p class=" mb-0 font-14 clr-555 font-poppins"> $57</p>
                </div>
                <div class=" bg-white rounded-10  mt-3 px-3 py-2">
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">VIP</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">4</p>
                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Early Bird</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">3</p>
                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Regular</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">--</p>
                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Other Price 1</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">--</p>
                    </div>
                    <div class=" d-flex justify-content-between  my-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Other Price 2</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">--</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="break-down background-clr-f9f9f9  rounded-10  p-3 ">
                <div class=" d-flex justify-content-between  mt-1 align-items-center">
                    <h5 class=" font-16 clr-555 font-poppins mb-0">Revenue By Pricing Type</h5>
                  
                </div>
                <div class=" bg-white rounded-10  mt-3 px-3 py-2">
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">VIP (+)</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">$2,350</p>
                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Early Bird ($2,350)</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">$2,700</p>
                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Regular</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">--</p>
                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Other Price 1 (+)</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">--</p>
                    </div>
                    <div class=" d-flex justify-content-between  my-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Other Price 2 (+)</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">--</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="break-down background-clr-f9f9f9 h-100  rounded-10  p-3 ">
                <div class=" d-flex justify-content-between  mt-1 align-items-center">
                    <h5 class=" font-16 clr-555 font-poppins mb-0">Profit Goals</h5>
                  
                </div>
                <div class=" bg-white rounded-10  mt-3 px-3 py-2">
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Better</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">$2,350</p>
                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Best</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">$2,700</p>
                    </div>
                    <div class=" d-flex justify-content-between  mt-3 align-items-center">
                        <h5 class=" mb-0 font-15 font-poppins clr-555-80">Good</h5>
                        <p class="mb-0 font-14 font-poppins clr-555-80">--</p>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>


@endsection