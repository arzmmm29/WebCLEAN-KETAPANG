<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Cleaning Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/admin-assets/assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="{{ url('/') }}/admin-assets/assets/js/config.js"></script>

    <!-- App css -->
    <link href="{{ url('/') }}/admin-assets/assets/css/app.min.css" rel="stylesheet" type="text/css"
        id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('/') }}/admin-assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg pb-0">

    <div class="auth-fluid">

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    </div>
                </div>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->

        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">

            <div class="card-body d-flex flex-column h-100 gap-3">

                @if (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif

                <div class="my-auto">
                    <!-- title-->
                    <h1 style="height: 100px" class="text-center">  Login</h1>
                    <!-- form -->
                    <form action="{{ url('Login') }}" method="POST">
                        @csrf
                        <div ="mb-3">
                            <label for="emailaddress" class="form-label">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email"
                                type="email" id="emailaddress" required placeholder="Enter your email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" name="password"
                                type="password" required id="password" placeholder="Enter your password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid mb-0 text-center">
                            <button class="btn btn-primary" type="submit"><i class="ri-login-box-line"></i> Log In
                            </button>
                        </div>
                        <!-- social-->
                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Don't have an account? <a href="{{ url('Register') }}"
                            class="text-muted ms-1"><b>Sign Up</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->
    </div>
    <!-- end auth-fluid-->
    <!-- Vendor js -->
    <script src="{{ url('/') }}/admin-assets/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/admin-assets/assets/js/app.min.js"></script>

</body>

</html>
