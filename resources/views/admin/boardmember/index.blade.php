<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Board Members</h5>
                <a href="{{ route('boardmember.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
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
                        @foreach ($boardmembers as $index => $boardmember)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">
                                <img src="{{ asset($boardmember->image) }}" class="img-fluid" width="50" alt="">
                            </td>
                            <td class="border border-1">{{ $boardmember->name }}</td>
                            <td class="border border-1">{{ $boardmember->email }}</td>
                            <td class="border border-1">{{ $boardmember->phone }}</td>
                            <td class="border border-1">{{ $boardmember->address }}</td>
                            <td class="border border-1">{{ $boardmember->designation }}</td>
                            <td class="border border-1">
                                <a href="{{ route('boardmember.edit', $boardmember->id) }}" class="btn btn-primary btn-sm text-white">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('boardmember.destroy', $boardmember->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete this board member?')">
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
