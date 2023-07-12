<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Privacy</h5>
                @if(empty($privacy))
                    <a href="{{ route('privacy.create') }}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                @if (!empty($privacy))
                    <div class="row">
                        <div class="col-md-12">
                            <h6>{{ $privacy->title }}</h6>
                            <p>{!! $privacy->content !!}</p>
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('privacy.destroy',$privacy->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('privacy.edit',$privacy->id) }}" class="btn btn-primary">Edit</a>
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
