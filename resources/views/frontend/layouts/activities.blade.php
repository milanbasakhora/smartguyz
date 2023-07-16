<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Our Activities</h1>
        <div class="row mt-5">
            @foreach ($activities as $index=>$activity)
            @if ($index < 3)
            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                        </div>
                        @foreach ($activity->activity_images as $imageIndex=>$activity_image)
                        @if ($imageIndex==1)
                        <a href="/blog/{{ $activity->slug }}" class="post-thumb">
                            <img src="{{ asset($activity_image->image) }}" alt="">
                        </a>
                        @endif
                        @endforeach
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="/blog/{{ $activity->slug }}">{{ $activity->title }}</a></h5>
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
            @endif
            @endforeach

            <div class="col-12 text-center mt-4 wow zoomIn">
                <a href="/blog" class="btn btn-primary">Read More</a>
            </div>

        </div>
    </div>
</div>
