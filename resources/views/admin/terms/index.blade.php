<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Terms & Conditions</h5>
                @if (empty($terms))
                    <a href="{{ route('terms_and_conditions.create') }}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                @if (!empty($terms))
                <div class="row">
                    {{-- <div class="col-md-5 d-flex align-items-center justify-content-center">
                        <img src="{{ asset($aboutus->bg_image) }}" width="360" class="" alt="Background Image">
                    </div> --}}
                    <div class="col-md-12">
                        <h6>{{ $terms->title }}</h6>
                        <p>{!! $terms->content !!}</p>
                    </div>
                </div>
                    <form action="{{ route('terms_and_conditions.destroy', $terms->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('terms_and_conditions.edit', $terms->id) }}"
                            class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @else
                    <h6>No Content</h6>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
