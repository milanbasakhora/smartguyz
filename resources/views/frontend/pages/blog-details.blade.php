<!DOCTYPE html>
<html lang="en">

<head>
    {{-- css --}}
    @include('frontend.layouts.css')
    <style>
        .cursor:hover {
            color: var(--primary);
        }

        .cursor {
            cursor: pointer
        }

        .textarea {
            resize: none
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
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
                        @foreach ($blog->activity_images as $index => $activity_image)
                            @if ($index > 0 && $index < 3)
                                <div class="post-thumb">
                                    <img src="{{ asset($activity_image->image) }}" alt="">
                                </div>
                            @endif
                        @endforeach
                    </article> <!-- .blog-details -->

                    {{-- Post Share Section --}}
                    <div class="post-share mt-5">
                        <h3>Share This</h3>
                        <div class="social-share">
                            <a href="#" onclick="sharePage(event)"><span class="mai-link"></span></a>
                            <a href="#" onclick="shareOnFacebook(event)"><span
                                    class="mai-logo-facebook-f"></span></a>
                            <a href="#" onclick="shareOnMessenger(event)"><span
                                    class="mai-logo-facebook-messenger"></span></a>
                            <a href="#" onclick="shareOnTwitter(event)"><span class="mai-logo-twitter"></span></a>
                            <a href="#" onclick="shareOnLinkedIn(event)"><span
                                    class="mai-logo-linkedin"></span></a>
                        </div>
                    </div>
                    {{-- Post Share Section End --}}

                    <!-- Comment Post Section -->
                    @include('frontend.components.comment')
                    {{-- Post Comment Section End --}}

                    {{-- Show Comments --}}
                    @include('frontend.components.show-comments')
                    {{-- Show Comments End --}}
                </div>

                <div class="col-lg-4">

                    {{-- New Activities --}}
                    @include('frontend.components.newactivities')
                    {{-- New Activities End --}}

                    {{-- Old Activities --}}
                    @include('frontend.components.oldactivities')
                    {{-- Old Activities End --}}

                    {{-- Paragraph --}}
                    @include('frontend.components.paragraph')
                    {{-- Paragraph End --}}
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->
    <!-- footer -->
    @include('frontend.layouts.footer')

    {{-- js --}}
    @include('frontend.layouts.js')
</body>
<!-- Your HTML code here -->

<script>
    $(document).ready(function() {
        // When the "Comment" icon is clicked, toggle the visibility of the comment form
        $(".comment-icon").on("click", function() {
            $(".comment-form").toggle(); // Toggles the visibility of the comment form
        });

        // Handle the "Comment" button inside the comment form
        $(".comment-form button[type='button']").on("click", function() {
            // Here, you can add the logic to submit the comment form to your server
            // For simplicity, let's just hide the comment form when the "Comment" button is clicked
            $(".comment-form").hide();
        });
    });
</script>

</html>
