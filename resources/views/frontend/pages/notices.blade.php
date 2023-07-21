<!DOCTYPE html>
<html lang="en">

<head>
    {{-- css --}}
    @include('frontend.layouts.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <!-- Navbar -->
    @include('frontend.layouts.navbar')

    {{-- Banner Section --}}
    @foreach ($banners as $index => $banner)
        @if ($index == 0)
            <div class="page-banner overlay-dark bg-image" style="background-image: url('{{ $banner->notice }}');">
                <div class="banner-section">
                    <div class="container text-center wow fadeInUp">
                        <nav aria-label="Breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Notices</li>
                            </ol>
                        </nav>
                        <h1 class="font-weight-normal">Notices</h1>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    {{-- Page Section Start --}}
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($notices as $notice)
                            <div class="col-sm-3 py-3">
                                <div class="card-gallery">
                                    <div class="header">
                                        <a href="{{ asset($notice->image) }}" data-lightbox="image-gallery"
                                            class="post-thumb">
                                            <div class="image-container">
                                                <img src="{{ asset($notice->image) }}" alt="">
                                                <div class="title-overlay">{{ $notice->title }}</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- .row -->
                    <!-- Nevigation -->
                    <div class="d-flex justify-content-center">
                        {{ $notices->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div>
    {{-- Page Section End --}}


    {{-- Footer --}}
    @include('frontend.layouts.footer')

    {{-- js --}}
    @include('frontend.layouts.js')

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<script>
    lightbox.option({
        'resizeDuration': 0,
        'wrapAround': true
    });
    // Add close button functionality
    var lightboxCloseButton = document.createElement('div');
    lightboxCloseButton.innerHTML = 'X';
    lightboxCloseButton.classList.add('close-button');
    lightboxCloseButton.addEventListener('click', function() {
        lightbox.close();
    });
    document.querySelector('.lb-outerContainer').appendChild(lightboxCloseButton);
</script>

</html>
