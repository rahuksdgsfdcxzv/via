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

  <!-- Flag Icon CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css" />

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
        <div class="text-center mb-4">
          <img src="{{asset('/assets/images/via_star.png')}}" alt="" height="70" width="70">
          <h3 class="font-32 mt-2 ">SignUp</h3>
        </div>

        <div class="right-section">
          <form>
            <!-- Profile Upload -->
            <div class="profile-upload mb-4">
              <img id="profileImage" src="{{asset('/assets/images/via_user.png')}}" alt="Profile">
              <div class="camera-icon d-flex justify-content-center align-items-center" id="uploadTrigger">
                <!-- SVG Camera -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bg_gradient"
                  viewBox="0 0 16 16">
                  <path
                    d="M10.5 3a.5.5 0 0 1 .416.223L11.5 4h1.5A1.5 1.5 0 0 1 14.5 5.5v7A1.5 1.5 0 0 1 13 14H3a1.5 1.5 0 0 1-1.5-1.5v-7A1.5 1.5 0 0 1 3 4h1.5l.584-.777A.5.5 0 0 1 5.5 3h5zM8 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6z" />
                </svg>
              </div>
              <input type="file" id="profileInput" hidden>
            </div>

            <!-- Name -->
            <div class="mb-4 position-relative w-100 d-flex justify-content-center">
              <div class="i_icon position-absolute text-white d-flex align-items-center justify-content-center top-0 bottom-0 m-auto rounded-circle">
                <!-- SVG Person -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 16 16">
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM2 14s-1 0-1-1 1-4 7-4 7 3 7 4-1 1-1 1H2z" />
                </svg>
              </div>
              <input type="text" class="form-control" placeholder="Enter your name" required>
            </div>

            <!-- Country -->
            <div class="mb-4 position-relative w-100 d-flex justify-content-center">
              <div class="i_icon position-absolute text-white d-flex align-items-center justify-content-center top-0 bottom-0 m-auto rounded-circle">
                <!-- SVG Globe -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 16 16">
                  <path
                    d="M8 0a8 8 0 1 0 8 8A8.009 8.009 0 0 0 8 0zM4.285 12.433l-.865-.5L2.5 11l-.5-.866-.5-.866-.134-.865-.001-.866L1.5 6h1l.134.866.001.866L2.5 8l.134.866.001.866.5.866.5.866.865.5zm7.43 0l.865-.5.5-.866.5-.866.134-.866.001-.866L13.5 8l-.134-.866-.001-.866L13.5 6h-1l-.134.866-.001.866L12.5 8l-.134.866-.001.866-.5.866-.5.866-.865.5zM8 14a6 6 0 1 1 6-6 6.007 6.007 0 0 1-6 6z" />
                </svg>
              </div>
              <select class="form-control" required>
                <option value="">Choose country</option>
                <option value="in">India</option>
                <option value="us">United States</option>
                <option value="gb">United Kingdom</option>
                <option value="ca">Canada</option>
                <option value="au">Australia</option>
              </select>
            </div>

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
            <!-- Password -->
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

            <!-- Bio -->
            <div class="mb-4 position-relative w-100 d-flex justify-content-center ps-0">
              <textarea class="form-control ps-2" placeholder="Bio" rows="2"></textarea>
            </div>

            <!-- Phone -->
            <div class="mb-4 position-relative w-100 d-flex justify-content-center">
              <div class="i_icon position-absolute text-white d-flex align-items-center justify-content-center top-0 bottom-0 m-auto rounded-circle">
                <!-- SVG Phone -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 16 16">
                  <path
                    d="M3.654 1.328a.678.678 0 0 1 .737-.183l2.52.84a.678.678 0 0 1 .415.546l.254 1.77a.678.678 0 0 1-.198.553L6.1 6.107a11.88 11.88 0 0 0 4.193 4.193l1.253-1.282a.678.678 0 0 1 .553-.198l1.77.254a.678.678 0 0 1 .546.415l.84 2.52a.678.678 0 0 1-.183.737l-1.528 1.528a1.745 1.745 0 0 1-1.745.414C7.482 13.58 2.42 8.518 1.114 3.072a1.745 1.745 0 0 1 .414-1.745z" />
                </svg>
              </div>
              <input type="number" class="form-control" placeholder="Enter your Mobile Number (optional)">
            </div>

            <!-- Checkbox -->
            <div class="form-check text-start mb-4">
              <input class="form-check-input" type="checkbox" id="termsCheck">
              <label class="form-check-label small" for="termsCheck">
                I agree with <a href="#" class="text-green text-decoration-none">Term and conditions</a> and
                <a href="#" class="text-green text-decoration-none">Privacy policy</a>
              </label>
            </div>

            <!-- Sign Up -->
            <button type="submit" class="bg_gradient font-18 button_large text-white fw-bold border-0">
              Sign Up
            </button>
          </form>

          <!-- Divider -->
          <div class="divider my-4 d-flex align-items-center text-muted">
            <hr class="flex-grow-1">
            <span class="px-3 small fw-semibold">OR</span>
            <hr class="flex-grow-1">
          </div>

          <!-- Sign In -->
          <button
            class="social_btn d-flex align-items-center justify-content-center gap-2 border rounded-4 py-3 bg-white font-18">
            <!-- SVG Mail -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
              viewBox="0 0 16 16">
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217l-8 4.8-8-4.8V4zm0 1.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.383l-8 4.8-8-4.8z" />
            </svg>
            Sign In Using Email
          </button>

        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS: Profile Upload -->
  <script>
    const profileInput = document.getElementById('profileInput');
    const profileImage = document.getElementById('profileImage');
    const uploadTrigger = document.getElementById('uploadTrigger');

    uploadTrigger.addEventListener('click', () => profileInput.click());
    profileInput.addEventListener('change', function (event) {
      const file = event.target.files[0];
      if (file) profileImage.src = URL.createObjectURL(file);
    });
  </script>
  {{--  --}}
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
