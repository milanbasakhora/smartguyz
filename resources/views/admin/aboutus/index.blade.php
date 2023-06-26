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
                <h6>{{ $aboutus->title }}</h6>
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset($aboutus->image) }}" width="360" class="img-fluid float-left m-4" alt="">

                        <p>{!! $aboutus->description !!}</p>
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
