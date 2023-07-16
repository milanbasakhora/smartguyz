<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Members</h5>
                <a href="{{ route('member.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
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
                            <th class="border border-1">Status</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $index => $member)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">
                                <img src="{{ asset($member->image) }}" class="img-fluid" width="50" alt="">
                            </td>
                            <td class="border border-1">{{ $member->name }}</td>
                            <td class="border border-1">{{ $member->email }}</td>
                            <td class="border border-1">{{ $member->phone }}</td>
                            <td class="border border-1">{{ $member->address }}</td>
                            <td class="border border-1">
                                <span
                                    class="badge {{ $member->status == 'active' ? 'badge-success' : 'badge-danger' }}">{{ $member->status }}</span>
                            </td>
                            <td class="border border-1">
                                <a href="{{ route('member.edit', $member->id) }}" class="btn btn-primary btn-sm text-white"> <i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ route('member.destroy', $member->id) }}" class="btn btn-danger btn-sm text-white" data-confirm-delete="true"> <i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
