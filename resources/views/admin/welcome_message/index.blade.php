<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Welcome Message</h5>
                @if (empty($welcome_message))
                    <a href="{{ route('welcome_message.create') }}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                @if (!empty($welcome_message))
                <h6>{{ $welcome_message->title }}</h6>
                <div class="row">
                    <div class="col-md-12 float-end" style="">
                        <img src="{{ asset($welcome_message->image) }}" width="360" class="img-fluid float-left m-4" alt="">

                        <p>{!! $welcome_message->description !!}</p>
                    </div>
                </div>
                    <form action="{{ route('welcome_message.destroy', $welcome_message->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('welcome_message.edit', $welcome_message->id) }}"
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
