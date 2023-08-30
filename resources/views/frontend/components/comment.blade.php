<div class="comment-form-wrap pt-5">
    <div class="row">
        <div class="col-md-8">
            <h3>Leave a comment</h3>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="d-flex justify-content-end align-items-center">
            @if (Route::has('login'))
                @auth
                <div class="comment-profile-dropdown">
                    <button class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="profile-icon rounded-circle" id="random-bg-color">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                    </button>
                    <div class="dropdown-menu" style="width: 150px;">
                        <div class="username">
                            <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                        </div>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}"><span
                                class="">Profile</span></a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item logout" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="">{{ __('Logout') }}</span>
                            </a>
                        </form>
                    </div>
                </div>
                @else
                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Log In</a>
                @endauth
            @endif
            </div>
        </div>
    </div>
    @if (auth()->check()) <!-- Check if user is authenticated -->
        <form action="/postcomment" method="POST" class="">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="activity-id" name="activity_id"
                    value="{{ $blog->id }}" hidden>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="parent-id" name="parent_id"
                    value="{{ $blog->parent_id }}" hidden>
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" cols="30" rows="5" class="form-control" required></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Comment</button>
            </div>
        </form>
    @else
        <p class="pt-4">To comment, you need to login first.</p>
    @endif

</div>
