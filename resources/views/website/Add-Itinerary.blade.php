@extends('layouts.main_layout')
@section('content')
   <div class="add-detail d-flex pt-4  align-items-center gap-2">
        <img src="http://127.0.0.1:8000/assets/images/ChevronLeftOutline.png" alt="" class="wh-24" id="backBtn">
        <h2 class=" mb-0 font-poppins fw-500 clr-3b3b3b font-28">Add Itinerary</h2>
    </div>

    <div class="row  my-4">

        <div class="col-md-6  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Select day</label>
            <input type="date" class="form-control w-100 border-1px-555-30 height-50">

        </div>
        <div class="col-md-6  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Select time</label>
            <input type="time" class="form-control w-100 border-1px-555-30 height-50">

        </div>
        <div class="col-md-12  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Title</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">

        </div>
        <div class="col-md-12  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Description</label>
            <input type="text-area" class="form-control w-100 border-1px-555-30 height-50"style="height: 100px;">

        </div>
    </div>
      <div class="upload-section  mt-5 ">
            <p class=" mb-0 font-18 font-poppins">Upload Image</p>
            <div class="image-preview-container" id="imagePreviewContainer">
                <div class="upload-box d-flex flex-column    justify-content-center  align-items-center mt-3"
                    id="uploadBox">

                    <input type="file" id="uploadInput" accept="image/*" multiple hidden>

                    <img src="{{ asset('assets/images/upload.png') }}" alt="" class="wh-38 upload-icon">
                    <p class="clr-555-80 fw-400 clr-555  mb-0">Add</p>

                </div>
            </div>
            

        </div>

@endsection