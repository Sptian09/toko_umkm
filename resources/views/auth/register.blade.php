<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                        <img src="template/assets/images/auth/regis.jpg"
                          alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                <div class="card-body py-5 px-md-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Sign up now</h2>

                            <form method="POST" action="{{ route('register.store') }}">
                                @csrf

                                <div class="row">


                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" id="name" name="name"
                                            class="form-control @error('name') is invalid @enderror form-control-xl"
                                            placeholder="Username">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        @error('name')
                                            <small class="btn btn-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" id="email" name="email"
                                            class="form-control @error('email') is invalid @enderror form-control-xl"
                                            placeholder="Email">
                                        <div class="form-control-icon">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        @error('email')
                                            <small class="btn btn-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is invalid @enderror form-control-xl"
                                            placeholder="Password">
                                        <div class="form-control-icon">
                                            <i class="bi bi-shield-lock"></i>
                                        </div>
                                        @error('password')
                                            <small class="btn btn-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</body>

</html>
