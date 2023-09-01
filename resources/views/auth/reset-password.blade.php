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
            height: 500px;
            /* Adjust the height as needed */
            background-image: url('frontend/assets/img/1.jpg');
            background-size: 100%;
            /* Or you can use 'cover' or 'contain' for different sizing */
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: ">
        <div class="container px-5 pb-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 py-5">
                    <div class="text-center pb-2">
                        <a class="navbar-brand" href="/"><span><img src="/frontend/assets/img/logo.png"
                                    class="logo" alt=""></span><span
                                class="text-primary">Smart</span>&nbsp;<span style="color: black">Guyz</span></a>
                    </div>
                    <div class="card shadow-lg shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <h5 class="text-grey pb-2 text-center">Reset Your Password</h5>
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- Email Address -->
                                <div>
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        value="{{ old('email', $request->email) }}" required autofocus
                                        autocomplete="username">
                                    @if ($errors->has('email'))
                                        <div class="mt-2 text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control" type="password" name="password"
                                        required autocomplete="new-password">
                                    @if ($errors->has('password'))
                                        <div class="mt-2 text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password">
                                    @if ($errors->has('password_confirmation'))
                                        <div class="mt-2 text-danger">{{ $errors->first('password_confirmation') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit"
                                        class="btn btn-primary">
                                        Reset Password
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
