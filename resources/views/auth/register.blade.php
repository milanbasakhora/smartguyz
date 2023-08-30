<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        .pattern-container {
            width: 100%;
            height: 500px; /* Adjust the height as needed */
            background-image: url('frontend/assets/img/1.jpg');
            background-size: 100%; /* Or you can use 'cover' or 'contain' for different sizing */
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: ">
        <div class="container px-5 pb-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 py-5">
              <div class="text-center pb-2">
                <a class="navbar-brand" href="/"><span><img src="/frontend/assets/img/logo.png" class="logo"
                    alt=""></span><span class="text-primary">Smart</span>&nbsp;<span style="color: black">Guyz</span></a>
              </div>
              <div class="card shadow-lg shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <div class="card-sign mb-3">
                        <div class="wrap">
                            <h1 class="text-center text-primary">Sign Up</h1>
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
                                <div class="form-group pb-1">
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
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                            </form>
                        </div>
                    </div>

                    <div class="pt-2">
                        <p>Already have an account? <a href="{{ route('login') }}">Sign In</a>. Or
                            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                        </p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @include('frontend.layouts.js')
</body>

</html>
