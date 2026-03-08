<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <p class="m-0 fw-bold" style="font-size: 25px;">
            <img src="img/icon.png" alt="" height="50px">
            Saifi-<span style="color: #fb873f;">Coder</span>
        </p>
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">

            <!-- Home -->
            <a href="{{route('home')}}" 
               class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
               Home
            </a>

            <!-- About -->
            <a href="{{route('about page')}}" 
               class="nav-item nav-link {{ request()->routeIs('about page') ? 'active' : '' }}">
               About
            </a>

            <!-- Courses -->
            <a href="{{route('course page')}}" 
               class="nav-item nav-link {{ request()->routeIs('course page') ? 'active' : '' }}">
               Courses
            </a>

            <!-- Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" 
                   class="nav-link dropdown-toggle 
                   {{ request()->routeIs('team page') || request()->routeIs('test page') ? 'active' : '' }}" 
                   data-bs-toggle="dropdown">
                   Pages
                </a>

                <div class="dropdown-menu fade-down m-0">

                    <a href="{{route('team page')}}" 
                       class="dropdown-item {{ request()->routeIs('team page') ? 'active' : '' }}">
                       Our Team
                    </a>

                    <a href="{{route('test page')}}" 
                       class="dropdown-item {{ request()->routeIs('test page') ? 'active' : '' }}">
                       Testimonial
                    </a>

                </div>
            </div>

            <!-- Contact -->
            <a href="{{route('contact page')}}" 
               class="nav-item nav-link {{ request()->routeIs('contact page') ? 'active' : '' }}">
               Contact
            </a>

            @if (Auth::check())
                <a href="{{route('dashboard')}}" 
                   class="nav-item nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                   <i class="fa fa-user pe-2"></i>Dashboard
                </a>
            @else
                <a href="{{route('login')}}" 
                   class="nav-item nav-link {{ request()->routeIs('login') ? 'active' : '' }}">
                   <i class="fa fa-user"></i>
                </a>

                <a href="{{route('register')}}" 
                   class="nav-item nav-link {{ request()->routeIs('register') ? 'active' : '' }}">
                   <i class="fa-solid fa-right-to-bracket fa-lg me-2"></i>
                </a>
            @endif

            <a href="#" class="nav-item nav-link">
                <div id="google_translate_element"></div>
            </a>

        </div>
    </div>
</nav>
<style>
.navbar .nav-link,
.navbar .dropdown-item {
    color: black !important;
}

.navbar .nav-link.active,
.navbar .dropdown-item.active {
    color: #fb873f !important;
}
</style>