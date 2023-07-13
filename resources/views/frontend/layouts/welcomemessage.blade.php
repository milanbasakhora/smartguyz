<div class="bg-light">
    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Welcome to Smart Guyz <br> Team</h1>
                    <p class="text-grey mb-4">{!! Str::limit($aboutus->description, 700, '...') !!}</p>
                    <a href="/about" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="{{ $aboutus->image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
