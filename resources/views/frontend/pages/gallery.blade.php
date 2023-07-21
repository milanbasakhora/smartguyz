<!DOCTYPE html>
<html lang="en">

<head>
    {{-- css --}}
    @include('frontend.layouts.css')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <!-- Navbar -->
    @include('frontend.layouts.navbar')

    {{-- Banner Page --}}
    @foreach ($banners as $index => $banner)
        @if ($index == 0)
            <div class="page-banner overlay-dark bg-image" style="background-image: url('{{ $banner->gallery }}');">
                <div class="banner-section">
                    <div class="container text-center wow fadeInUp">
                        <nav aria-label="Breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                        <h1 class="font-weight-normal">Gallery</h1>
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
                        @foreach ($galleries as $gallery)
                        <div class="col-sm-3 py-3">
                            <div class="card-gallery">
                              <div class="header">
                                <a href="{{ $gallery->link }}" target="page" class="post-thumb">
                                  @foreach ($galleries as $index => $image)
                                    @if ($index == 0)
                                      <div class="image-container">
                                        <img src="{{ asset($gallery->image) }}" alt="">
                                        <div class="title-overlay">{{ $gallery->title }}</div>
                                      </div>
                                    @endif
                                  @endforeach
                                </a>
                              </div>
                              {{-- <div class="body">
                                <p class="post-title text-center">
                                  <a href="/blog/{{ $activity->slug }}">{{ $activity->title }}</a>
                                </p>
                              </div> --}}
                            </div>
                          </div>
                        @endforeach
                    </div> <!-- .row -->
                    <!-- Nevigation -->
                    <div class="d-flex justify-content-center">
                        {{ $galleries->links('pagination::bootstrap-4') }}
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

</html>
