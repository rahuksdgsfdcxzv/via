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
     <div class="container py-4">

        <!-- Page Title -->
        <h3 class="fw-bold mb-4"><i class="bi bi-arrow-left me-2"></i> Booking details</h3>

        <div class="row g-4">

            <!-- LEFT SIDE -->
            <div class="col-lg-3">

                <!-- Profile -->
                <div class="profile-card p-4 mb-4 text-center">
                    <img src="{{asset('/assets/images/user_1.png')}}" class="profile-img mb-3 rounded-circle" height="110px" width="110px">

                    <h5 class="fw-semibold mb-1 ">Siena Holman</h5>
                    <p class="text-muted  mb-1 font-16">sbennion232@gmail.com</p>
                    <p class="text-muted font-16 mb-0">Trip Name: Hiking</p>
                </div>

                <!-- Document -->
                <div class="document-card p-4">
                    <h5 class="fw-semibold mb-1">Document</h5>
                    <p class="text-muted  mb-3">Contract and QA files</p>

                    <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                        <span class="font-18">Contract</span>
                        <i class="bi bi-file-earmark-pdf text-danger fs-5"></i>
                    </div>

                    <div class="d-flex justify-content-between align-items-center py-2">
                        <span  class="font-18">QA</span>
                        <i class="bi bi-file-earmark-pdf text-danger fs-5"></i>
                    </div>
                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-9">

                <!-- Summary Cards -->
                <div class="row g-3 mb-4">

                    <div class="col-md-4">
                        <div class="summary-card d-flex align-items-center gap-3">
                            <div class="summary-icon bg-success  rounded-circle bg-opacity-10 text-success d-flex justify-conent-center align-items-center">
                                <i class="bi bi-cash"></i>
                            </div>
                            <div>
                                <div class="text-muted font-16">Total collected</div>
                                <h5 class="fw-bold mb-0 font-24">$1,658.46</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="summary-card d-flex align-items-center gap-3">
                            <div class="summary-icon bg-danger bg-opacity-10 text-danger  rounded-circle d-flex justify-conent-center align-items-center">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <div>
                                <div class="text-muted font-16">Pending</div>
                                <h5 class="fw-bold mb-0 font-24">$1,658.46</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="summary-card d-flex align-items-center gap-3">
                            <div class="summary-icon bg-warning bg-opacity-10 text-yellow  rounded-circle d-flex justify-conent-center align-items-center">
                                <i class="bi bi-coin"></i>
                            </div>
                            <div>
                                <div class="text-muted font-16">Total amount</div>
                                <h5 class="fw-bold mb-0 font-24">$1,658.46</h5>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Payment Milestones -->
                <div class="milestone-card p-4">

                    <h5 class="fw-bold">Payment Milestones</h5>
                    <p class="text-muted font-16 mb-3">Track payment schedule and status</p>

                    <!-- 1 -->
                    <div class="d-flex justify-content-between align-items-center milestone-item">
                        <div class="d-flex gap-3">
                            <div class="text-success fs-4"><i class="bi bi-check-circle-fill"></i></div>
                            <div>
                                <div class="fw-semibold font-16">Deposit Amount</div>
                                <div class="text-muted font-14">May 2, 2025</div>
                            </div>
                        </div>
                        <span class="text-success font-16">Paid amount : $50</span>
                    </div>

                    <!-- 2 -->
                    <div class="d-flex justify-content-between align-items-center milestone-item">
                        <div class="d-flex gap-3">
                            <div class="text-danger fs-4"><i class="bi bi-x-circle-fill"></i></div>
                            <div>
                                <div class="fw-semibold font-16">Deposit Amount</div>
                                <div class="text-muted font-14">May 2, 2025</div>
                            </div>
                        </div>
                        <span class="text-danger font-16">Pending amount : $30</span>
                    </div>

                    <!-- 3 -->
                    <div class="d-flex justify-content-between align-items-center milestone-item">
                        <div class="d-flex gap-3">
                            <div class="text-yellow fs-4"><i class="bi bi-exclamation-circle-fill"></i></div>
                            <div>
                                <div class="fw-semibold font-16">Deposit Amount</div>
                                <div class="text-muted font-14">May 2, 2025</div>
                            </div>
                        </div>
                        <span class="text-yellow font-16">Overdue amount : $12</span>
                    </div>

                    <!-- 4 -->
                    <div class="d-flex justify-content-between align-items-center milestone-item">
                        <div class="d-flex gap-3">
                            <div class="text-yellow fs-4"><i class="bi bi-exclamation-circle-fill"></i></div>
                            <div>
                                <div class="fw-semibold font-16">Deposit Amount</div>
                                <div class="text-muted font-14">May 2, 2025</div>
                            </div>
                        </div>
                        <span class="text-yellow  font-16">Overdue amount : $12</span>
                    </div>

                </div>

            </div>
        </div>

    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
