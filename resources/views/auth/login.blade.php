<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @include('include.style')
</head>

<body>
    <div id="auth">

        <!-- Section: Design Block -->
        <section class="vh-200" style="background-color: #666767;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 5rem;">
                    <div class="row g-0">
                      <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="template/assets/images/auth/log.jpg"
                          alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                <div class="card-body py-3 px-md-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Log In now</h2>

                            <form method="POST" action="{{ route('login.store') }}">
                                @csrf

                                @if (session()->has('loginError'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="text" id="email" name="email"
                                        class="form-control @error('name') is invalid

                            @enderror form-control-xl"
                                        placeholder="Email">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    @error('name')
                                        <small class="btn btn-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="password" id="password" name="password"
                                        class="form-control @error('password') is invalid

                            @enderror form-control-xl"
                                        placeholder="Password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                    @error('password')
                                        <small class="btn btn-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-check form-check-lg d-flex align-items-end">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                        Keep me logged in
                                    </label>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                            </form>
                            <div class="text-center mt-5 text-lg fs-4">
                                <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}"
                                        class="font-bold">Sign
                                        up</a>.</p>
                                <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</body>

</html>
