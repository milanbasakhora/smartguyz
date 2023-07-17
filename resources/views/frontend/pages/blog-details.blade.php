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
    <!-- main page -->
    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div> <!-- .row -->

            <div class="row">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="post-thumb">
                            @foreach ($blog->activity_images as $index => $activity_image)
                                @if ($index == 0)
                                    <img src="{{ asset($activity_image->image) }}" alt="">
                                @endif
                            @endforeach
                        </div>
                        <div class="post-meta">
                            <div class="post-author">
                                <span class="text-grey">By</span> <a href="#">{{ $company->name }}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-date">
                                <a href="#">{{ $blog->created_at->format('F j, Y') }}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-comment-count">
                                <a href="#">8 Comments</a>
                            </div>
                        </div>
                        <h2 class="post-title h1">{{ $blog->title }}</h2>
                        <div class="post-content">
                            <p>{!! $blog->description !!}</p>
                        </div>
                        <div class="post-thumb">
                            @foreach ($blog->activity_images as $index => $activity_image)
                                @if ($index == 1)
                                    <img src="{{ asset($activity_image->image) }}" alt="">
                                @endif
                            @endforeach
                        </div>
                        <div class="post-thumb">
                            @foreach ($blog->activity_images as $index => $activity_image)
                                @if ($index == 2)
                                    <img src="{{ asset($activity_image->image) }}" alt="">
                                @endif
                            @endforeach
                        </div>
                    </article> <!-- .blog-details -->

                    <!-- Comment Section -->
                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="">
                            <div class="form-row form-group">
                                <div class="col-md-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- Newest Activities -->
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Latest Activities</h3>
                            @foreach ($activities as $activity)
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
    </div> <!-- .page-section -->
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
