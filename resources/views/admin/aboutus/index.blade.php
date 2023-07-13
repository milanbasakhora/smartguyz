<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>About Us</h5>
                @if (empty($aboutus))
                    <a href="{{ route('aboutus.create') }}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                @if (!empty($aboutus))
                <div class="row">
                    {{-- <div class="col-md-5 d-flex align-items-center justify-content-center">
                        <img src="{{ asset($aboutus->bg_image) }}" width="360" class="" alt="Background Image">
                    </div> --}}
                    <div class="col-md-12 text-center">
                        <h6>{{ $aboutus->title }}</h6>
                        <p>{!! $aboutus->description !!}</p>
                        <div class="container">
                            <img src="{{ asset($aboutus->image) }}" width="360" class="img-fluid m-4"
                            alt="">
                        </div>
                    </div>
                </div>
                    <form action="{{ route('aboutus.destroy', $aboutus->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('aboutus.edit', $aboutus->id) }}"
                            class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @else
                    <h6>No Welcome Message</h6>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
