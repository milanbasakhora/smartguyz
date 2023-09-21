<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta tags and title --}}
    @include('frontend.layouts.metaXtitle')
    {{-- css --}}
    @include('frontend.layouts.css')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <!-- Navbar -->
    @include('frontend.layouts.navbar')

    {{-- Page Banner --}}
    @foreach ($banners as $index => $banner)
        @if ($index == 0)
            <div class="page-banner overlay-dark bg-image" style="background-image: url('{{ $banner->terms }}');">
                <div class="banner-section">
                    <div class="container text-center wow fadeInUp">
                        <nav aria-label="Breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Terms and Conditions</li>
                            </ol>
                        </nav>
                        <h1 class="font-weight-normal">{{ $terms->title }}</h1>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    {{-- page section --}}
    <!-- Terms & Conditions -->
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <div class="text-center text-lg">
                        <p>{!! $terms->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- page section end --}}

    {{-- Footer --}}
    @include('frontend.layouts.footer')

    {{-- js --}}
    @include('frontend.layouts.js')

</body>

</html>
