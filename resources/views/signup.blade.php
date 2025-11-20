@extends('layouts.auth_layout')

@section('content')
  <div class="right_section text-center p-3">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Star_icon-72a7cf.svg" height="40" alt="Star">
    <h3 class="mt-3 mb-4">Create an account</h3>

    <!-- Profile Upload -->
    <div class="profile-upload mb-4">
      <img id="profileImage" src="https://via.placeholder.com/90" alt="Profile">
      <i class="bi bi-camera-fill camera-icon" id="uploadTrigger"></i>
      <input type="file" id="profileInput" accept="image/*" hidden>
    </div>

    <form>
      <!-- Name -->
      <div class="mb-3 position-relative">
        <i class="bi bi-person i_icon position-absolute"></i>
        <input type="text" class="form-control" placeholder="Enter your name" required>
      </div>

      <!-- Country -->
      <div class="mb-3 position-relative">
        <i class="bi bi-geo-alt i_icon position-absolute"></i>
        <select class="form-control">
          <option selected disabled>Choose country</option>
          <option>India</option>
          <option>United States</option>
          <option>United Kingdom</option>
          <option>Canada</option>
        </select>
      </div>

      <!-- Email -->
      <div class="mb-3 position-relative">
        <i class="bi bi-envelope i_icon position-absolute"></i>
        <input type="email" class="form-control" placeholder="Email address" required>
      </div>

      <!-- Password -->
      <div class="mb-3 position-relative">
        <i class="bi bi-lock i_icon position-absolute"></i>
        <input type="password" class="form-control" placeholder="Password" required>
      </div>

      <!-- Bio -->
      <div class="mb-3">
        <textarea class="form-control" placeholder="Bio" rows="2"></textarea>
      </div>

      <!-- Phone Input -->
      <div class="mb-3 phone-container">
        <div class="flag-dropdown" id="flagDropdown">
          <span class="fi fi-in"></span>
          <i class="bi bi-caret-down-fill small"></i>
        </div>
        <input type="tel" class="form-control phone-input" placeholder="Enter your number (Optional)">
      </div>

      <!-- Checkbox -->
      <div class="form-check text-start mb-3">
        <input class="form-check-input" type="checkbox" id="termsCheck">
        <label class="form-check-label small" for="termsCheck">
          I agree with <a href="#" class="text-green text-decoration-none">Term and conditions</a> and
          <a href="#" class="text-green text-decoration-none">Privacy policy</a>
        </label>
      </div>

      <!-- Sign Up -->
      <button type="submit" class="btn text-white fw-semibold bg_gradient">Sign Up</button>

      <!-- Divider -->
      <div class="divider my-4 d-flex align-items-center text-muted">
        <hr class="flex-grow-1">
        <span class="px-3 small fw-semibold">OR</span>
        <hr class="flex-grow-1">
      </div>

      <!-- Sign In -->
      <button class="social_btn w-100 d-flex align-items-center justify-content-center gap-2 bg-white font-18">
        <i class="bi bi-envelope fs-5"></i> Sign In Using Email
      </button>
    </form>
  </div>
@endsection