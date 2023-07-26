<div class="pt-2">
    <!-- Comment content -->
    <div class="comment">
        <!-- Display comment information and content here -->
        <div class="row">
            <!-- Comment profile icon and user information -->
            <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start">
                <div class="comment-profile-icon rounded-circle" id="random-bg-color">
                    {{ substr($comment->name, 0, 1) }}
                </div>
                <div class="d-flex flex-column justify-content-start ml-2">
                    <span class="d-block font-weight-bold text-grey">{{ $comment->name }}</span>
                    <span class="date text-black-50">{{ $comment->created_at->format('F j, Y') }}</span>
                </div>
            </div>
            @if (auth()->check() && Auth::user()->id == $comment->user_id)
                <!-- Comment options -->
                <div class="coll-lg-6 col-md-6 col-sm-6 d-flex justify-content-end">
                    <div class="options">
                        <button class="mai-chevron-down" title="Options"></button>
                        <div class="comment-options text-center">
                            <button class="edit-link" title="Edit" onclick="toggleEdit('{{ $comment->id }}')">
                                <span class="mai-pencil"></span>
                            </button>
                            <button class="delete-link" title="Delete"
                                onclick="showDeleteConfirmation('{{ $comment->id }}')">
                                <span class="mai-trash"></span>
                            </button>
                        </div>
                    </div>
                    <!-- The custom popup message -->
                    <div id="deleteConfirmation" class="popup">
                        <div class="popup-content">
                            <p>Are you sure you want to delete this item?</p>
                            <div class="button-group">
                                <form action="{{ route('deletecomment', ['id' => $comment->id]) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger btn-sm" onclick="deleteComment('{{ $comment->id }}')">Yes,
                                        Delete</button>
                                </form>
                                <button class="btn btn-primary btn-sm" onclick="hideDeleteConfirmation()">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        {{-- Show COmment & Edit Comment Hidden --}}
        <div class="ml-1 mt-2">
            <p class="comment-text" id="commentText_{{ $comment->id }}">
                {!! nl2br(e($comment->comment)) !!}
            </p>
            <div id="editContainer_{{ $comment->id }}" style="display: none;">
                <form action="{{ route('editcomment', ['id' => $comment->id]) }}" method="POST">
                    @csrf
                    <div class="d-flex align-items-start form-group">
                        <textarea class="form-control ml-1" name="comment" id="editCommentInput_{{ $comment->id }}" required>{!! $comment->comment !!}</textarea>
                    </div>
                    <div class="mt-2 text-right">
                        <button onclick="saveCommentChanges('{{ $comment->id }}')" class="btn btn-primary btn-sm"
                            type="submit">Submit</button>
                        <button onclick="cancelEdit('{{ $comment->id }}')" class="btn btn-outline-primary btn-sm ml-1"
                            type="button">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Like, Reply buttons -->
    <div class="d-flex flex-row fs-12">
        {{-- Like Button --}}
        {{-- <div class="like pr-2 cursor  text-primary">
            <i class="mai-thumbs-up-outline"></i>
            <span class="ml-0">
                @if ($comment->likes == 0)
                {{ $comment->likes }}

                @else
                    {{ $comment->likes }}
                @endif
            </span>
        </div> --}}

        {{-- Reply Button --}}
        <div class="like pr-2 cursor comment-icon" data-comment-id="{{ $comment->id }}"></i><span class="ml-1">Reply</span></div>
        {{-- Comment Collapse --}}
        @if ($comment->replies->isNotEmpty())
            <div class="like cursor ml-auto toggleCollapse" id="toggleIcon{{ $comment->id }}">
                <button data-toggle="collapse" data-target="#collapseComment{{ $comment->id }}" aria-expanded="false"
                    aria-controls="collapseComment{{ $comment->id }}">
                    <i class="mai-remove" title="Collapse" id="removeIcon{{ $comment->id }}"></i>
                    <i class="mai-add hidden" title="Expand" id="addIcon{{ $comment->id }}" data-toggle="collapse"
                        data-target="#collapseComment{{ $comment->id }}" aria-expanded="false"
                        aria-controls="collapseComment{{ $comment->id }}"></i>
                </button>

            </div>
        @endif
    </div>

    <!-- Reply form Begin-->
    @if (auth()->check())
        <form action="/replycomment" method="POST" class="comment-form" data-comment-id="{{ $comment->id }}"
            style="display:none;">
            @csrf
            <div class="">
                <div class="form-group">
                    <input type="text" class="form-control" id="activity-id" name="activity_id"
                        value="{{ $blog->id }}" hidden>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="parent-id" name="parent_id"
                        value="{{ $comment->id }}" hidden>
                </div>
                <div class="d-flex align-items-start form-group">
                    <div class="reply-profile-icon rounded-circle" id="random-bg-color">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <textarea class="form-control ml-1" name="comment" id="comment" required></textarea>
                </div>
                <div class="mt-2 text-right">
                    <button class="btn btn-primary btn-sm" type="submit">Comment</button>
                    <button class="btn btn-outline-primary btn-sm ml-1" type="button">Cancel</button>
                </div>
            </div>
        </form>
    @else
        <!-- Show message if user is not logged in -->
        <div class="comment-form" data-comment-id="{{ $comment->id }}" style="display:none;">
            <div class="pt-4 pl-1 text-danger">
                <p>You must login first, to be able to comment.</p>
            </div>
        </div>
    @endif
    <!-- Reply form End-->

    <!-- Display nested replies -->
    @if ($comment->replies->isNotEmpty())
        <div class="replies collapse show pl-5 pt-2" id="collapseComment{{ $comment->id }}">
            @foreach ($comment->replies as $reply)
            <div class="py-2">
                @include('frontend.partials.comment', ['comment' => $reply])
            </div>
            @endforeach
        </div>
    @endif
</div>
