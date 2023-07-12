<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +977 98XXXXXXXX</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> smart-guyz@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-youtube"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><span><img src="../frontend/assets/img/logo.png" class="logo"
                        alt=""></span><span class="text-primary">Smart</span>-Guyz</a>

            <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                        aria-describedby="icon-addon1">
                </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                <a class="nav-link" href="/about">About Us</a>
                            </li>
                            <li class="nav-item {{ request()->is('editorial-team') ? 'active' : '' }}">
                                <a class="nav-link" href="/editorial-team">Editorial Team</a>
                            </li>
                            <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}">
                                <a class="nav-link" href="/gallery">Gallery</a>
                            </li>
                            <li class="nav-item {{ request()->is('notices') ? 'active' : '' }}">
                                <a class="nav-link" href="/notices">Notices</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="nav-item {{ request()->is('terms-n-conditions') ? 'active' : '' }}">
                                <a class="nav-link" href="/terms-n-conditions">Terms & Conditions</a>
                            </li>
                            <li class="nav-item {{ request()->is('privacy') ? 'active' : '' }}">
                                <a class="nav-link" href="/privacy">Privacy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ request()->is('team') ? 'active' : '' }}">
                        <a class="nav-link" href="/team">Team</a>
                    </li>
                    <li class="nav-item {{ request()->is('blog*') ? 'active' : '' }}">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    {{-- X-dropdown --}}
                    @if (Route::has('login'))
                        @auth
                            {{-- <h1>User logged in!!</h1> --}}
                            <li class="">
                                <div class="dropdown">
                                    <a class="dropdown-toggle btn btn-primary ml-lg-3" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"> {{ Auth::user()->name }}</a>


                                    <ul class="dropdown-menu">
                                        <li>
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login / Register</a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
