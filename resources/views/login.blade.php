@extends('layouts.auth_layout')

@section('content')


















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
                        <i
                            class="bi bi-envelope i_icon position-absolute text-white d-flex align-items-center justify-content-center ms-4"></i>
                        <input type="email" class="form-control" placeholder="Email address" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-3 position-relative w-100 d-flex justify-content-center">
                        <i
                            class="bi bi-lock i_icon position-absolute text-white d-flex align-items-center justify-content-center ms-4"></i>
                        <input type="password" class="form-control" placeholder="Password" required>
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
                    class="social_btn w-100 d-flex align-items-center justify-content-center gap-2 border rounded-4 py-3 bg-white font-18">
                    <img src="{{asset('/assets/images/google_logo.png')}}" alt="" width="24px
                "> Continue with Google
                </button>

                <button
                    class="social_btn w-100 d-flex align-items-center justify-content-center gap-2 border rounded-4 py-3 bg-white font-18">
                    <img src="{{asset('/assets/images/apple_logo.png')}}" alt="" width="30" height="30px"> Continue
                    with Apple
                </button>

                <button
                    class="social_btn w-100 d-flex align-items-center justify-content-center gap-2 border rounded-4 py-3 bg-white font-18">
                    <i class="bi bi-envelope fs-5"></i> Sign Up Using Email
                </button>
            </div>
        </div>
    </div>
@endsection