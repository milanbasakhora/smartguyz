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
    @foreach ($banners as $index => $banner)
        @if ($index == 0)
            <div class="page-banner overlay-dark bg-image" style="background-image: url('{{ $banner->members }}');">
                <div class="banner-section">
                    <div class="container text-center wow fadeInUp">
                        <nav aria-label="Breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Members</li>
                            </ol>
                        </nav>
                        <h1 class="font-weight-normal">Our Members</h1>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    <!-- page section -->
    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        @foreach ($members as $member)
                            @if ($member->status == 'active')
                                <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                                    <div class="card-doctor">
                                        <div class="header">
                                            <img src="{{ $member->image }}" alt="">
                                            <div class="meta">
                                                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                                                <a href="#"><span
                                                        class="mai-logo-instagram"></span></a>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <p class="text-xl mb-0">{{ $member->name }}</p>
                                            <span class="text-sm text-grey">Member</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Become a Member -->
    @include('frontend.layouts.memberrequest')

    {{-- Footer --}}
    @include('frontend.layouts.footer')

    {{-- js --}}
    @include('frontend.layouts.js')

</body>

</html>
