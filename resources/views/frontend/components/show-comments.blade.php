<div class="show-comments mt-5">
    <h3>Comments</h3>
    <div class="row">
        @foreach ($comments as $comment)
            <div class="col-md-12 pt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="p-2">
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-start">
                                    <div class="comment-profile-icon rounded-circle" id="random-bg-color">
                                        {{ substr($comment->name, 0, 1) }}
                                    </div>
                                    <div class="d-flex flex-column justify-content-start ml-2">
                                        <span class="d-block font-weight-bold text-grey">{{ $comment->name }}</span>
                                        <span class="date text-black-50">{{ $comment->created_at->format('F j, Y') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="cursor"><span class="mai-chevron-down"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="comment-text">{{ $comment->comment }}</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row fs-12">
                            <div class="like p-2 cursor"><i class="mai-thumbs-up-outline"></i><span class="ml-1">Like</span>
                            </div>
                            <div class="like p-2 cursor comment-icon"><i class="mai-chatbubble-outline"></i><span class="ml-1">Comment</span>
                            </div>
                            <div class="like p-2 cursor"><i class="mai-share-outline"></i><span class="ml-1">Share</span>
                            </div>
                        </div>
                        {{-- <div class="comment-form">
                            <div class="p-2">
                                <div class="d-flex flex-row align-items-start">
                                    <img class="rounded-circle" src="../frontend/assets/img/doctors/doctor_2.jpg" width="40" height="40">
                                    <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                                </div>
                                <div class="mt-2 text-right">
                                    <button class="btn btn-primary btn-sm shadow-none" type="button">Comment</button>
                                    <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
