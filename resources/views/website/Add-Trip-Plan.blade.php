@extends('layouts.main_layout')
@section('content')
      <div class="add-detail pt-4 d-flex align-items-center gap-2">
        <img src="{{ asset('assets/images/ChevronLeftOutline.png') }}" alt="" class="wh-24" id="backBtn">
        <h2 class=" mb-0 font-poppins fw-500 clr-3b3b3b font-28">Add Trip Plan</h2>
    </div>
    <div class="upload-section px-2  mt-5">
        <p class=" mb-0 font-18 font-poppins">Upload Image</p>
        <div class="image-preview-container" id="imagePreviewContainer">
            <div class="upload-box d-flex flex-column    justify-content-center  align-items-center mt-3" id="uploadBox">

                <input type="file" id="uploadInput" accept="image/*" multiple hidden>

                <img src="{{ asset('assets/images/upload.png') }}" alt="" class="wh-38 upload-icon">
                <p class="clr-555-80 fw-400 clr-555  mb-0">Add</p>

            </div>
        </div>


    </div>
    <div class="row  my-4">
        <div class="col-md-12  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Activities name</label>
            <input type="text" class="form-control w-100 border-1px-555-30 height-50">

        </div>
        <div class="col-md-12  mb-3">
            <label for="" class="form-label clr-555 font-15 font-poppins">Description</label>
            <input type="text-are" class="form-control w-100 border-1px-555-30 " style="height: 100px;">

        </div>
          
    </div>
   <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn   save-btn  rounded-100">Save</button>
                    </div>
                </div>
@endsection