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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/master.css')}}" />
</head>

<body>

<div class="container">

    <ul class="nav nav-tabs ms-0 d-flex gap-3" id="tripTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active font-18 border-0 text-green ps-0"
                id="ongoing-tab" data-bs-toggle="tab" data-bs-target="#ongoing"
                type="button" role="tab">
                Ongoing
            </button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link font-18 border-0 text-green ps-0"
                id="complete-tab" data-bs-toggle="tab" data-bs-target="#complete"
                type="button" role="tab">
                Complete
            </button>
        </li>
    </ul>


    <div class="tab-content pt-3">

        <!-- Ongoing TAB -->
        <div class="tab-pane fade show active " id="ongoing" role="tabpanel">
            <p class="mt-3">No ongoing trips.</p>
        </div>

        <!-- Complete TAB -->
        <div class="tab-pane  mt-4" id="complete" role="tabpanel">
             <div class="card-2 mt-3">
                <div class="trip-card d-md-flex justify-content-between mt-3">
                   
                        <img src="{{asset('/assets/images/completed_trip1.png')}}"
                          class="trip-image rounded-1 me-2">

                        <div class="d-flex justify-content-between">
                            <div class="trip-info">
                            <h3 class="font-18 fw-semibold">Mountains Camping</h3>
                            <p class="font-16">
                                Camping is an outdoor activity that involves staying the night/more than one night in a protective shelter out in nature.
                            </p>

                            <div class="trip-meta mt-3">
                                Vacant seats : 8 |
                                <span class="fee fw-semibold">Fee: $30</span>
                            </div>
                        </div>
                  

                    <div class="btn btn-brown font-12 rounded-pill gap-2 d-flex align-items-center justify-content-center mt-2 px-3 py-1">
                        <i class="bi bi-people-fill"></i> Public
                    </div>
                        </div>
                </div>


     </div>
       
{{-- card-2 --}}
  <div class="card-2 mt-3">
                <div class="trip-card d-md-flex justify-content-between mt-3">
                   
                        <img src="{{asset('/assets/images/completed_trip2.png')}}"
                          class="trip-image rounded-1 me-2">

                        <div class="d-flex justify-content-between">
                            <div class="trip-info">
                            <h3 class="font-18 fw-semibold">Egypt & Nile cruise adventure</h3>
                            <p class="font-16">
                                Camping is an outdoor activity that involves staying the night/more than one night in a protective shelter out in nature.
                            </p>

                            <div class="trip-meta mt-3">
                                Vacant seats : 8 |
                                <span class="fee fw-semibold">Fee: $30</span>
                            </div>
                        </div>
                  

                    <div class="btn btn-brown font-12 rounded-pill gap-2 d-flex align-items-center justify-content-center mt-2 px-3 py-1">
                        <i class="bi bi-people-fill"></i> Public
                    </div>
                        </div>
                </div>


     </div>


    </div>
</div>


  
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
