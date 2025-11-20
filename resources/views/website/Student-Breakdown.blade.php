@extends('layouts.main_layout')
@section('content')
    <div class="add-detail  mt-4 d-flex align-items-center gap-2">
        <img src="{{ asset('assets/images/ChevronLeftOutline.png') }}" alt="" class="wh-24" id="backBtn">
        <h2 class=" mb-0 font-poppins fw-500 clr-3b3b3b font-28">Student Breakdown</h2>
    </div>
    <!-- <div class=" mt-4 p-3 background-clr-f9f9f9  rounded-10">
            <div class="col-12  mb-3 d-flex justify-content-between align-items-center">
                <h5 class=" font-poppins font-18 mb-0">VIP Price</h5>
                <img src="http://127.0.0.1:8000/assets/images/plusOutline.png" alt="" class="w-24" >
            </div>
            <div class=" row bg-white m-1 pb-4  rounded-10">

                <div class="col-md-3 mt-3">

                    <label for="" class="form-label clr-555 font-15 font-poppins">Low </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Minimum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Medium </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Maximum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                </div>
            </div>

        </div>
          <div class=" mt-4 p-3  pb-4 background-clr-f9f9f9  rounded-10">
            <div class="col-12  mb-3 d-flex justify-content-between align-items-center">
                <h5 class=" font-poppins font-18 mb-0">Early bird</h5>
                <img src="http://127.0.0.1:8000/assets/images/plusOutline.png" alt="" class="w-24">
            </div>
            <div class=" row bg-white m-1 pb-4  rounded-10">

                <div class="col-md-3 mt-3">

                    <label for="" class="form-label clr-555 font-15 font-poppins">Low </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Minimum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Medium </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Maximum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                </div>
            </div>

        </div>
          <div class=" mt-4 p-2  pb-4  background-clr-f9f9f9  rounded-10">
            <div class="col-12  mb-3 d-flex justify-content-between align-items-center">
                <h5 class=" font-poppins font-18 mb-0">Regular</h5>
                <img src="http://127.0.0.1:8000/assets/images/plusOutline.png" alt="" class="w-24">
            </div>
            <div class=" row bg-white m-1 pb-4  rounded-10">

                <div class="col-md-3 mt-3">

                    <label for="" class="form-label clr-555 font-15 font-poppins">Low </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Minimum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Medium </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Maximum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                </div>
            </div>

        </div>
          <div class=" mt-4 p-3  pb-4  background-clr-f9f9f9  rounded-10">
            <div class="col-12  mb-3 d-flex justify-content-between align-items-center">
                <h5 class=" font-poppins font-18 mb-0">Other price 1</h5>
                <img src="http://127.0.0.1:8000/assets/images/plusOutline.png" alt="" class="w-24">
            </div>
            <div class=" row bg-white m-1 pb-4  rounded-10">

                <div class="col-md-3 mt-3">

                    <label for="" class="form-label clr-555 font-15 font-poppins">Low </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Minimum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Medium </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Maximum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                </div>
            </div>

        </div>
          <div class=" mt-4 p-3  pb-4  background-clr-f9f9f9  rounded-10">
            <div class="col-12  mb-3 d-flex justify-content-between align-items-center">
                <h5 class=" font-poppins font-18 mb-0">Other price 2</h5>
                <img src="http://127.0.0.1:8000/assets/images/plusOutline.png" alt="" class="w-24">
            </div>
            <div class=" row bg-white m-1 pb-4  rounded-10">

                <div class="col-md-3 mt-3">

                    <label for="" class="form-label clr-555 font-15 font-poppins">Low </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Minimum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Medium </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Maximum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                </div>
            </div>

        </div> -->


    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button
                    class="accordion-button accordion-btn collapsed d-flex justify-content-between align-items-center gap-3"
                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">

                    <p class="mb-0 clr-555 font-poppins font-18"><span class=" me-2"></span>VIP price</p>

                    <div class="d-flex align-items-center gap-2">



                        <span class="acc-icon"><i class="fa-solid fa-plus"></i></span>

                    </div>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class=" row bg-white m-1 pb-4  rounded-10">

                        <div class="col-md-3 mt-3">

                            <label for="" class="form-label clr-555 font-15 font-poppins">Low </label>
                            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="" class="form-label clr-555 font-15 font-poppins">Minimum </label>
                            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="" class="form-label clr-555 font-15 font-poppins">Medium </label>
                            <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="" class="form-label clr-555 font-15 font-poppins">Maximum </label>
                            <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item  mt-3">
            <h2 class="accordion-header">
                <button
                    class="accordion-button  accordion-btn collapsed d-flex justify-content-between align-items-center gap-3"
                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                    aria-controls="flush-collapseTwo">
                    <p class=" mb-0 clr-555 font-poppins font-18"> <span class=" me-2"></span>Early bird</p>
                    <div class="d-flex align-items-center gap-2">



                        <span class="acc-icon"><i class="fa-solid fa-plus"></i></span>

                    </div>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class=" row bg-white m-1 pb-4  rounded-10">

                <div class="col-md-3 mt-3">

                    <label for="" class="form-label clr-555 font-15 font-poppins">Low </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Minimum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Medium </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Maximum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                </div>
            </div>
                </div>
            </div>
        </div>

        <div class="accordion-item mt-3">
            <h2 class="accordion-header">
                <button
                    class="accordion-button  accordion-btn collapsed d-flex justify-content-between align-items-center gap-3"
                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false"
                    aria-controls="flush-collapsefour">
                    <p class=" mb-0 font-18 clr-555"> <span class=" me-2"></span>Regular</p>
                    <div class="d-flex align-items-center gap-2">



                        <span class="acc-icon"><i class="fa-solid fa-plus"></i></span>

                    </div>
                </button>
            </h2>
            <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class=" row bg-white m-1 pb-4  rounded-10">

                <div class="col-md-3 mt-3">

                    <label for="" class="form-label clr-555 font-15 font-poppins">Low </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Minimum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Medium </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                </div>
                <div class="col-md-3 mt-3">
                    <label for="" class="form-label clr-555 font-15 font-poppins">Maximum </label>
                    <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection