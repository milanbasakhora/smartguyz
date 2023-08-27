<div class="py-4">
    <div>
        <h5 class="fg-primary">Update Password</h5>
        <p>Ensure your account is using a long, random password to stay secure.</p>
    </div>

    <form class="mt-4" method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="current_password">Current Password</label>
            <div class="password-input">
                <input type="password" class="form-control" id="current_password" name="current_password"
                    autofocus autocomplete="current-password">
                <i class="toggle-password mai-eye-off-outline" data-target="current_password"></i>
            </div>
            @php
                $currentPasswordErrors = $errors->updatePassword->get('current_password');
            @endphp
            @if ($currentPasswordErrors)
                <div class="mt-2 text-danger text-sm">
                    @foreach ($currentPasswordErrors as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="new_password">New Password</label>
            <div class="password-input">
                <input type="password" class="form-control" id="new_password" name="password" autofocus
                    autocomplete="new-password">
                <i class="toggle-password mai-eye-off-outline" data-target="new_password"></i>
            </div>
            @php
                $newPasswordErrors = $errors->updatePassword->get('password');
            @endphp
            @if ($newPasswordErrors)
                <div class="mt-2 text-danger text-sm">
                    @foreach ($newPasswordErrors as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <div class="password-input">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                 autofocus autocomplete="new-password">
                <i class="toggle-password mai-eye-off-outline" data-target="password_confirmation"></i>
            </div>
            @php
                $confirmPasswordErrors = $errors->updatePassword->get('password_confirmation');
            @endphp
            @if ($confirmPasswordErrors)
                <div class="mt-2 text-danger text-sm">
                    @foreach ($confirmPasswordErrors as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

        @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Saved.') }}
            </p>
        @endif
    </form>
</div>
