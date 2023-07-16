<div class="bg-light">
    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 py-3 wow fadeInUp">
                    <div class="text-grey mb-4 description">
                        {!! Str::limit($aboutus->description, 470, '') !!}
                    </div>
                    <a href="/about" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="{{ $aboutus->image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
