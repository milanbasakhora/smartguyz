<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Editorial Team</h5>
                <a href="{{ route('editorial.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
            </div>
            <div class="card-body">

                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Image</th>
                            <th class="border border-1">Name</th>
                            <th class="border border-1">Email</th>
                            <th class="border border-1">Phone</th>
                            <th class="border border-1">Address</th>
                            <th class="border border-1">Designation</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($editorials as $index => $editorial)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">
                                <img src="{{ asset($editorial->image) }}" class="img-fluid" width="50" alt="">
                            </td>
                            <td class="border border-1">{{ $editorial->name }}</td>
                            <td class="border border-1">{{ $editorial->email }}</td>
                            <td class="border border-1">{{ $editorial->phone }}</td>
                            <td class="border border-1">{{ $editorial->address }}</td>
                            <td class="border border-1">{{ $editorial->designation }}</td>
                            <td class="border border-1">
                                <a href="{{ route('editorial.edit', $editorial->id) }}" class="btn btn-primary btn-sm text-white">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('editorial.destroy', $editorial->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete this editorial?')">
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
