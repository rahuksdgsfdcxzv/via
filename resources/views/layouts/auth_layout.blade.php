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
</head>

<body>
    <div class="row login_section m-0">

        {{-- ========== Left section ========= --}}
        <div class="col-md-4 d-none d-md-flex justify-content-center align-items-center background_image">
            <div class="via_logo">
                <img src="{{asset('/assets/images/via_logo.png')}}" alt="Via Logo">
            </div>
        </div>



        @yield('content')




    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS: Profile Upload + Flag -->
    <script>
        // Profile upload preview
        const profileInput = document.getElementById('profileInput');
        const profileImage = document.getElementById('profileImage');
        const uploadTrigger = document.getElementById('uploadTrigger');

        uploadTrigger.addEventListener('click', () => profileInput.click());

        profileInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                profileImage.src = URL.createObjectURL(file);
            }
        });

        // Flag dropdown toggle
        const flagDropdown = document.getElementById('flagDropdown');
        flagDropdown.addEventListener('click', () => {
            const current = flagDropdown.querySelector('.fi');
            if (current.classList.contains('fi-in')) current.className = 'fi fi-us';
            else if (current.classList.contains('fi-us')) current.className = 'fi fi-gb';
            else if (current.classList.contains('fi-gb')) current.className = 'fi fi-ca';
            else current.className = 'fi fi-in';
        });
    </script>
</body>

</html>