<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Our Activities</h5>
                <a href="{{ route('activity.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
            </div>
            <div class="card-body">

                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Images</th>
                            <th class="border border-1">Title</th>
                            <th class="border border-1 w-50">Description</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $index => $activity)
                        <tr>
                            <td class="border border-1">{{ ++$index }}</td>
                            <td class="border border-1">
                                @foreach ($activity->activity_images as $index=>$activity_image)
                                @if ($index==0)
                                <img src="{{ asset($activity_image->image) }}" width="70" alt="">
                                @endif
                                @endforeach
                            </td>
                            <td class="border border-1">{{ $activity->title }}</td>
                            <td class="border border-1">{!! Str::limit($activity->description, 200, '...') !!}</td>
                            <td class="border border-1">
                                <a href="{{ route('activity.edit', $activity->id) }}" class="btn btn-primary btn-sm text-white">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{ route('activity.show', $activity->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <form action="{{ route('activity.destroy', $activity->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete this activity?')">
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
