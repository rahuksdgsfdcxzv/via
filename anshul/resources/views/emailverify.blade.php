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
    <div class="row login_section m-0">

        {{-- ========== Left section ========= --}}
        <div class="col-md-4">

            <div class="background_image d-flex justify-content-center align-items-center">
                <div class="via_logo ">
                    <img src="{{asset('/assets/images/via_logo.png')}}" alt="">
                </div>
            </div>
        </div>

        {{-- ========== Right section ========= --}}
        <div class="col-md-8  text-center">
            <div class="right_section">
                <div class="text-center">
                    <img src="{{asset('/assets/images/via_star.png')}}" alt="" height="70" width="70">
                    <h3 class="font-32 mt-2">Verify your email address</h3>
                    <p class="font-16 mt-2">We’re almost there! To finish setting up your account, please check your inbox and verify your email address</p>
                </div>

                <form action="">
                    <div class="d-flex align-items-center flex-column mt-5">

                        <!-- Email -->
            <div class="mb-4 position-relative w-100 d-flex justify-content-center">
              <div class="i_icon position-absolute text-white d-flex align-items-center justify-content-center top-0 bottom-0 m-auto rounded-circle">
                <!-- SVG Envelope -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 16 16">
                  <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217l-8 4.8-8-4.8V4zm0 1.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.383l-8 4.8-8-4.8z" />
                </svg>
              </div>
              <input type="email" class="form-control" placeholder="Email address" required>
            </div>
            {{-- resend email button --}}
              <!-- Sign Up -->
            <button type="submit" class="bg_gradient font-18 button_large text-white fw-bold border-0 mt-2">
             Resend Email
            </button>
        </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    

</body>

</html>
