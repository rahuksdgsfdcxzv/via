<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}" />

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
       <div class="col-md-8">
        <div class="right_section">
           <div class="text-center">
                    <img src="{{asset('/assets/images/via_star.png')}}" alt="" height="70" width="70">
                    <h3 class="font-32 mt-2">Forgot password</h3>
                    <p class="font-16">Enter your email and we’ll send you link to reset your password.</p>
                </div>
              <div class="d-flex align-items-center flex-column mt-2">
                 <form action="">
                   <!-- Email -->
                        <div class="mb-4 position-relative w-100 d-flex justify-content-center mt-2">
                            <i
                                class="bi bi-envelope i_icon position-absolute text-white d-flex align-items-center justify-content-center "></i>
                            <input type="email" class="form-control" placeholder="Email address" required>
                        </div>
                         <!-- reset Button -->
                        <button type="submit" class="bg_gradient font-18 button_large text-white fw-bold border-0">
                          Reset password
                        </button>
                </form>
               </div>
                {{-- back to login --}}
               <div class="d-flex align-items-center justify-content-center mt-4">
  <i class="bi bi-arrow-left text-dark me-2 fs-5"></i>
  <p class="font-16 mb-0">Back to Login</p>
</div>
                      </div>
                      
       </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>