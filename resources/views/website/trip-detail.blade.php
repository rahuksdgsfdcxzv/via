@extends('layouts.main_layout')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <div class="trip-detail">
        <h2 class="fw-600 clr-3b3b3b font-poppins  my-4">Trip Detail</h2>

        <nav-trip-detail>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="basic-trip-info-tab" data-bs-toggle="tab"
                    data-bs-target="#basic-trip-info" type="button" role="tab" aria-controls="basic-trip-info"
                    aria-selected="true"> Basic Trip Info <span class="tick-icon d-none"><img
                            src="{{ asset('assets/images/active-tick.png') }}" class=" wh-15"></span>
                </button>

                <button class="nav-link" id="interests-tab" data-bs-toggle="tab" data-bs-target="#interests" type="button"
                    role="tab" aria-controls="interests" aria-selected="false">Interests <span class="tick-icon d-none"><img
                            src="{{ asset('assets/images/active-tick.png') }}" class=" wh-15"></button>


                <button class="nav-link" id="Activities-tab" data-bs-toggle="tab" data-bs-target="#Activities" type="button"
                    role="tab" aria-controls="Activities" aria-selected="false">Activities
                    <span class="tick-icon d-none"><img src="{{ asset('assets/images/active-tick.png') }}"
                            class=" wh-15"></span>
                </button>

                <button class="nav-link" id="Contract-Upload-tab" data-bs-toggle="tab" data-bs-target="#Contract-Upload"
                    type="button" role="tab" aria-controls="Contract-Upload" aria-selected="false">Contract Upload <span
                        class="tick-icon d-none"><img src="{{ asset('assets/images/active-tick.png') }}"
                            class=" wh-15"></span>
                </button>

                <button class="nav-link" id="Q&A-tab" data-bs-toggle="tab" data-bs-target="#Q&A" type="button" role="tab"
                    aria-controls="Q&A" aria-selected="false">Q&A
                    <span class="tick-icon d-none"><img src="{{ asset('assets/images/active-tick.png') }}"
                            class=" wh-15"></span>
                </button>

                <button class="nav-link" id="Checklist-tab" data-bs-toggle="tab" data-bs-target="#Checklist" type="button"
                    role="tab" aria-controls="Checklist" aria-selected="false">Checklist
                    <span class="tick-icon d-none"><img src="{{ asset('assets/images/active-tick.png') }}"
                            class=" wh-15"></span>
                </button>

                <button class="nav-link" id="Good-to-know-tab" data-bs-toggle="tab" data-bs-target="#Good-to-know"
                    type="button" role="tab" aria-controls="Good-to-know" aria-selected="false">Good to know
                    <span class="tick-icon d-none"><img src="{{ asset('assets/images/active-tick.png') }}"
                            class=" wh-15"></span>
                </button>

                <button class="nav-link" id="Include-&-Excluded-tab" data-bs-toggle="tab"
                    data-bs-target="#Include-&-Excluded" type="button" role="tab" aria-controls="Include-&-Excluded"
                    aria-selected="false">Include & Excluded
                    <span class="tick-icon d-none"><img src="{{ asset('assets/images/active-tick.png') }}"
                            class=" wh-15"></span>
                </button>

                <button class="nav-link" id="Trip-Type-tab" data-bs-toggle="tab" data-bs-target="#Trip-Type" type="button"
                    role="tab" aria-controls="Trip-Type" aria-selected="false">Trip Type
                    <span class="tick-icon d-none"><img src="{{ asset('assets/images/active-tick.png') }}"
                            class=" wh-15"></span>
                </button>

            </div>
        </nav-trip-detail>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="basic-trip-info" role="tabpanel"
                aria-labelledby="basic-trip-info-tab" tabindex="0">
                <div class="row my-4">
                    <div class="col-md-6  mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Title</label>
                        <input type="text" class="form-control w-100 border-1px-555-30 height-50">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Start date</label>
                        <input type="date" class="form-control w-100 border-1px-555-30 height-50" aria-describedby="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">End date</label>
                        <input type="date" class="form-control w-100 border-1px-555-30 height-50" aria-describedby="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Start location</label>
                        <input type="text" class="form-control w-100 border-1px-555-30 height-50" aria-describedby="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Trip leader</label>
                        <input type="text" class="form-control w-100 border-1px-555-30 height-50" aria-describedby="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Co Host</label>
                        <select class="form-select form-control w-100 border-1px-555-30 height-50"
                            aria-label="Default select example">

                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Keywords</label>
                        <input type="text" class="form-control w-100 border-1px-555-30 height-50" aria-describedby="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Trip privacy</label>
                        <input type="text" class="form-control w-100 border-1px-555-30 height-50" aria-describedby="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Maximum group site</label>
                        <input type="text" class="form-control w-100 border-1px-555-30 height-50" aria-describedby="">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Overview</label>
                        <input type="text" class="form-control w-100 border-1px-555-30 height-50" aria-describedby="">
                    </div>
                </div>
                <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn  submit-btn  rounded-100">Submit</button>
                    </div>
                </div>


            </div>



            <div class="tab-pane fade" id="interests" role="tabpanel" aria-labelledby="interests-tab" tabindex="0">
                <div class="row gap-2 mt-4">

                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Adventurous</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Beach Bum</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Adrenaline</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Slow Traveler</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Hiker</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Health & Wellness</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Nature Lover</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">City Life</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">On the Go</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Relaxation</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>

                </div>
                <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn  submit-btn  rounded-100">Submit</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Activities" role="tabpanel" aria-labelledby="Activities-tab" tabindex="0">
                <div class="row gap-2 mt-4">

                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Rock Climbing</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">River Rafting</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Snorkeling Excursion</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Paddle Boarding</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Jungle Hike</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Waterfall Visit</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Temple Exploration</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Wine Tasting</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Ice Cave Tour</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Camel Desert Ride</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>

                </div>
                <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn  submit-btn  rounded-100">Submit</button>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="Contract-Upload" role="tabpanel" aria-labelledby="Contract-Upload-tab"
                tabindex="0">
                <div class="upload-section  mt-5">
                    <p class=" mb-0 font-18 font-poppins">Upload Image</p>
                    <div class="image-preview-container" id="imagePreviewContainer">
                        <div class="upload-box d-flex flex-column    justify-content-center  align-items-center mt-3"
                            id="uploadBox">

                            <input type="file" id="uploadInput" accept="image/*" multiple hidden>

                            <img src="{{ asset('assets/images/upload.png') }}" alt="" class="wh-38 upload-icon">
                            <p class="clr-555-80 fw-400 clr-555  mb-0">Add</p>

                        </div>
                    </div>
                    <p class="clr-555 mt-3 font-poppins fw-400 clr-555 mb-0" id="countText">
                        0/5 Photos Uploaded
                    </p>
                    <p class="clr-555 mt-3 font-poppins fw-400 clr-555  mb-0" id="maxText">Max 5 Photos/Video</p>

                </div>


            </div>
            <div class="tab-pane fade" id="Q&A" role="tabpanel" aria-labelledby="Q&A-tab" tabindex="0">
                <div class="row mt-4">
                    <div class="tab-heading d-flex justify-content-between align-items-center px-3">
                        <h4 class="clr-3b3b3b">Q&A Listing</h4>
                        <button class=" btn add-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" width="20px" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg> Add
                        </button>
                    </div>
                    <!--  -->
                    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button accordion-btn collapsed d-flex justify-content-between align-items-center gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">

                                    <p class="mb-0 clr-3b3b3b font-14"><span class=" me-2">1.</span>What’s the best way to
                                        reach Goa?</p>

                                    <div class="d-flex align-items-center gap-2">

                                        <div class="acc-btns d-flex gap-2 me-3">
                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/dlt.png') }}" alt="" class="wh-18 me-2">
                                                Delete
                                            </div>

                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/edt.png') }}" alt="" class="wh-18 me-2">
                                                Edit
                                            </div>
                                        </div>

                                        <span class="acc-icon"><i class="fa-solid fa-plus"></i></span>

                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class=" mb-0 font-14 font-poppins clr-3b3b3b rounded-15  bg-white py-3 px-2">-- You
                                        can fly into Dabolim Airport or
                                        take a train to Madgaon or Thivim station.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  mt-3">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button  accordion-btn collapsed d-flex justify-content-between align-items-center gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <p class=" mb-0 font-14 clr-3b3b3b"> <span class=" me-2">2.</span>What’s the best way
                                        What kind of accommodation is included?to reach Goa?</p>
                                    <div class="d-flex align-items-center gap-2">

                                        <div class="acc-btns d-flex gap-2 me-3">
                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/dlt.png') }}" alt="" class="wh-18 me-2">
                                                Delete
                                            </div>

                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/edt.png') }}" alt="" class="wh-18 me-2">
                                                Edit
                                            </div>
                                        </div>

                                        <span class="acc-icon"><i class="fa-solid fa-plus"></i></span>

                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class=" mb-0 font-14 font-poppins clr-3b3b3b py-3 px-2 rounded-15  bg-white">-- You
                                        can fly into Dabolim Airport or
                                        take a train to Madgaon or Thivim station.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mt-3">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button  accordion-btn collapsed d-flex justify-content-between align-items-center gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour"
                                    aria-expanded="false" aria-controls="flush-collapsefour">
                                    <p class=" mb-0 font-14 clr-3b3b3b"> <span class=" me-2">3.</span>What’s the best way
                                        What kind of accommodation is included?to reach Goa?</p>
                                    <div class="d-flex align-items-center gap-2">

                                        <div class="acc-btns d-flex gap-2 me-3">
                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/dlt.png') }}" alt="" class="wh-18 me-2">
                                                Delete
                                            </div>

                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/edt.png') }}" alt="" class="wh-18 me-2">
                                                Edit
                                            </div>
                                        </div>

                                        <span class="acc-icon"><i class="fa-solid fa-plus"></i></span>

                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class=" mb-0 font-14 font-poppins clr-3b3b3b py-3 px-2 rounded-15  bg-white">-- You
                                        can fly into Dabolim Airport or
                                        take a train to Madgaon or Thivim station.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- -->

                </div>

            </div>
            <div class="tab-pane fade" id="Checklist" role="tabpanel" aria-labelledby="Checklist-tab" tabindex="0">
                <div class="row  my-4">

                    <div class="col-md-12  mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Title</label>
                        <input type="text" class="form-control w-100 border-1px-555-30 height-50">

                    </div>
                </div>
                <div class="checklist-dtl">
                    <h4 class="font-poppins">Checklist</h4>

                    <div
                        class="col-12  mt-4 d-flex background-clr-f9f9f9 border-1px-555-10 rounded-10 p-3  justify-content-between align-items-center">
                        <p class=" mb-0 clr-3b3b3b font-poppins"><span class="me-2">1.</span>Passport & Visa</p>
                        <div class="delete-checklist ">
                            <button
                                class=" border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center"><img
                                    src="{{ asset('assets/images/dlt.png') }}" alt="" class="wh-18 me-2">
                                Delete</button>
                        </div>
                    </div>
                    <div
                        class="col-12  mt-3 d-flex background-clr-f9f9f9 border-1px-555-10 rounded-10 p-3  justify-content-between align-items-center">
                        <p class=" mb-0 clr-3b3b3b font-poppins"><span class="me-2">2.</span>Hiking Shoes</p>
                        <div class="delete-checklist ">
                            <button
                                class=" border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center"><img
                                    src="{{ asset('assets/images/dlt.png') }}" alt="" class="wh-18 me-2">
                                Delete</button>
                        </div>
                    </div>
                    <div
                        class="col-12  mt-3 d-flex background-clr-f9f9f9 border-1px-555-10 rounded-10 p-3  justify-content-between align-items-center">
                        <p class=" mb-0 clr-3b3b3b font-poppins"><span class="me-2">3.</span>Universal Adapter</p>
                        <div class="delete-checklist ">
                            <button
                                class=" border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center"><img
                                    src="{{ asset('assets/images/dlt.png') }}" alt="" class="wh-18 me-2">
                                Delete</button>
                        </div>
                    </div>
                </div>
                <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn  submit-btn  rounded-100">Submit</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Good-to-know" role="tabpanel" aria-labelledby="Good-to-know-tab" tabindex="0">
                <div class="row my-4">
                    <div class="tab-heading d-flex justify-content-between align-items-center px-3">
                        <h4 class="clr-3b3b3b">Good to know listing</h4>
                        <button class=" btn add-btn width-fit-content"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" width="20px" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg> Add Good to know
                        </button>
                    </div>

                    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button accordion-btn collapsed d-flex justify-content-between align-items-center gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsegoodzero">

                                    <p class="mb-0 clr-3b3b3b font-14"><span class=" me-2">1.</span>What’s the best way to
                                        reach Goa?</p>

                                    <div class="d-flex align-items-center gap-2">

                                        <div class="acc-btns d-flex gap-2 me-3">
                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/dlt.png') }}" alt="" class="wh-18 me-2">
                                                Delete
                                            </div>

                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/edt.png') }}" alt="" class="wh-18 me-2">
                                                Edit
                                            </div>
                                        </div>

                                        <span class="acc-icon"><i class="fa-solid fa-plus"></i></span>

                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapsegoodzero" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class=" mb-0 font-14 bg-white py-3 px-2 rounded-15 font-poppins clr-3b3b3b ">-- You
                                        can fly into Dabolim Airport or
                                        take a train to Madgaon or Thivim station.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  mt-3">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button  accordion-btn collapsed d-flex justify-content-between align-items-center gap-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsegoodone"
                                    aria-expanded="false" aria-controls="flush-collapsegoodone">
                                    <p class=" mb-0 font-14 clr-3b3b3b"> <span class=" me-2">2.</span>What’s the best way
                                        What kind of accommodation is included?to reach Goa?</p>
                                    <div class="d-flex align-items-center gap-2">

                                        <div class="acc-btns d-flex gap-2 me-3">
                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/dlt.png') }}" alt="" class="wh-18 me-2">
                                                Delete
                                            </div>

                                            <div class="border-0 font-14 bg-white rounded-100 px-2 py-1 d-flex justify-content-center align-items-center delete-btn"
                                                role="button">
                                                <img src="{{ asset('assets/images/edt.png') }}" alt="" class="wh-18 me-2">
                                                Edit
                                            </div>
                                        </div>

                                        <span class="acc-icon"><i class="fa-solid fa-plus"></i></span>

                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapsegoodone" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class=" mb-0 font-14 font-poppins clr-3b3b3b bg-white py-3 px-2 rounded-15">-- You
                                        can fly into Dabolim Airport or
                                        take a train to Madgaon or Thivim station.</p>
                                </div>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
            <div class="tab-pane fade" id="Include-&-Excluded" role="tabpanel" aria-labelledby="Include-&-Excluded-tab"
                tabindex="0">
                <div class="row  my-4">
                    <div class="col-md-12  mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Included</label>
                        <input type="text-area" class="form-control w-100 border-1px-555-30" style="height: 100px;">
                    </div>
                    <div class="col-md-12  mb-3">
                        <label for="" class="form-label clr-555 font-15 font-poppins">Excluded</label>
                        <input type="text-area" class="form-control w-100 border-1px-555-30" style="height: 100px;">
                    </div>
                </div>
                <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn  submit-btn  rounded-100">Submit</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Trip-Type" role="tabpanel" aria-labelledby="Trip-Type" tabindex="0">
                <div class="row gap-2 mt-4">

                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Rock Climbing</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">River Rafting</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Snorkeling Excursion</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Paddle Boarding</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Jungle Hike</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Waterfall Visit</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Temple Exploration</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Wine Tasting</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Ice Cave Tour</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>
                    <div
                        class="border-1px-555-30 rounded-10  d-flex justify-content-between align-items-center px-3 py-2 mb-3 w-20">
                        <h4 class="font-14 fw-400 clr-555   mb-0 font-poppins">Camel Desert Ride</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkDefault">

                        </div>
                    </div>

                </div>
                <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn  submit-btn  rounded-100">Submit</button>
                    </div>
                </div>

            </div>

        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(".submit-btn").click(function () {

            // wrapper navigation
            let tabs = $("#nav-tab .nav-link");

            // active tab
            let activeTab = $("#nav-tab .nav-link.active");

            // tick show
            activeTab.find(".tick-icon").removeClass("d-none");

            // find index of active tab
            let index = tabs.index(activeTab);

            // next tab
            let nextTab = tabs.eq(index + 1);

            // agar next tab exists → open it
            if (nextTab.length > 0) {
                nextTab.trigger("click");
            }
        });


    </script>
@endsection