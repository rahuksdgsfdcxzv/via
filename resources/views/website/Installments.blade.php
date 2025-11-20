@extends('layouts.main_layout')
@section('content')
    <div class="tab-heading  mt-4 d-flex justify-content-between align-items-center px-3">
        <h2 class="clr-3b3b3b font-poppins">Installments</h2>
      <a href="./add-Installments"> <button class=" btn add-btn width-fit-content clr-555"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" width="20px" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
            </svg> Add installments
        </button>
        </a>
    </div>

    <div class="table-responsive font-poppins  mt-3">
        <table class="table  align-middle equal-cols">
            <thead class="background-clr-fdfdfd">
                <tr class="font-14 clr-3b3b3b border-top-1px-555 border-bottom-1px-555">
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">S.no</th>
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">Installments name</th>
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">Price</th>
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">Installments date</th>
                    <th class="font-14 clr-3b3b3b fw-500 font-poppins">Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr class=" border-top-1px-555 border-bottom-1px-555">
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">01</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">Milestone 1</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">$500</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">May 25, 2025</td>
                    <td>
                        <!-- <button class="btn btn-sm btn-link text-danger">🗑 Delete</button>
                        <button class="btn btn-sm btn-link text-primary">✏ Edit</button> -->
                        <div class="d-flex ga-2">
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

                <tr class=" border-top-1px-555 border-bottom-1px-555 background-clr-f9f9f9">
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">02</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">Milestone 2</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">$300</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">Oct 04, 2025</td>
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
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">Milestone 3</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">$400</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">Oct 15, 2025</td>
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

                <tr class="background-clr-f9f9f9">
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">04</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">Milestone 4</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">$700</td>
                    <td class="font-14 clr-3b3b3b fw-400 font-poppins">Nov 20, 2025</td>
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