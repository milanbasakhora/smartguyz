<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Gallery</h5>
                <a href="{{ route('gallery.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
            </div>
            <div class="card-body">

                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Image</th>
                            <th class="border border-1">Title</th>
                            <th class="border border-1">Link</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $index => $gallery)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">
                                <img src="{{ asset($gallery->image) }}" class="img-fluid" width="50" alt="">
                            </td>
                            <td class="border border-1">{{ $gallery->title }}</td>
                            <td class="border border-1">{{ $gallery->link }}</td>
                            <td class="border border-1">
                                <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-primary btn-sm text-white">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete this gallery?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
