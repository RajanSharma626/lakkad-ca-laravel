<!doctype html>
<html lang="en">

<head>
    <title>Login | Admin </title>
    @include('admin.includes.head')

</head>

<body data-sidebar="dark">

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary-subtle">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sign in to continue to Lakkad Consultancy.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-5">

                            <div class="p-2">
                                <form class="form-horizontal" action="{{ route('login.auth') }}" method="post">
                                    @csrf <!-- Add CSRF token for form security -->
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="username"
                                            placeholder="Enter Email" required>
                                        @error('email')
                                            <!-- Blade directive to show the error for 'email' -->
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Enter password" aria-label="Password"
                                                aria-describedby="password-addon" required>
                                            <button class="btn btn-light" type="button" id="password-addon">
                                                <i class="mdi mdi-eye-outline"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-check"
                                            name="remember">
                                        <label class="form-check-label" for="remember-check">Remember me</label>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="/forget-password" class="text-muted">
                                            <i class="mdi mdi-lock me-1"></i> Forgot your password?
                                        </a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <div>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Lakkad Consultancy.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.foot')

</body>

</html>
