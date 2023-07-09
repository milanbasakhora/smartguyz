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
                                <a href="{{ route('activity.edit', $activity->id) }}" class="btn btn-primary btn-sm text-white"> <i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-info btn-sm text-white" href="{{ route('activity.show', $activity->id) }}"><i class="fa-solid fa-eye"></i> </a>
                                <a href="{{ route('activity.destroy', $activity->id) }}" class="btn btn-danger btn-sm text-white" data-confirm-delete="true"> <i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
