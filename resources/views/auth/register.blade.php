@extends('layouts.auth')

@section('body')
    <section class="container h-100">
        <div class="row justify-content-sm-center h-100 align-items-center mt-2">
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h1 class="fs-4 text-center fw-bold mb-4">Register</h1>
                        <h1 class="fs-6 mb-3 text-center">Register to Zenify Academy</h1>
                        <form method="POST" aria-label="abdul" data-id="abdul" class="needs-validation" novalidate=""
                            autocomplete="off" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Full Name</label>
                                <div class="input-group input-group-join mb-3">
                                    <input type="text" placeholder="Enter Your Name" class="form-control @error('name') is-invalid @enderror" name="name"
                                        id="name" value="{{ old('name') }}" required autofocus>
                                    <span class="input-group-text rounded-end">&nbsp<i class="fa fa-user"></i>&nbsp</span>
                                    <div class="invalid-feedback">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <div class="input-group input-group-join mb-3">
                                    <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" required autofocus>
                                    <span class="input-group-text rounded-end">&nbsp<i
                                            class="fa fa-envelope"></i>&nbsp</span>
                                    <div class="invalid-feedback">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-join mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Your password" id="password"
                                        name="password" required>
                                    <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                            class="fa fa-eye"></i>&nbsp</span>
                                    <div class="invalid-feedback">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password-confirm">Confirm Password</label>
                                </div>
                                <div class="input-group input-group-join mb-3">
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Your Password"
                                        id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                    <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i
                                            class="fa fa-eye"></i>&nbsp</span>
                                    <div class="invalid-feedback">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input" required>
                                    <label for="remember" class="form-check-label">I agree to <a href="#">terms and
                                            conditions</a></label>
                                </div>
                                <button type="submit" class="btn btn-primary ms-auto">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Already have an account? <a href="{{ route('login') }}" class="text-dark">Login instead</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2 text-muted">
                    Copyright &copy; 2023
                </div>
            </div>
        </div>
    </section>
@endsection
