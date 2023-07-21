<div class="sidebar">
    <!-- Latest Activities -->
    <div class="sidebar-block">
        <div class="sidebar-content">
            <h3 class="sidebar-title">Latest Activities</h3>
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
                                href="/blog/{{ $activity->slug }}">{{ $activity->title }}</a>
                        </h5>
                        <div class="meta">
                            <a href="#"><span
                                    class="mai-calendar"></span>{{ $activity->created_at->format('F j, Y') }}</a>
                            <a href="#"><span class="mai-person"></span>
                                {{ $company->name }}</a>
                            <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
