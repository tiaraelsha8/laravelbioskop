<nav class="col-md-3 col-lg-2 d-md-block bg-dark text-white sidebar py-4">
    <div class="text-center mb-4">
        <h4>Admin Bioskop</h4>
    </div>
    <ul class="nav flex-column px-3">
        <li class="nav-item">
            <a 
                class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active bg-secondary' : '' }}" 
                href="{{ route('admin.dashboard') }}">
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a 
                class="nav-link text-white {{ request()->routeIs('admin.film') ? 'active bg-secondary' : '' }}" 
                href="{{ route('admin.film') }}">
                Daftar Film
            </a>
        </li>
        <li class="nav-item">
            <a 
                class="nav-link text-white {{ request()->routeIs('admin.jadwal') ? 'active bg-secondary' : '' }}" 
                href="{{ route('admin.jadwal') }}">
                Jadwal Tayang
            </a>
        </li>
        <li class="nav-item">
            <a 
                class="nav-link text-white {{ request()->routeIs('admin.users') ? 'active bg-secondary' : '' }}" 
                href="{{ route('admin.users') }}">
                List User
            </a>
        </li>
    </ul>
    <form class="px-3 mt-4" method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger w-100">Logout</button>
    </form>
</nav>