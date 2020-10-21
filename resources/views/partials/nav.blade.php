<nav class="navbar navbar-expand navbar-dark bg-primary">     
    <div class="navbar-nav w-100">
        <a class="navbar-brand text-color" href="/">TravelPlanet</a>
        <a class="nav-item nav-link" href="/hotels">ホテル一覧</a>
        <a class="nav-item nav-link" href="/dashboard/reservations">予約一覧</a>
        @if (Route::has('login'))
        <div class="ml-auto">
            @auth
            <a class="nav-item nav-link" href="{{ route('logout') }}">Logout</a>
            @else
            <a class="nav-item nav-link" href="{{ route('login') }}">Login/Signup</a>
            @endauth
        </div>
        @endif
    </div>
</nav>
