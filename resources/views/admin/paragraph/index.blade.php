<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Paragraph</h5>
                @if(empty($paragraph))
                    <a href="{{ route('paragraph.create') }}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                @if (!empty($paragraph))
                    <div class="row">
                        <div class="col-md-12">
                            <h6>{{ $paragraph->title }}</h6>
                            <p>{!! $paragraph->content !!}</p>
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('paragraph.destroy',$paragraph->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('paragraph.edit',$paragraph->id) }}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                @else
                    <h6>No Content</h6>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
