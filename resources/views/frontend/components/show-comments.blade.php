@if (isset($blog))
    <div class="show-comments mt-5">
        <h3>Comments</h3>
        <div class="row">
            @if ($comments->count() > 0)
                @foreach ($comments as $comment)
                    @if (!$comment->isReply())
                        <div class="col-md-12 pt-4">
                            <div class="card p-4">
                                @include('frontend.partials.comment', ['comment' => $comment])
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="col-md-12 pt-3">
                    <div class="card p-4">
                        <p class="comment-text">No Comments</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif

