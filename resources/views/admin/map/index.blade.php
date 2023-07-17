<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Current Map Location</h5>
                @if (empty($map))
                    <a href="{{ route('map.create') }}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">Latitude</th>
                        <th class="border border-1">Longitude</th>
                        <th class="border border-1">Zoom Level</th>
                        <th class="border border-1 w-25">Action </th>
                    </tr>
                    <tr>
                        @if (!empty($map))
                            <td class="border border-1">{{ $map->latitude }}</td>
                            <td class="border border-1">{{ $map->longitude }}</td>
                            <td class="border border-1">{{ $map->zoomlevel }}</td>
                            <td class="border border-1">
                                <form action="{{ route('map.destroy', $map->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('map.edit', $map->id) }}" class="btn btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
