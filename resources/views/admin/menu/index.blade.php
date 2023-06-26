<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Menus</h5>
                <a href="{{ route('menu.create') }}" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm">
                    <tr>
                        <th class="border border-1">Position</th>
                        <th class="border border-1">Menu</th>
                        <th class="border border-1">Slug</th>
                        <th class="border border-1">Action</th>
                    </tr>
                    @foreach($menus as $menu)

                    <tr>
                        <td class="border border-1">{{ $menu->position }}</td>
                        <td class="border border-1">{{ $menu->name }}</td>
                        <td class="border border-1">{{ $menu->slug }}</td>
                        <td class="border border-1">
                            <a href="{{ route('menu.edit',$menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
