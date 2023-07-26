<div class="comment-form-wrap pt-5">
    <div class="row">
        <div class="col-md-8">
            <h3 class="pt-2">Leave a comment</h3>
        </div>
        <div class="col-md-4">
            <nav class="navbar user-profile navbar-light navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        {{-- X-dropdown --}}
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="profile-icon rounded-circle" id="random-bg-color">
                                            {{ substr(Auth::user()->name, 0, 1) }}
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" style="width: 150px;">
                                        <li class="nav-item">
                                            <div class="username">
                                                <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('profile.edit') }}"><span
                                                    class="">Profile</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="nav-link" href="#"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <span class="">{{ __('Logout') }}</span>
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Log In</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </nav>
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
        <p>To comment, you need to login first.</p>
    @endif

</div>
