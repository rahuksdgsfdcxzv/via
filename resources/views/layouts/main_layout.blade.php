<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create trip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- dm-sarif -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

    <!--  -->
</head>

<body>
    <nav class="">
        <div class="row m-0">
            <div class="col-12 px-5  d-flex justify-content-between align-items-center  py-2 border-bottom-2px-555">
                <div class="header-logo d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/images/via_star.png') }}" class="w-55">
                    <h2 class="font-dm clr-555  mb-0">via</h2>
                </div>
                <div class="header-create d-flex align-items-center gap-4">
                    <button class="sidebar-toggle d-lg-none" id="sidebarToggle">
    <!-- SVG ICON -->
    <svg width="28" height="28" viewBox="0 0 24 24">
        <path d="M4 6h16M4 12h16M4 18h16" 
              stroke="#000" stroke-width="2" stroke-linecap="round"/>
    </svg>
</button>
                    <div class="Add-create d-flex align-items-center gap-2">
                        <img src="{{ asset('assets/images/create_add.png') }}" alt="" class="wh-24 ">
                        <p class=" mb-0 font-poppins clr-555">create</p>
                    </div>

                    <div
                        class="user-nav background-clr-pink wh-46 rounded-100 d-flex align-items-center justify-content-center  border-white">
                        <h4 class="text-white  mb-0">A</h4>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--  -->
    <div class="row m-0">
        @include('layouts.sidebar')
        <div class="main_content px-4  py-4"> 
        @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script>
        const uploadInput = document.getElementById('uploadInput');
        const uploadBox = document.getElementById('uploadBox');
        const imageContainer = document.getElementById('imagePreviewContainer');
        const countText = document.getElementById('countText');
        const maxText = document.getElementById('maxText'); // direct reference
        const maxImages = 5;

        // hide "count" text at start
        countText.style.display = 'none';

        uploadBox.addEventListener('click', () => uploadInput.click());

        uploadInput.addEventListener('change', function () {
            const files = Array.from(this.files);
            const currentImages = imageContainer.querySelectorAll('.preview-img').length;

            if (currentImages + files.length > maxImages) {
                alert(`You can upload up to ${maxImages} images.`);
                this.value = '';
                return;
            }

            files.forEach(file => {
                if (!file.type.startsWith('image/')) return;

                const reader = new FileReader();
                reader.onload = e => {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('preview-img', 'mt-3');
                    imageContainer.insertBefore(img, uploadBox);
                    updateCount();
                };
                reader.readAsDataURL(file);
            });

            this.value = '';
        });

        function updateCount() {
            const count = imageContainer.querySelectorAll('.preview-img').length;
            countText.textContent = `${count}/${maxImages} Photos Uploaded`;

            if (count > 0) {
                countText.style.display = 'block';
                maxText.style.display = 'none';
            } else {
                countText.style.display = 'none';
                maxText.style.display = 'block';
            }
        }


    </script>
     <!-- backbutton -->
      <script>
        document.getElementById("backBtn").addEventListener("click", function () {
    if (window.history.length > 1) {
        window.history.back();
    } else {
        window.location.href = "/"; // fallback home
    }
});

        </script>

        <!-- sidebar -->
         <script>
    const toggleBtn = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');

    toggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });
</script>

</body>

</html>