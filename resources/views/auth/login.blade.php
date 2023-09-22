<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                            <h1 class="text-primary text-center">Sign In</h1>
                            <form class="mt-4" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
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
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                            </form>
                        </div>
                    </div>

                    <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a>. Or
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @include('frontend.layouts.js')
</body>

</html>
