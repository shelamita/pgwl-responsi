<style>
    .bg-pastel-green {
        background-color: #b8e1b5;
        /* Hijau pastel */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-pastel-green">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-success" href="#">
            <i class="fa-solid fa-earth-asia"></i> {{ $title }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- MENU KIRI -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('home') }}"><i
                            class="fa-solid fa-house-chimney"></i> Beranda</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('map') }}"><i
                            class="fa-solid fa-map-location-dot"></i> Peta</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('table') }}"><i
                            class="fa-solid fa-table"></i> Destinasi</a></li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa-solid fa-database"></i> Data
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('api.points') }}" target="_blank"><i
                                        class="fa-solid fa-location-dot"></i> Points</a></li>
                            <li><a class="dropdown-item" href="{{ route('api.polylines') }}" target="_blank"><i
                                        class="fa-solid fa-grip-lines"></i> Polyline</a></li>
                            <li><a class="dropdown-item" href="{{ route('api.polygons') }}" target="_blank"><i
                                        class="fa-solid fa-draw-polygon"></i> Polygon</a></li>
                        </ul>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa-solid fa-list"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('about') }}" target="_blank"><i
                                        class="fa-solid fa-id-badge"></i> Tentang</a></li>
                            <li><a class="dropdown-item" href="{{ route('gallery') }}" target="_blank"><i
                                        class="fa-solid fa-images"></i> Galeri</a></li>
                            <li><a class="dropdown-item" href="{{ route('rekomendasi') }}" target="_blank"><i
                                        class="fa-solid fa-map-location-dot"></i> Rekomendasi</a></li>
                        </ul>
                </li>
            </ul>

            <!-- MENU KANAN -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="nav-link text-danger bg-transparent border-0" type="submit">
                                <i class="fa-solid fa-right-from-bracket"></i> Logout
                            </button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('login') }}">
                            <i class="fa-solid fa-right-to-bracket"></i> Login
                        </a>
                    </li>
                @endguest
            </ul>

    </div>
</nav>
