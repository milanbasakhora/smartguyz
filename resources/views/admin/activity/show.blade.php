<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <a href="{{ route('activity.index') }}" class="btn btn-primary btn-sm"><i
                                class="fa-solid fa-arrow-left"></i> Go Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($activities as $activity)
                                <div class="col-md-12">
                                    <h5>{{ $activity->title }}</h5>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach ($activity->activity_images as $activity_image)
                                            <div class="col-md-4">
                                                <img src="{{ asset($activity_image->image) }}" class="img-fluid "
                                                    width="250px" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {!! $activity->description !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
