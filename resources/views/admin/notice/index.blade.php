<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Notices </h5>
                <a href="{{ route('notice.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add
                    New</a>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($notice as $notice)
                        <div class="col-md-3 text-center">
                            <h6 class="">{{ $notice->title }}</h6>
                            @if ($notice->expire_date < now()->format('Y-m-d'))
                                <span class="badge badge-danger badge-sm my-3">Expired</span>
                            @else
                                <span class="badge badge-success badge-sm my-3">Active</span>
                            @endif

                            <img src="{{ asset($notice->image) }}" width="360" class="img-fluid float-none "
                                alt="">
                            <div class="card-body">
                                <form action="{{ route('notice.destroy', $notice->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('notice.edit', $notice->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
