<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <button type="button" class="close" id="closeRegisterModal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="p-4">
                            <h1 class="text-center fg-primary">Sign Up</h1>
                            <form class="mt-4" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" value="__('Name')">Name</label>
                                    <input type="name" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}" required autofocus autocomplete="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required autocomplete="username">
                                </div>
                                <div class="form-group">
                                    <label for="password" value="__('Password')">Password</label>
                                    <div class="password-input">
                                        <input type="password" class="form-control" id="registerPassword" name="new-password" required
                                        autocomplete="new-password">
                                        <i class="toggle-password mai-eye-off-outline"
                                        data-target="registerPassword"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" value="__('Confirm Password')">Confirm
                                        Password</label>
                                    <div class="password-input">
                                        <input type="password" class="form-control" id="registerpassword_confirmation"
                                        name="password_confirmation" required autocomplete="new-password">
                                        <i class="toggle-password mai-eye-off-outline"
                                            data-target="registerpassword_confirmation"></i>
                                    </div>
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
                            <div class="pt-4">
                                <p>Already have an account?
                                    <a href="#" id="openLoginModalFromRegister">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
