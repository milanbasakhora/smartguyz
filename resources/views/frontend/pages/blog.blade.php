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

    <!-- Banner Image -->
    @foreach ($banners as $index => $banner)
        @if ($index == 0)
            <div class="page-banner overlay-dark bg-image" style="background-image: url('{{ $banner->blog }}');">
                <div class="banner-section">
                    <div class="container text-center wow fadeInUp">
                        <nav aria-label="Breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                        <h1 class="font-weight-normal">Our Activities</h1>
                    </div> <!-- .container -->
                </div> <!-- .banner-section -->
            </div> <!-- .page-banner -->
        @endif
    @endforeach

    <!-- page-section -->
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($activities as $activity)
                            <div class="col-sm-6 py-3">
                                <div class="card-blog">
                                    <div class="header">
                                        <a href="/blog/{{ $activity->slug }}" class="post-thumb">
                                            @foreach ($activity->activity_images as $index => $activity_image)
                                                @if ($index == 0)
                                                    <img src="{{ asset($activity_image->image) }}" alt="">
                                                @endif
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="body">
                                        <h5 class="post-title"><a
                                                href="/blog/{{ $activity->slug }}">{{ $activity->title }}</a></h5>
                                        <div class="site-info">
                                            <div class="avatar mr-2">
                                                <div class="avatar-img">
                                                    <img src="{{ asset($company->logo) }}" alt="">
                                                </div>
                                                <span>{{ $company->name }}</span>
                                            </div>
                                            <span class="mai-time"></span> {{ $activity->created_at->format('F j, Y') }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- .row -->
                    <!-- Nevigation -->
                    <div class="d-flex justify-content-center">
                        {{ $activities->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- Oldest Activities -->
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Oldest Activities</h3>
                            @foreach ($newactivities as $activity)
                                <div class="blog-item">
                                    <a class="post-thumb" href="/blog/{{ $activity->slug }}">
                                        @foreach ($activity->activity_images as $index => $activity_image)
                                            @if ($index == 0)
                                                <img src="{{ asset($activity_image->image) }}" alt="">
                                            @endif
                                        @endforeach
                                    </a>
                                    <div class="content">
                                        <h5 class="post-title"><a
                                                href="/blog/{{ $activity->slug }}">{{ $activity->title }}</a></h5>
                                        <div class="meta">
                                            <a href="#"><span
                                                    class="mai-calendar"></span>{{ $activity->created_at->format('F j, Y') }}</a>
                                            <a href="#"><span class="mai-person"></span> {{ $company->name }}</a>
                                            <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div>
    <style>
        .sidebar {
            height: 90vh;
            overflow-y: auto;
        }
    </style>

    <!-- footer -->
    @include('frontend.layouts.footer')

    {{-- js --}}
    @include('frontend.layouts.js')

</body>

</html>
