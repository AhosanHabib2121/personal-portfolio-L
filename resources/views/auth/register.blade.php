<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminto/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2022 17:11:37 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Register & Signup Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('deshboard-file')}}/images/favicon.ico">

		<!-- App css -->

		<link href="{{asset('deshboard-file')}}/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

		<!-- icons -->
		<link href="{{asset('deshboard-file')}}/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center">
                            <a href="index.html">
                                <img src="{{asset('deshboard-file')}}/images/logo-dark.png" alt="" height="22" class="mx-auto">
                            </a>
                            <p class="text-muted mt-2 mb-4">Sign up your account</p>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">

                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Register</h4>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input class="form-control" type="text" id="fullname"  name="name" value="{{ old('name') }}" placeholder="Enter your name">
                                        @if($errors->has('name'))
                                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                                        @if($errors->has('email'))
                                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                        @if($errors->has('password'))
                                            <div class="error text-danger">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="password-confirm" class="form-label">Confirm Password</label>
                                        <input class="form-control" type="password" id="password-confirm" name="password_confirmation" placeholder="Enter your confirm password">
                                        @if($errors->has('password_confirmation'))
                                            <div class="error text-danger">{{ $errors->first('password_confirmation') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Sign Up </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account?  <a href="{{route('login')}}" class="text-dark ms-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor -->
        <script src="{{asset('deshboard-file')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/feather-icons/feather.min.js"></script>

        <!-- App js -->
        <script src="{{asset('deshboard-file')}}/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2022 17:11:37 GMT -->
</html>
