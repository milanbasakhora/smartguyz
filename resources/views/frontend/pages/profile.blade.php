<!DOCTYPE html>
<html lang="en">

<head>
    {{-- css --}}
    @include('frontend.layouts.css')
</head>

<body>
    @include('sweetalert::alert')

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <!-- Navbar -->
    @include('frontend.layouts.navbar');

    {{-- <div class="pt-5">
        <div class="container">
            <h1 class="text-center pt-5">Profile</h1>
        </div>
    </div> --}}
    <div class="pt-4 text-center container">
        <h1 class="">User Profile</h1>
    </div>

    {{-- Profile Information --}}
    <div class="container">
        @include('frontend.partials.updateprofile')
    </div>

    {{-- Update Password --}}
    <div class="container">
        @include('frontend.partials.updatepassword')
    </div>

    {{-- Delete Account --}}
    <div class="container">
        @include('frontend.partials.deleteprofile')
    </div>

    <div class="pb-4"></div>

    {{-- Footer --}}
    @include('frontend.layouts.footer')

    {{-- JavaScript --}}
    @include('frontend.layouts.js')
</body>

</html>
