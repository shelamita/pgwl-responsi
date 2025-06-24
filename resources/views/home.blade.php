@extends('layout.template')

@section('content')

<!-- Tambahkan link Google Fonts untuk Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- FULLSCREEN HERO DENGAN GAMBAR BACKGROUND -->
<div class="vh-100 w-100 position-relative" style="
    background-image: url('{{ asset('storage/images/lombok.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
">
    <!-- Overlay Hitam Transparan -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4);"></div>

    <!-- Konten Hero -->
    <div class="position-relative d-flex flex-column justify-content-center align-items-center text-white text-center h-100 px-3">
        <h1 class="display-3 fw-bold mb-3">🌿 Savana Raya</h1>
        <p class="lead mb-4">
            Jelajahi keindahan alam Lombok – dari garis pantai biru, hamparan savana, hingga pesona budaya lokal yang otentik.
        </p>
        <a href="#eksplor" class="btn btn-lg btn-pastel rounded-pill px-4 py-2 shadow">Eksplor Sekarang</a>
    </div>
</div>

<!-- SECTION INFORMASI UTAMA -->
<div id="eksplor" class="container mt-5">
    <div class="row text-center">
        @php
            $cards = [
                ['icon' => 'island.png', 'title' => 'Destinasi Wisata', 'text' => 'Temukan pantai dan bendungan yang memukau di penjuru Lombok disertai dengan rute rekomendasi', 'link' => route('table')],
                ['icon' => 'map.png', 'title' => 'Peta Interaktif', 'text' => 'Navigasi lokasi wisata melalui peta spasial interaktif yang mudah digunakan.', 'link' => route('map')],
                ['icon' => 'gallery.png', 'title' => 'Galeri Foto', 'text'  => 'Jelajahi keindahan pantai dan destinasi wisata Lombok dalam kumpulan gambar terbaik kami.', 'link'  => route('gallery')]
            ];
        @endphp

        @foreach ($cards as $card)
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-lg h-100 transition hover-shadow">
                <div class="card-body green-grad text-dark rounded-4">
                    <img src="{{ asset('storage/images/' . $card['icon']) }}" class="mb-3" alt="{{ $card['title'] }}" style="width: 60px; height: 60px; object-fit: contain;">
                    <h5 class="card-title fw-bold">{{ $card['title'] }}</h5>
                    <p class="card-text">{{ $card['text'] }}</p>
                    <a href="{{ $card['link'] }}" class="btn btn-outline-success btn-sm rounded-pill">Lihat</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- FOOTER -->
<footer class="mt-5 text-center text-muted small">
    &copy; {{ date('Y') }} <span class="text-success fw-bold">Savana Raya</span> — Jelajah Lombok Tanpa Batas by Shelamita.
</footer>

<!-- STYLE TAMBAHAN -->
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    .hover-shadow:hover {
        transform: scale(1.03);
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15);
    }

    .transition {
        transition: all 0.3s ease-in-out;
    }

    .green-grad {
        background: linear-gradient(145deg, #e8f5e9, #ffffff);
        background-size: 200% 200%;
        animation: softFlow 10s ease infinite;
    }

    @keyframes softFlow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .btn-pastel {
        background-color: #a5d6a7;
        color: #1b5e20;
        border: none;
    }

    .btn-pastel:hover {
        background-color: #81c784;
        color: #fff;
    }

    .btn-outline-success {
        border-color: #66bb6a;
        color: #388e3c;
    }

    .btn-outline-success:hover {
        background-color: #66bb6a;
        color: white;
    }
</style>

@endsection
