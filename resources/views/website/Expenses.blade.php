@extends('layouts.main_layout')
@section('content')


<div class="tab-heading mt-4 d-flex justify-content-between align-items-center">
    <div class=" d-flex gap-2 align-items-center">
       <img src="{{ asset('assets/images/ChevronLeftOutline.png') }}" alt="" class="wh-24" id="backBtn">
        <h2 class="clr-3b3b3b font-poppins  mb-0 ">Expenses</h2>
        </div>
       <a href="./Add-Expenses" ><button class=" btn add-btn width-fit-content"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="20px" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
            </svg> Add Expenses
        </button>
        </a>
    </div>
     <!-- <div class="add-detail d-flex align-items-center gap-2">
     
        <h2 class=" mb-0 font-poppins fw-500 clr-3b3b3b font-28">Add Trip Plan</h2>
    </div> -->

    
        <div class="table-responsive font-poppins  mt-3">
        <table class="table  align-middle equal-cols">
            <thead class="background-clr-fdfdfd">
                <tr class="font-14 clr-3b3b3b border-top-1px-555 border-bottom-1px-555">
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">S.no</th>
                   
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">Description</th>
                   
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">Type</th>
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">Cost</th>
                    
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr class=" border-top-1px-555 border-bottom-1px-555">
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">01</td>
                     <td class="font-14 clr-3b3b3b fw-400 font-poppins">Lorem Ipsum is simply dummy  . ..</td>
                   
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">type 1</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">$120</td>
                   
                        <td>
                        <div class="d-flex">
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
                    </td>
                </tr>
                <tr class=" border-top-1px-555 border-bottom-1px-555" style="background: #F9F9F9;
">
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">02</td>
                     <td class="font-14 clr-3b3b3b fw-400 font-poppins">Lorem Ipsum is simply dummy  . ..</td>
                   
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">type 2</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">$120</td>
                   
                        <td>
                        <div class="d-flex gap-2">
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
                    </td>
                </tr>
                <tr class=" border-top-1px-555 border-bottom-1px-555">
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">03</td>
                     <td class="font-14 clr-3b3b3b fw-400 font-poppins">Description 3</td>
                   
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">type 3</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">$154</td>
                   
                        <td>
                        <div class="d-flex gap-2">
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
                    </td>
                </tr>
                <tr class=" border-top-1px-555 border-bottom-1px-555">
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">04</td>
                     <td class="font-14 clr-3b3b3b fw-400 font-poppins">Description 4</td>
                   
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">type 4</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">$89</td>
                   
                        <td>
                        <div class="d-flex gap-2">
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
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

@endsection