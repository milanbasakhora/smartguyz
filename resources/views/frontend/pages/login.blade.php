<!DOCTYPE html>
<html lang="en">

<head>
    {{-- css --}}
    @include('frontend.layouts.css')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <!-- Navbar -->
    @include('frontend.layouts.navbar');

    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card-sign mb-3">
                        <div class="wrap">
                            <h1 class="text-center fg-primary">Sign In</h1>
                            <form class="mt-4" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    @php
                                        $emailErrors = $errors->get('email');
                                    @endphp
                                    @if ($emailErrors)
                                        <div class="mt-2 text-danger text-sm">
                                            @foreach ($emailErrors as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    @php
                                        $passwordErrors = $errors->get('password');
                                    @endphp
                                    @if ($passwordErrors)
                                        <div class="mt-2 text-danger text-sm">
                                            @foreach ($passwordErrors as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </form>
                        </div>
                    </div>

                    <p>Don't have an account? <a href="/user-register">Sign Up</a>. Or
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('frontend.layouts.footer')

    {{-- JavaScript --}}
    @include('frontend.layouts.js')
</body>

</html>
