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
<!-- Tabs -->
<div class="background-image">
    <img src="{{asset('/assets/images/via_background.png')}}" alt=""  width="100%" height="100%"   class="position-absolute">
     <div class="interest_section  position-relative m-auto pt-4 ">
<h3 class="font-32 text-center fw-medium">Select your interests and hobbies let everyone know what kind of traveler you are.</h3>
<h3 class="font-32 text-center text-muted mt-5">Your Interests</h3>
<div class="d-flex flex-wrap gap-3 interest_button">
    <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/adventure.png')}}" alt="" class="me-3">Adventurous</button>
    {{--  --}}
        <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/beach.png')}}" alt="" class="me-3">Beach Bum</button>
        {{--  --}}
            <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/travel1.png')}}" alt="" class="me-3">Slow Traveler</button>
    <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/onthego.png')}}" alt="" class="me-3">On the Go</button>
    {{--  --}}
    <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/hiker.png')}}" alt="" class="me-3">Hiker</button>
    {{--  --}}
    <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/health.png')}}" alt="" class="me-3">Health & Wellness</button>
    {{--  --}}
    <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/hiker.png')}}" alt="" class="me-3">Nature Lover</button>
    {{--  --}}
    <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/nature.png')}}" alt="" class="me-3">Hiker</button>
</div>
<h3 class="font-32 text-muted text-center my-5">Your Hobbies</h3>
<div class="d-flex gap-3
 flex-wrap">
 <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/Photography.png')}}" alt="" class="me-3">Photography</button>
 {{--  --}}
  <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/Gaming.png')}}" alt="" class="me-3">Gaming</button>
   {{--  --}}
  <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/Meditation.png')}}" alt="" class="me-3">Meditation</button>
   {{--  --}}
  <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/Fitness.png')}}" alt="" class="me-3">Fitness</button>
    {{--  --}}
  <button class="intrest_btn px-3 py-2 font-18"> <img src="{{asset('/assets/images/Journaling.png')}}" alt="" class="me-3">Journaling</button>
</div>
 <div class="action-buttons d-flex justify-content-center mt-4">
                    <button class="btn btn-skip px-4 py-2">Skip for now</button>
                    <button class="btn btn-continue bg_gradient text-white px-4 py-2">Continue</button>
                </div>
 </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
   {{--  --}}
  <script>
     document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".intrest_btn").forEach(function(btn) {
        btn.addEventListener("click", function () {
            this.classList.toggle("active");
        });
    });
});
  </script>

</body>

</html>
