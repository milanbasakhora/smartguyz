<div class="py-4">
    <div>
        <h5 class="fg-primary">Profile Information</h5>
        <p>Update your account's profile information and email address.</p>
    </div>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form class="mt-4" method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name" :value="__('Name')">Name</label>
            <input type="text" class="form-control" id="name" name="name"
                value="{{ $user->name }}" required autofocus autocomplete="name">
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
                value="{{ $user->email }}" required autocomplete="username">
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
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
