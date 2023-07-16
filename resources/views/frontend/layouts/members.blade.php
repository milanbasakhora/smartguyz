<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Members</h1>

        <div class="owl-carousel wow fadeInUp" id="memberSlideshow">
            @foreach ($members as $member)
                @if ($member->status == 'active')
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="{{ $member->image }}" alt="">
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
