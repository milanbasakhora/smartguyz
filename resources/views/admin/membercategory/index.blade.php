<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>MemberCategory</h5>
                <a href="{{ route('membercategory.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Category</th>
                        <th class="border border-1">Slug</th>
                        <th class="border border-1">Action</th>
                    </tr>
                    @foreach($membercategories as $index=>$membercategory)
                    <tr>
                        <td class="border border-1">{{ ++$index }}</td>
                        <td class="border border-1">{{ $membercategory->type }}</td>
                        <td class="border border-1">{{ $membercategory->slug }}</td>
                        <td class="border border-1">
                            <a href="{{ route('membercategory.edit',$membercategory->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
