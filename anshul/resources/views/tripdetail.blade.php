<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/master.css')}}" />
</head>

<body>

<div class="trip-detail py-4 px-5">
    <h3 class="font-32 fw-semibold my-5">Egypt & Nile cruise adventure</h3>
 <div class="row ">
    <div class="col-md-4">
        <img src="{{asset('/assets/images/completed_trip2.png')}}"
                          class="detail-image " height="100%" width="100%">
    </div>
    <div class="col-md-4 d-grid gap-2">
      <img src="{{asset('/assets/images/trip_detail1.png')}}"
                          class="detail-image" height="100%" width="100%"> 
     <img src="{{asset('/assets/images/trip_detail2.png')}}"
                          class="detail-image" height="100%" width="100%"> 
    </div>
    {{--  --}}
    <div class="col-md-4 d-grid gap-2">
      <img src="{{asset('/assets/images/trip_detail1.png')}}"
                          class="detail-image" height="100%" width="100%"> 
     <img src="{{asset('/assets/images/trip_detail2.png')}}"
                          class="detail-image" height="100%" width="100%"> 
    </div>
    {{--  --}}
</div>
 

<div class="row">
    <div class="col-md-8">
         <div class="mt-4 font-18 d-flex gap-5">
     <div> <i class="bi bi-geo-alt"></i> Bali, Canggu </div>
     <div> <i class="bi bi-calendar2"></i> May 6 – May 13, 2025</div>
    </div>
 <p class="mt-4">Egypt & Nile Cruise Adventure is a travel experience that combines exploration and relaxation along the world’s longest river. It involves journeying through Egypt’s ancient landscapes while staying aboard a cruise ship that serves as both transport and accommodation.</p>
 <div class="btn bg_gradient px-4 py-2 text-white font-16 rounded-pill fw-medium">Payout : $120.57</div>
 <div class="detail mt-4 ">
    <h3 class="font-20 fw-semibold">Good to Know</h3>
    <div class="row">
        <div class="col-md-6 ps-4">
            <h5 class="font-18 fw-medium ms-3 mt-4">Language & Culture:</h5>
    <ul class="text-muted">
        <li>Learn basics: Halo, Terima kasih, Tolong</li>
        <li>Remove shoes before entering temples</li>
        <li> Be polite a smile goes a long way</li>
    </ul>
        </div>
        {{--  --}}
         <div class="col-md-6 ps-4">
            <h5 class="font-18 fw-medium ms-3 mt-4">Visa Requirements:</h5>
    <ul class="text-muted">
        <li>Visa on Arrival available for most countries</li>
        <li>Valid for 30 days, extendable once</li>
        <li>Bring a passport valid for at least 6 months</li>
    </ul>
        </div>
        {{--  --}}
         <div class="col-md-6 ps-4">
            <h5 class="font-18 fw-medium ms-3 mt-4">Permits:</h5>
    <ul class="text-muted">
        <li>Surf permits needed at some beaches</li>
        <li>Required for volcano or park hikes</li>
    </ul>
        </div>
        {{--  --}}
    </div>
    {{-- members --}}
   <div class="d-flex justify-content-between mt-5">
     <h3 class="font-20 fw-semibold ">Joined members</h3>
    <div><a href="#" class="text-decoration-none text-dark">
    View All 
    <i class="bi bi-arrow-up-right"></i>
</a></div>
   </div>
    {{-- user images --}}
    <div class="user_image d-flex flex-wrap gap-5 mt-4">
        <div>
        <img src="{{asset('/assets/images/user_1.png')}}"
                          class="detail-image" height="100" width="100"> 
        <p class="font-16 mt-2">Joseph torres</p>                  
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_2.png')}}"
                          class="detail-image" height="100" width="100"> 
        <p class="font-16 mt-2">Joseph torres</p>                  
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_3.png')}}"
                          class="detail-image" height="100" width="100"> 
        <p class="font-16 mt-2">Joseph torres</p>                  
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_4.png')}}"
                          class="detail-image" height="100" width="100"> 
        <p class="font-16 mt-2">Joseph torres</p>                  
    </div>
    {{--  --}}
            <div>
        <img src="{{asset('/assets/images/user_5.png')}}"
                          class="detail-image" height="100" width="100"> 
        <p class="font-16 mt-2">Joseph torres</p>                  
    </div>
    </div>
    {{--  --}}
    <hr class="my-3">
    {{--  --}}
    {{-- Joined request --}}
     <div class="d-flex justify-content-between mt-5">
     <h3 class="font-20 fw-semibold ">Joined request</h3>
    <div><a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#joinedRequestModal">
            View All 
            <i class="bi bi-arrow-up-right"></i>
        </a></div>
   </div>
    {{-- user images --}}
    <div class="user_image d-flex flex-wrap gap-5 mt-4">
        <div>
        <img src="{{asset('/assets/images/user_1.png')}}"
                          class="detail-image" height="100" width="100"> 
           <div class="d-flex justify-content-center gap-2 mt-2">
            <button class="bg_brown rounded-circle border-1">
                <i class="bi bi-check-lg"></i>
            </button>
            <button class="rounded-circle border-1">
                <i class="bi bi-x-lg bg-white"></i>
            </button>
        </div>                 
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_2.png')}}"
                          class="detail-image" height="100" width="100"> 
          <div class="d-flex justify-content-center gap-2 mt-2">
            <button class="bg_brown rounded-circle border-1">
                <i class="bi bi-check-lg"></i>
            </button>
            <button class="rounded-circle border-1">
                <i class="bi bi-x-lg bg-white"></i>
            </button>
        </div>                 
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_3.png')}}"
                          class="detail-image" height="100" width="100"> 
          <div class="d-flex justify-content-center gap-2 mt-2">
            <button class="bg_brown rounded-circle border-1">
                <i class="bi bi-check-lg"></i>
            </button>
            <button class="rounded-circle border-1">
                <i class="bi bi-x-lg bg-white"></i>
            </button>
        </div>                 
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_4.png')}}"
                          class="detail-image" height="100" width="100"> 
          <div class="d-flex justify-content-center gap-2 mt-2">
            <button class="bg_brown rounded-circle border-1 ">
                <i class="bi bi-check-lg"></i>
            </button>
            <button class="rounded-circle border-1">
                <i class="bi bi-x-lg bg-white"></i>
            </button>
        </div>                 
    </div>
    {{--  --}}
            <div>
        <img src="{{asset('/assets/images/user_5.png')}}"
                          class="detail-image" height="100" width="100"> 
          <div class="d-flex justify-content-center gap-2 mt-2">
            <button class=" bg_brown rounded-circle border-1">
                <i class="bi bi-check-lg"></i>
            </button>
            <button class="rounded-circle border-1 bg-white">
                <i class="bi bi-x-lg bg-white"></i>
            </button>
        </div>                 
    </div>
    </div>
 {{--  --}}
    <hr class="my-3">
    {{--  --}}
    {{-- Joined request --}}
     <div class="d-flex justify-content-between mt-5">
     <h3 class="font-20 fw-semibold ">Joined request</h3>
    <div><a href="#" class="text-decoration-none text-dark">
    View All 
    <i class="bi bi-arrow-up-right"></i>
</a></div>
   </div>
    {{-- user images --}}
    <div class="user_image d-flex flex-wrap gap-5 mt-4">
        <div>
        <img src="{{asset('/assets/images/user_1.png')}}"
                          class="detail-image" height="100" width="100"> 
            <p class="font-16 mt-2">Joseph torres</p> 
           <h3 class="font-16">$56</h3>   
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_2.png')}}"
                          class="detail-image" height="100" width="100"> 
        <p class="font-16 mt-2">Joseph torres</p> 
           <h3 class="font-16">$56</h3>
                         
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_3.png')}}"
                          class="detail-image" height="100" width="100"> 
           <p class="font-16 mt-2">Joseph torres</p> 
           <h3 class="font-16">$56</h3>      
    </div>
    {{--  --}}
        <div>
        <img src="{{asset('/assets/images/user_4.png')}}"
                          class="detail-image" height="100" width="100"> 
              <p class="font-16 mt-2">Joseph torres</p> 
           <h3 class="font-16">$56</h3>           
    </div>
    {{--  --}}
            <div>
        <img src="{{asset('/assets/images/user_5.png')}}"
                          class="detail-image" height="100" width="100"> 
          <p class="font-16 mt-2">Joseph torres</p> 
           <h3 class="font-16">$56</h3>
    </div>

    </div>

 </div>
    </div>
    <div class="col-md-4">
        {{--  --}}
          <div class="row my-4">
                        <div class="col-md-6">
                            <div class="stat-item collected d-flex align-items-center gap-3">
                                <div class="icon-wrapper d-flex justify-content-center align-items-center ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" >
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="stat-label font-14">Total collected</div>
                                    <div class="stat-amount font-18 fw-bold">$1,658.46</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="stat-item pending d-flex align-items-center gap-3">
                                <div class="icon-wrapper d-flex justify-content-center align-items-center ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M18.6 6.62c-1.44 0-2.8.56-3.77 1.53L7.8 14.39c-.64.64-1.49.99-2.4.99-1.87 0-3.39-1.51-3.39-3.38S3.53 8.62 5.4 8.62c.91 0 1.76.35 2.44 1.03l1.13 1 1.51-1.34L9.22 8.2C8.2 7.18 6.84 6.62 5.4 6.62 2.42 6.62 0 9.04 0 12s2.42 5.38 5.4 5.38c1.44 0 2.8-.56 3.77-1.53l7.03-6.24c.64-.64 1.49-.99 2.4-.99 1.87 0 3.39 1.51 3.39 3.38s-1.52 3.38-3.39 3.38c-.9 0-1.76-.35-2.44-1.03l-1.14-1.01-1.51 1.34 1.27 1.12c1.02 1.01 2.37 1.57 3.82 1.57 2.98 0 5.4-2.41 5.4-5.38s-2.42-5.37-5.4-5.37z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="stat-label font-14">Pending</div>
                                    <div class="stat-amount font-18 fw-bold">$1,658.46</div>
                                </div>
                            </div>
                        </div>
                    </div>
        {{--  --}}
        <div class="card p-4 shadow-sm rounded-4 m-auto mt-5" >

    <!-- Trip Info -->
    <h5 class="fw-bold mb-4">Trip Info</h5>

    <div class="row text-center align-items-center mb-4">
        <!-- Start Location -->
        <div class="col">
            <div class="mb-2">
                <i class="bi bi-geo-alt fs-4"></i>
            </div>
            <p class="text-muted mb-0">Starts in</p>
            <h5 class="fw-bold">Canggu</h5>
        </div>

        <!-- Arrow -->
        <div class="col-auto">
            <i class="bi bi-arrow-right fs-3"></i>
        </div>

        <!-- End Location -->
        <div class="col">
            <div class="mb-2">
                <i class="bi bi-geo-alt fs-4"></i>
            </div>
            <p class="text-muted mb-0">Ends in</p>
            <h5 class="fw-bold">Uluwatu</h5>
        </div>
    </div>

    <hr>

    <!-- Host Info -->
    <h5 class="fw-bold mb-4">Host Info</h5>

    <div class="d-flex align-items-center">
        <img src="{{asset('/assets/images/via_user.png')}}" class="rounded-circle me-3" width="55" height="55" alt="Host">

        <div>
            <h6 class="fw-bold mb-1">Kristen P.</h6>
            <p class="mb-0 text-muted">
                <i class="bi bi-geo-alt-fill text-danger"></i> Bali, Indonesia
            </p>
        </div>
    </div>

</div>

    </div>
</div>
</div>
{{-- modal --}}
<!-- Modal -->
<div class="modal fade" id="joinedRequestModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-4">

      <!-- HEADER -->
      <div class="d-flex align-items-center justify-content-between mb-3 position-relative">

        <!-- Invisible spacing (same width as close button) -->
        <div style="width:40px;"></div>

        <!-- Center Title -->
        <h5 class="fw-semibold m-0 text-center flex-grow-1">
          Joined requests
        </h5>

        <!-- Close Button -->
        <button class="btn border-0 p-0" style="width:40px;" data-bs-dismiss="modal">
          <i class="bi bi-x-lg fs-5"></i>
        </button>

      </div>

      <!-- BODY -->
      <div class="modal-body">

        <!-- LIST ITEM -->
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div class="d-flex align-items-center gap-3">
            <img src="{{asset('/assets/images/user_1.png')}}" class="rounded-circle" width="45" height="45">
            <span class="fw-semibold">Joseph Torres</span>
          </div>

          <div class="d-flex gap-2">
            <button class="btn rounded-circle border">
              <i class="bi bi-check-lg"></i>
            </button>
            <button class="btn rounded-circle border">
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>

        <!-- LIST ITEM -->
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div class="d-flex align-items-center gap-3">
            <img src="{{asset('/assets/images/user_1.png')}}" class="rounded-circle" width="45" height="45">
            <span class="fw-semibold">Joseph Torres</span>
          </div>

          <div class="d-flex gap-2">
            <button class="btn rounded-circle border">
              <i class="bi bi-check-lg"></i>
            </button>
            <button class="btn rounded-circle border">
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>

        <!-- LIST ITEM -->
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div class="d-flex align-items-center gap-3">
            <img src="{{asset('/assets/images/user_1.png')}}" class="rounded-circle" width="45" height="45">
            <span class="fw-semibold">Joseph Torres</span>
          </div>

          <div class="d-flex gap-2">
            <button class="btn rounded-circle border">
              <i class="bi bi-check-lg"></i>
            </button>
            <button class="btn rounded-circle border">
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>

        <!-- LIST ITEM -->
        <div class="d-flex align-items-center justify-content-between mb-3">
          <div class="d-flex align-items-center gap-3">
            <img src="{{asset('/assets/images/user_1.png')}}" class="rounded-circle" width="45" height="45">
            <span class="fw-semibold">Joseph Torres</span>
          </div>

          <div class="d-flex gap-2">
            <button class="btn rounded-circle border">
              <i class="bi bi-check-lg"></i>
            </button>
            <button class="btn rounded-circle border">
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>


  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
