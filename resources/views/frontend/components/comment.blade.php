<style>
    /* Dropdown menu styles */
.dropdown-menu {
  min-width: 150px; /* Adjust as needed */
}

.dropdown-item {
  padding: 8px 16px; /* Adjust as needed */
  color: #333; /* Set text color for dropdown items */
  text-decoration: none;
  display: block;
}

.dropdown-item:hover,
.dropdown-item:focus {
  background-color: #f5f5f5; /* Hover background color */
  color: #333; /* Hover text color */
}
</style>
<div class="comment-form-wrap pt-5">
    <div class="row">
        <div class="col-md-8">
            <h3 class="pt-2">Leave a comment</h3>
        </div>
        <div class="col-md-4">
            <nav class="navbar navbar-light navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                {{-- X-dropdown --}}
                @if (Route::has('login'))
                @auth
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                           <hr class="dropdown-divider mx-3">
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('profile.edit') }}"><span class="">Profile</span></a>
                       </li>
                       <li class="nav-item">
                           <form id="logout-form" method="POST" action="{{ route('logout') }}">
                               @csrf
                               <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
    <form action="/postcomment" method="POST" class="">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="activity-id" name="activity_id"
                value="{{ $blog->id }}" hidden>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" cols="30" rows="5" name="comment" class="form-control" required></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Comment</button>
        </div>
    </form>
</div>
