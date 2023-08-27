<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <button type="button" class="close" id="closeLoginModal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="p-4">
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
                            <div class="pt-4">
                                <p>Don't have an account? <a href="#" id="openRegisterModal">Sign Up</a>. Or
                                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
