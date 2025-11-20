@extends('layouts.main_layout')
@section('content')


        <h2 class="fw-600 clr-3b3b3b  mt-4 font-poppins">Trip Media</h2>
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
            <p class="clr-555 mt-3 font-poppins fw-400 clr-555 mb-0" id="countText">
                0/5 Photos Uploaded
            </p>
            <p class="clr-555 mt-3 font-poppins fw-400 clr-555  mb-0" id="maxText">Max 5 Photos/Video</p>

        </div>

        <!--  -->
        <div class="upload-section  mt-5">
            <p class=" mb-0 font-18 font-poppins">Upload Video</p>
            <div class="image-preview-container" id="imagePreviewContainer">
                <div class="upload-box d-flex flex-column    justify-content-center  align-items-center mt-3"
                    id="uploadBox">

                    <input type="file" id="uploadInput" accept="image/*" multiple hidden>

                    <img src="{{ asset('assets/images/upload.png') }}" alt="" class="wh-38 upload-icon">
                    <p class="clr-555-80 fw-400 clr-555  mb-0">Add</p>

                </div>
            </div>


        </div>
        <div class="row border-top-1px-555 sticky-submit-bar">
                    <div class="col-md-12 mb-0 py-4 d-flex justify-content-end">
                        <button class="btn  submit-btn  rounded-100">Submit</button>
                    </div>
                </div>
    
@endsection