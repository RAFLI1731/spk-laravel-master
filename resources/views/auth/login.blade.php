<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('dashTemplate/template') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('dashTemplate/template') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('dashTemplate/template') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('dashTemplate/template') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  {{-- <link rel="shortcut icon" href="{{ asset('dashTemplate/template') }}/images/favicon.png" /> --}}

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>


<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo" style="text-align: center">
                <img src="{{ asset('dashTemplate/template') }}/images/smart.png" alt="logo">
              </div>
              <h5 class="font-weight-light">Login untuk Memulai</h5>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group">
                            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">{{ __('Login') }}</button>
                        </div>

                        <div class="my-2 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input" >
                                    {{ __('Remember Me') }}
                            </label>
                        </div>

                        {{-- @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="auth-link text-black">{{ __('Lupa Password?') }}</a>
                        @endif --}}
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                        Belum Punya Akun? <a href="{{ route('register') }}" class="text-primary">Register</a>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('dashTemplate/template') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('dashTemplate/template') }}/js/off-canvas.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/template.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/settings.js"></script>
  <script src="{{ asset('dashTemplate/template') }}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
