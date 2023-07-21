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
                            <th class="border border-1">Email</th>
                            <th class="border border-1">Comments</th>
                            <th class="border border-1">Review</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $index => $comment)
                            <tr>
                                <td class="border border-1">{{ ++$index }}</td>
                                <td class="border border-1">{{ $comment->name }}</td>
                                <td class="border border-1">{{ $comment->email }}</td>
                                <td class="border border-1">{{ $comment->comment }}</td>
                                <td class="border border-1">
                                    <span
                                        class="badge {{ $comment->review == 'valid' ? 'badge-success' : 'badge-danger' }}">{{ $comment->review }}</span>
                                </td>
                                <td class="border border-1">
                                    <a href="{{ route('comment.edit', $comment->id) }}" data-toggle="modal"
                                        data-target="#Modal{{ $comment->id }}" class="btn btn-primary btn-sm">
                                         <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('comment.destroy', $comment->id) }}" method="POST" class="delete-form" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete this comment?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>

                                    {{-- Form Type Update --}}
                                    <div class="modal fade" id="Modal{{ $comment->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Comment Review </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('comment.update', $comment->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="row">
                                                            <div class="col-md-12 pb-3">
                                                                <label for="collection_id">Review <span class="text-danger">*</span></label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline1{{ $comment->id }}" name="review" value="valid"
                                                                        class="custom-control-input" {{ $comment->review === 'valid' ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadioInline1{{ $comment->id }}">Valid</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline2{{ $comment->id }}" name="review" value="invalid"
                                                                        class="custom-control-input" {{ $comment->review === 'invalid' ? 'checked' : '' }}>
                                                                    <label class="custom-control-label" for="customRadioInline2{{ $comment->id }}">Invalid</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update changes</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
