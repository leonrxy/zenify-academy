@extends('layouts.auth')

@section('body')
    <section class="container h-100">
        <div class="row justify-content-sm-center h-100 align-items-center">
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h1 class="fs-4 text-center fw-bold mb-4">Login Zenify Academy</h1>
                        <h1 class="fs-6 mb-3">Please enter your email and password to log in.</h1>
                        <form method="POST" action="{{ route('login') }}" aria-label="abdul" data-id="abdul"
                            class="needs-validation" novalidate="" autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <div class="input-group input-group-join mb-3">
                                    <input id="email" type="email" placeholder="Enter Email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autofocus>
                                    <span class="input-group-text rounded-end">&nbsp<i
                                            class="fa fa-envelope"></i>&nbsp</span>
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                    <a href="forgot.html" class="float-end">
                                        Forgot Password?
                                    </a>
                                </div>
                                <div class="input-group input-group-join mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="password" placeholder="Your password" required
                                        autocomplete="current-password">
                                    <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                            class="fa fa-eye" onclick="togglePassword()"></i>&nbsp</span>
                                    @error('password')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary ms-auto">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                        <div class="text-center mb-2 mt-3">&mdash; OR &mdash;</div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary icon-left" type="button"><i class="fab fa-facebook"></i>
                                Login with Facebook</button>
                            <button class="btn btn-danger icon-left" type="button"><i class="fab fa-google"></i> Login
                                with Google</button>
                        </div>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Don't have an account yet? <a href="{{ url('register') }}" class="text-dark">Create an
                                account</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2023
                </div>
            </div>
        </div>
    </section>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var eyeIcon = document.querySelector('.password i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.className = 'fa fa-eye-slash';
            } else {
                passwordInput.type = 'password';
                eyeIcon.className = 'fa fa-eye';
            }
        }
    </script>
@endsection
