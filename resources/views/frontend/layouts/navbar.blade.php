<header>
    <div class="topbar" id="changingTopbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="tel:{{ $company->contact ?? '' }}"><span class="mai-call text-primary"></span>
                            {{ $company->contact ?? '' }}</a>
                        <span class="divider">|</span>
                        <a href="mailto:{{ $company->email ?? "" }}"><span
                                class="mai-mail text-primary"></span>{{ $company->email ?? '' }}</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        @if ($company->facebook ?? '')
                            <a href="{{ $company->facebook ?? '' }}"><span class="mai-logo-facebook-f"></span></a>
                        @endif
                        @if ($company->twitter ?? '')
                            <a href="{{ $company->twitter ?? ''}}"><span class="mai-logo-twitter"></span></a>
                        @endif
                        @if ($company->youtube ?? '')
                            <a href="{{ $company->youtube ?? '' }}"><span class="mai-logo-youtube"></span></a>
                        @endif
                        @if ($company->instagram ?? '')
                            <a href="{{ $company->instagram ?? '' }}"><span class="mai-logo-instagram"></span></a>
                        @endif
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <div class="container">
            <a class="navbar-brand" href="/"><span><img src="{{ asset($company->logo ?? '') }}" class="logo"
                        alt=""></span><span class="text-primary">Smart</span>&nbsp;Guyz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav" id="black">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="/about">About Us</a>
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
                    <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item {{ request()->is('notices') ? 'active' : '' }}">
                        <a class="nav-link" href="/notices">Notices</a>
                    </li>
                    <li
                        class="nav-item dropdown {{ request()->is('editorial-team', 'members', 'terms-n-conditions', 'privacy') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" style="width: 150px;">
                            <li class="nav-item {{ request()->is('editorial-team') ? 'active' : '' }}">
                                <a class="nav-link" href="/editorial-team">Editorial Team</a>
                            </li>
                            <li class="nav-item {{ request()->is('members') ? 'active' : '' }}">
                                <a class="nav-link" href="/members">Our Members</a>
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
                </ul>
                <div class="navbar-nav user-profile ml-auto">
                    {{-- X-dropdown --}}
                    @if (Route::has('login'))
                        @auth
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <div class="profile-icon rounded-circle" id="random-bg-color">
                                        {{ substr(Auth::user()->name, 0, 1) }}
                                    </div>
                                </a>
                                <div class="dropdown-menu" style="width: 150px;">
                                    <li class="nav-item">
                                        <div class="username">
                                            <span class="font-weight-bold" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 16px">{{ Auth::user()->name }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="nav-item py-1">
                                        <a class="nav-link edit mai-person-outline" href="/user-profile"><span
                                                class="pr-2"></span>Edit Profile</a>
                                    </li>
                                    <li class="nav-item py-1">
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="nav-link logout mai-power" href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <span class="">{{ __('Logout') }}</span>
                                            </a>
                                        </form>
                                    </li>
                                </div>
                            </div>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}" id="">Log In</a>
                            </li>
                        @endauth
                    @endif
                </div>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
