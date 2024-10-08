<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="navbar-navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Twitbot</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::currentRouteName() === 'dashboard' ? 'active-navbar-menu' : '' }}" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::currentRouteName() === 'activity' ? 'active-navbar-menu' : '' }}" href="{{ route('activity') }}">Your Activity</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded {{ Route::currentRouteName() === 'profile' ? 'active-navbar-menu' : '' }}" href="{{ route('profile') }}"><x-tabler-user /></a></li>
            </ul>
        </div>
    </div>
</nav>
