<div>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="/frontend/assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Smart-Guyz</span>
            </a>

            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Company Profile</li>
                <li class="dropdown active">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                            data-feather="monitor"></i><span>Dashboard</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="settings"></i><span>Master Setup</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('company.index') }}">Company Profile</a></li>
                        <li><a class="nav-link" href="{{ route('boardmember.index') }}">Board Members</a></li>
                        <li><a class="nav-link" href="{{ route('jumbotron.index') }}">Jumbotron</a></li>
                    </ul>
                </li>
                {{-- <li><a class="nav-link" href="{{ route('menu.index') }}"><i class="fa-solid fa-bars"></i><span>Menu</span> </a></li> --}}

                {{-- Pages --}}
                <li class="menu-header">Pages</li>
                <li><a class="nav-link" href="{{ route('aboutus.index') }}"><i class="fa-solid fa-address-card"></i><span>About Us</span> </a></li>
                <li><a class="nav-link" href="{{ route('activity.index') }}"><i class="fa-solid fa-calendar-days"></i><span>Our Activity</span> </a></li>
                <li><a class="nav-link" href="{{ route('carousel.index') }}"><i class="fa-solid fa-image"></i><span>Carousel</span> </a></li>
                <li><a class="nav-link" href="{{ route('member.index') }}"><i class="fa-solid fa-users"></i><span>Members</span> </a></li>
                <li><a class="nav-link" href="{{ route('notice.index') }}"><i class="fa-solid fa-clipboard"></i><span>Notices</span> </a></li>
                <li><a class="nav-link" href="{{ route('contact.index') }}"><i class="fa-solid fa-address-book"></i><span>Contact</span> </a></li>

                {{-- Other Pages --}}
                <li class="menu-header">Other Pages</li>
                <li><a class="nav-link" href="{{ route('terms_and_conditions.index') }}"><i class="fa-solid fa-file"></i><span>Terms & Conditions</span> </a></li>
                <li><a class="nav-link" href="{{ route('privacy.index') }}"><i class="fa-solid fa-lock"></i><span>Privacy</span> </a></li>
            </ul>
        </aside>
    </div>
</div>
