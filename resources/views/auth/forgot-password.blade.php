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
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="text-center pb-2">
                <a class="navbar-brand" href="/"><span><img src="/frontend/assets/img/logo.png" class="logo"
                    alt=""></span><span class="text-primary">Smart</span>&nbsp;<span style="color: black">Guyz</span></a>
              </div>
              <div class="card shadow-lg shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <h5 class="text-grey pb-2">Forgot Your Password?</h5>
                    <p class="text-grey">Let us know your email address and we will email you a password reset link
                        that will allow you to choose a new one.</p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" placeholder="Email address" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @include('frontend.layouts.js')
</body>

</html>
