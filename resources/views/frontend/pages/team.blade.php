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
    @include('frontend.layouts.navbar')

    {{-- page banner --}}
    <div class="page-banner overlay-dark bg-image" style="background-image: url(../frontend/assets/img/8.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Team</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Our Team</h1>
            </div>
        </div>
    </div>

    <!-- page section -->
    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        @foreach ($boardmembers as $boardmember)
                            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                                <div class="card-doctor">
                                    <div class="header">
                                        <img src="{{ $boardmember->image }}" alt="">
                                        <div class="meta">
                                            <a href="tel:{{ $boardmember->contact }}"><span class="mai-call"></span></a>
                                            <a href="https://wa.me/{{ $boardmember->contact }}"><span class="mai-logo-whatsapp"></span></a>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p class="text-xl mb-0">{{ $boardmember->name }}</p>
                                        <span class="text-sm text-grey">{{ $boardmember->designation }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Become a Member -->
    {{-- @include('frontend.layouts.memberrequest') --}}

    {{-- Footer --}}
    @include('frontend.layouts.footer')

    {{-- js --}}
    @include('frontend.layouts.js')

</body>

</html>
