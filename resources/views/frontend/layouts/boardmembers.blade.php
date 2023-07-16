<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Board Members</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach ($boardmembers as $boardmember)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="{{ $boardmember->image }}" alt="">
                            <div class="meta">
                                <a href="tel:{{ $boardmember->contact }}"><span class="mai-call"></span></a>
                                <a href="https://wa.me/{{ $boardmember->contact }}"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{ $boardmember->name }}</p>
                            <span class="text-sm text-grey">{{ $boardmember->designation }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
