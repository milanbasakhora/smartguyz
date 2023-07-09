<!DOCTYPE html>
<html lang="en">

<head>
    {{-- CSS --}}
    @include('frontend.layouts.css')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <!-- Navbar -->
    @include('frontend.layouts.navbar')
    
    <!-- Jumbotron -->
    @include('frontend.layouts.jumbotron')

    <!-- Welcome Message -->
    @include('frontend.layouts.welcomemessage')

    <!-- Board Members -->
    @include('frontend.layouts.boardmembers')

    <!-- Activities -->
    @include('frontend.layouts.activities')

    <!-- Members -->
    @include('frontend.layouts.members')

    <!-- Member Request -->
    @include('frontend.layouts.memberrequest')

    <!-- Footer -->
    @include('frontend.layouts.footer')

    {{-- Javascript --}}
    @include('frontend.layouts.js')

</body>

</html>
