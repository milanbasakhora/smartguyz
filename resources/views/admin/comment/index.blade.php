<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Comments</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Name</th>
                            <th class="border border-1">Comments</th>
                            <th class="border border-1">Comment ID</th>
                            <th class="border border-1">Blog Page</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $index => $comment)
                            <tr>
                                <td class="border border-1">{{ ++$index }}</td>
                                <td class="border border-1">{{ $comment->user->name }}</td>
                                <td class="border border-1">{{ $comment->comment }}</td>
                                <td class="border border-1">{{ $comment->parent_id }}</td>
                                <td class="border border-1">{{ $comment->activity->title }}</td>
                                <td class="border border-1">
                                    <form action="{{ route('comment.destroy', $comment->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete this comment?')">
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
