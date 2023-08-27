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
                            <h1 class="text-center fg-primary">Sign Up</h1>
                            <form class="mt-4" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" :value="__('Name')">Name</label>
                                    <input type="name" class="form-control" id="name" name="name"
                                        :value="old('name')" required autofocus autocomplete="name">
                                    @php
                                        $nameErrors = $errors->get('name');
                                    @endphp
                                    @if ($nameErrors)
                                        <div class="mt-2 text-danger text-sm">
                                            @foreach ($nameErrors as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        :value="old('email')" required autocomplete="username">
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
                                    <label for="password" :value="__('Password')">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required
                                        autocomplete="new-password">
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
                                <div class="form-group">
                                    <label for="password_confirmation" :value="__('Confirm Password')">Confirm
                                        Password</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" required autocomplete="new-password">
                                    @php
                                        $passwordConfirmationErrors = $errors->get('password_confirmation');
                                    @endphp
                                    @if ($passwordConfirmationErrors)
                                        <div class="mt-2 text-danger text-sm">
                                            @foreach ($passwordConfirmationErrors as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </form>
                        </div>
                    </div>

                    <p>Already have an account? <a href="/user-login">Sign In</a>. Or
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
