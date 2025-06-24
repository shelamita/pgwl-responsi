@extends('layout.template')

@section('content')

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<!-- Background Wrapper -->
<div style="background: url('{{ asset('storage/images/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            padding: 60px 0;
            font-family: 'Poppins', sans-serif;">

    <div class="container">
        <!-- DESKRIPSI WEBSITE -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <div class="p-4 rounded-4 shadow" style="background-color: rgba(255, 255, 255, 0.92);">
                    <div class="text-center mb-3">
                        <img src="{{ asset('storage/images/about_lombok.jpg') }}" alt="Peta Pulau Lombok" class="img-fluid rounded-3 shadow" style="max-width: 300px;">
                    </div>
                    <h3 class="fw-bold text-success mb-3 text-center">🌿 Tentang Website <span class="text-dark">Savana Raya</span></h3>
                    <p class="text-muted">
                        <strong>Pulau Lombok</strong> merupakan salah satu destinasi wisata unggulan di Indonesia yang dikenal dengan keindahan alamnya, mulai dari pantai berpasir putih, laut biru jernih, hingga budaya lokal yang masih terjaga.
                    </p>
                    <p class="text-muted">
                        <strong>Savana Raya</strong> hadir sebagai platform digital yang bertujuan untuk memperkenalkan dan mengangkat potensi wisata Lombok, khususnya destinasi pantai yang menjadi daya tarik utama. Website ini menyajikan informasi destinasi secara ringkas dan visual menarik.
                    </p>
                    <p class="text-muted">
                        Savana Raya dikembangkan sebagai sarana edukatif dan promosi pariwisata, dengan harapan dapat mendukung pengembangan wisata lokal yang berkelanjutan.
                    </p>
                </div>
            </div>
        </div>

        <!-- PENGEMBANG -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row g-0 shadow rounded-4 overflow-hidden" style="background-color: rgba(255, 255, 255, 0.92);">

                    <!-- Foto Profil -->
                    <div class="col-md-4 d-flex justify-content-center align-items-center p-4" style="background-color: #d0f0d8;">
                        <img src="{{ asset('storage/images/profil.jpg') }}" alt="Foto Shelamita" class="img-fluid rounded-circle shadow-lg border border-white border-4" style="width: 200px; height: 200px; object-fit: cover; transition: transform 0.3s ease;">
                    </div>

                    <!-- Info Deskripsi -->
                    <div class="col-md-8 p-4">
                        <h3 class="text-success fw-bold mb-1">👩‍💻 Shelamita Amanah Wibowo</h3>
                        <p class="text-muted mb-3">23/517749/SV/22825 | Sistem Informasi Geografis</p>
                        <p class="text-muted">
                            Saya memiliki minat dalam pengembangan website dan pemetaan digital, khususnya dalam bidang pariwisata dan data spasial. Melalui proyek <strong>Savana Raya</strong>, saya ingin memperkenalkan potensi lokal Pulau Lombok melalui teknologi.
                        </p>
                        <p class="text-muted">
                            Saya percaya bahwa informasi geospasial adalah kunci inovasi lokal yang inklusif dan berkelanjutan.
                        </p>

                        <div class="mt-3">
                            <p class="mb-1"><strong>Email:</strong> <a href="mailto:shelamitaamanahwibowo@mail.ugm.ac.id" class="text-success text-decoration-none">shelamitaamanahwibowo@mail.ugm.ac.id</a></p>
                            <p class="mb-1"><strong>GitHub:</strong> <a href="https://github.com/shelamita" class="text-success text-decoration-none" target="_blank">github.com/shelamita</a></p>
                            <p class="mb-1"><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/shelamita-amanah/" class="text-success text-decoration-none" target="_blank">linkedin.com/shelamita</a></p>
                        </div>

                        <!-- Badge Skill -->
                        <div class="mt-4">
                            @php
                                $skills = ['Laravel', 'Leaflet', 'PostGIS', 'QGIS', 'GeoJSON'];
                            @endphp
                            @foreach ($skills as $skill)
                                <span class="badge bg-light border border-success text-success fw-semibold me-2 mb-2 px-3 py-2 shadow-sm">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Tambahan Style -->
<style>
    img:hover {
        transform: scale(1.03);
    }

    .badge {
        font-size: 0.85rem;
        border-radius: 1rem;
    }
</style>

@endsection
