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
                    <h3 class="font-32 mt-2">Login</h3>
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

                        <!-- Password -->
                         {{-- <div class="mb-3 position-relative">
    <i class="bi bi-lock i_icon position-absolute text-white ms-3"></i>
    <input type="password" id="password" class="form-control" placeholder="Password" required>
    <i class="bi bi-eye toggle-password position-absolute text-dark" id="togglePassword"></i>
  </div> --}}
   <div class="mb-4 position-relative w-100 d-flex justify-content-center">
              <div class="i_icon position-absolute text-white d-flex align-items-center justify-content-center top-0 bottom-0 m-auto rounded-circle">
                <!-- SVG Lock -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 16 16">
      <path d="M8 1a3 3 0 0 1 3 3v3H5V4a3 3 0 0 1 3-3zM3 8h10a1 1 0 0 1 1 1v6H2V9a1 1 0 0 1 1-1z" />
    </svg>
              </div>
              <input type="password" class="form-control" id="password" placeholder="Password" required>
              <i class="bi bi-eye toggle-password position-absolute text-dark" id="togglePassword"></i>
            </div>

                        <!-- Forgot Password -->
                        <div class="w-100 text-end mb-4">
                            <a href="#" class="text-decoration-none small text-green me-3">Forgot password?</a>
                        </div>

                        <!-- Sign In Button -->
                        <button type="submit" class="bg_gradient font-18 button_large text-white fw-bold border-0">
                            Sign In
                        </button>
                    </div>
                </form>

                <!-- Divider -->
                <div class="divider my-4 d-flex align-items-center text-muted">
                    <hr class="flex-grow-1">
                    <span class="px-3 small fw-semibold">OR</span>
                    <hr class="flex-grow-1">
                </div>

                <!-- Social Buttons -->
                <div class="d-flex flex-column align-items-center gap-3">
                    <button
                        class="social_btn  d-flex align-items-center justify-content-center gap-2 border rounded-4 py-3 bg-white font-18">
                        <img src="{{asset('/assets/images/google_logo.png')}}" alt=""class="me-2" width="24px
            "> Continue with Google
                    </button>

                    <button
                        class="social_btn  d-flex align-items-center justify-content-center gap-2 border rounded-4 py-3 bg-white font-18">
                        <img src="{{asset('/assets/images/apple_logo.png')}}" alt="" width="30" height="30px" class="me-2"> Continue
                        with Apple
                    </button>

                    <button
                        class="social_btn  d-flex align-items-center justify-content-center gap-2 border rounded-4 py-3 bg-white font-18">
                        <i class="bi bi-envelope fs-5 me-2"></i> Sign Up Using Email
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
    {{-- eye button on password --}}
  <script>
  const togglePassword = document.getElementById('togglePassword');
  const password = document.getElementById('password');

  togglePassword.addEventListener('click', () => {
    const isPassword = password.type === 'password';
    password.type = isPassword ? 'text' : 'password';
     togglePassword.classList.toggle('bi-eye-slash');
    togglePassword.classList.toggle('bi-eye');
  });
</script>

</body>

</html>
