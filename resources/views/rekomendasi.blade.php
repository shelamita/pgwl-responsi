@extends('layout.template')

@section('content')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <div class="container py-5" style="font-family: 'Poppins', sans-serif;">
        <h1 class="fw-bold text-success text-center mb-3">TOP 3 DESTINASI WISATA DI PULAU LOMBOK</h1>
        <h2 class="fw-bold text-success text-center mb-3">MENURUT SAVANA RAYA</h2>

        <!-- SECTION 1: Pantai  -->
        <section class="mb-5">
            <h4 class="fw-semibold text-success mb-4">🏖️ Pantai di Lombok</h4>
            <div class="row g-4">
                <!-- CARD Pantai Tanjung Aan -->
                <div class="col-md-4" id="pantai-tanjung-aan">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <a href="{{ route('map') }}">
                            <img src="{{ asset('storage/images/1750323234_point.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Pantai Tanjung Aan">
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Tanjung Aan</h5>
                            <p class="small mb-2 text-warning">🌟 Rating: 4.6/5</p>
                            <p class="card-text">
                                Terletak di <strong>Lombok Tengah</strong>, pantai ini terkenal dengan <strong>dua jenis
                                    pasir</strong> — halus seperti tepung dan bulat seperti merica. Dengan air laut
                                bergradasi biru kehijauan dan suasana tenang, cocok untuk wisata alami dan bersantai.
                            </p>

                            <button class="btn btn-sm btn-outline-success rounded-pill mt-auto mb-2" type="button"
                                data-bs-toggle="collapse" data-bs-target="#detailTanjungAan" aria-expanded="false"
                                aria-controls="detailTanjungAan">
                                Lihat Selengkapnya
                            </button>

                            <div class="collapse pt-3" id="detailTanjungAan">
                                <p class="mb-2 fw-bold text-success">✅ Fasilitas Umum:</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge border border-success text-success px-3 py-2">Gazebo</span>
                                    <span class="badge border border-success text-success px-3 py-2">Tempat Duduk</span>
                                    <span class="badge border border-success text-success px-3 py-2">Warung Lokal</span>
                                    <span class="badge border border-success text-success px-3 py-2">Area Parkir</span>
                                    <span class="badge border border-success text-success px-3 py-2">Toilet</span>
                                    <span class="badge border border-success text-success px-3 py-2">Penyewaan Bean
                                        Bag</span>
                                </div>

                                <p class="mb-2 fw-bold text-success">🍴 Kuliner Lokal:</p>
                                <ul class="small text-muted ps-3 mb-3">
                                    <li>Menu favorit: <strong>Ikan bakar segar</strong>, <strong>kelapa muda</strong>, dan
                                        <strong>makanan khas Sasak</strong>
                                    </li>
                                    <li>Disajikan di warung-warung pinggir pantai dengan suasana santai</li>
                                    <li>Tersedia juga minuman dingin dan camilan lokal</li>
                                </ul>

                                <p class="mb-2 fw-bold text-success">🎯 Aktivitas Favorit:</p>
                                <ul class="small text-muted ps-3 mb-3">
                                    <li>Snorkeling & berenang di air jernih</li>
                                    <li>Berfoto di <strong>Bukit Merese</strong> dengan panorama laut</li>
                                    <li>Menikmati pasir unik dua tekstur</li>
                                    <li>Bersantai di bawah payung atau bean bag</li>
                                </ul>

                                <p class="small text-muted">
                                    🛵 <strong>Akses:</strong> ±10–15 menit dari Pantai Kuta Mandalika, mudah diakses dengan
                                    motor atau mobil pribadi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Mawun -->
                <div class="col-md-4" id="pantai-mawun">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <a href="{{ route('map') }}">
                            <img src="{{ asset('storage/images/1750324812_point.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Pantai Mawun">
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Mawun</h5>
                            <p class="small mb-2 text-warning">🌟 Rating: 4.6/5</p>
                            <p class="card-text">
                                Terletak di <strong>Lombok Tengah</strong>, pantai ini terkenal dengan <strong>bentuk teluk
                                    melengkung</strong> seperti tapal kuda, pasir putih lembut, dan dua bukit hijau yang
                                mengapitnya. Cocok untuk kamu yang ingin <strong>berelaksasi di tempat tenang</strong>.
                            </p>

                            <button class="btn btn-sm btn-outline-success rounded-pill mt-auto mb-2" type="button"
                                data-bs-toggle="collapse" data-bs-target="#detailMawun" aria-expanded="false"
                                aria-controls="detailMawun">
                                Lihat Selengkapnya
                            </button>

                            <div class="collapse pt-3" id="detailMawun">
                                <p class="mb-2 fw-bold text-success">✅ Fasilitas Umum:</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge border border-success text-success px-3 py-2">Gazebo</span>
                                    <span class="badge border border-success text-success px-3 py-2">Warung Lokal</span>
                                    <span class="badge border border-success text-success px-3 py-2">Area Parkir</span>
                                </div>

                                <p class="mb-2 fw-bold text-success">🍴 Kuliner Lokal:</p>
                                <ul class="small text-muted ps-3 mb-3">
                                    <li>Menyediakan <strong>mie goreng</strong>, <strong>kelapa muda</strong>, dan camilan
                                        ringan</li>
                                    <li>Hidangan disajikan oleh warung sederhana di pinggir pantai</li>
                                </ul>

                                <p class="mb-2 fw-bold text-success">🎯 Aktivitas Favorit:</p>
                                <ul class="small text-muted ps-3 mb-3">
                                    <li>Berenang di laut yang jernih dan tenang</li>
                                    <li>Berjalan santai dan menikmati panorama dua bukit</li>
                                    <li>Menikmati sunset alami dari pinggir pantai</li>
                                    <li>Berfoto dengan latar belakang teluk dan bukit</li>
                                </ul>

                                <p class="small text-muted">
                                    🛵 <strong>Akses:</strong> ±1 jam dari Bandara Internasional Lombok (ZAM), ±30 menit
                                    dari Kuta Mandalika. Jalan cukup baik namun ada beberapa titik berbatu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD Pink Beach -->
                <div class="col-md-4" id="pink-beach">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <a href="{{ route('map') }}">
                            <img src="{{ asset('storage/images/1750247169_point.jpg') }}" class="card-img-top rounded-top-4"
                                alt="Pink Beach (Pantai Tangsi)">
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pink Beach (Pantai Tangsi)</h5>
                            <p class="small mb-2 text-warning">🌟 Rating: 4.2/5</p>
                            <p class="card-text">
                                Terletak di <strong>Lombok Timur</strong>, pantai ini dikenal karena <strong>pasir merah
                                    muda alaminya</strong> yang langka di dunia. Suasana tenang dan air laut biru toska
                                menjadikannya destinasi sempurna untuk menyepi dan menikmati alam.
                            </p>

                            <button class="btn btn-sm btn-outline-success rounded-pill mt-auto mb-2" type="button"
                                data-bs-toggle="collapse" data-bs-target="#detailPinkBeach" aria-expanded="false"
                                aria-controls="detailPinkBeach">
                                Lihat Selengkapnya
                            </button>

                            <div class="collapse pt-3" id="detailPinkBeach">
                                <p class="mb-2 fw-bold text-success">✅ Fasilitas Umum:</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge border border-success text-success px-3 py-2">Area Parkir</span>
                                    <span class="badge border border-success text-success px-3 py-2">Gazebo</span>
                                    <span class="badge border border-success text-success px-3 py-2">Toilet</span>
                                    <span class="badge border border-success text-success px-3 py-2">Warung Lokal</span>
                                    <span class="badge border border-success text-success px-3 py-2">Sewa Perahu</span>
                                    <span class="badge border border-success text-success px-3 py-2">Spot Foto Alam</span>
                                </div>

                                <p class="mb-2 fw-bold text-success">🍴 Kuliner Lokal:</p>
                                <ul class="small text-muted ps-3 mb-3">
                                    <li><strong>Warung lokal</strong>: ikan bakar segar, nasi campur Lombok</li>
                                    <li><strong>Minuman</strong>: kelapa muda, es teh</li>
                                    <li><strong>Tips</strong>: Bawa bekal tambahan karena warung bisa tutup lebih awal</li>
                                </ul>

                                <p class="mb-2 fw-bold text-success">🎯 Aktivitas Favorit:</p>
                                <ul class="small text-muted ps-3 mb-3">
                                    <li>Foto-foto di pasir pink unik</li>
                                    <li>Snorkeling & berenang di air jernih</li>
                                    <li>Tracking ke <strong>Bukit Tangsi</strong></li>
                                    <li>Island hopping ke Gili Petelu & Pantai Segui</li>
                                </ul>

                                <p class="small text-muted">
                                    🛵 <strong>Akses:</strong> ±85 km dari Mataram (2,5–3 jam). Rute: Praya – Jerowaru –
                                    Sekaroh. Sebagian jalan berbatu, disarankan pakai double cabin atau motor trail saat
                                    musim hujan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: Destinasi Waduk di Lombok -->
                <section>
                    <h4 class="fw-semibold text-success mb-4">🌊 Bendungan di Lombok</h4>
                    <div class="row g-4">
                        <!-- CARD Bendungan Pengga -->
                        <div class="col-md-4" id="bendungan-pengga">
                            <div class="card border-0 shadow rounded-4 h-100">
                                <a href="{{ route('map') }}">
                                    <img src="{{ asset('storage/images/1750497661_polygon.jpg') }}"
                                        class="card-img-top rounded-top-4" alt="Bendungan Pengga">
                                </a>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold text-success">Bendungan Pengga</h5>
                                    <p class="small mb-2 text-warning">🌟 Rating: 4.4/5</p>
                                    <p class="card-text">
                                        Terletak di <strong>Lombok Tengah</strong>, Bendungan Pengga dibangun tahun 1991 dan
                                        berkapasitas 21 juta m³.
                                        Selain sebagai penyedia air irigasi dan air baku KEK Mandalika, bendungan ini juga
                                        menjadi tempat rekreasi alami
                                        dengan pemandangan perbukitan hijau dan suasana sejuk.
                                    </p>

                                    <button class="btn btn-sm btn-outline-success rounded-pill mt-auto mb-2"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#detailPengga"
                                        aria-expanded="false" aria-controls="detailPengga">
                                        Lihat Selengkapnya
                                    </button>

                                    <div class="collapse pt-3" id="detailPengga">
                                        <p class="mb-2 fw-bold text-success">✅ Fasilitas Umum:</p>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge border border-success text-success px-3 py-2">Area
                                                Parkir</span>
                                            <span class="badge border border-success text-success px-3 py-2">Spot
                                                Memancing</span>
                                            <span class="badge border border-success text-success px-3 py-2">Area
                                                Hijau</span>
                                            <span class="badge border border-success text-success px-3 py-2">Tempat
                                                Santai</span>
                                        </div>

                                        <p class="mb-2 fw-bold text-success">🎯 Fungsi & Daya Tarik:</p>
                                        <ul class="small text-muted ps-3 mb-3">
                                            <li>Penyedia air irigasi & air baku KEK Mandalika</li>
                                            <li>Pemandangan alam dengan perbukitan hijau</li>
                                            <li>Tempat memancing & bersantai</li>
                                            <li>Potensi pengembangan wisata edukatif</li>
                                        </ul>

                                        <p class="small text-muted">
                                            🚗 <strong>Akses:</strong> ±30 menit dari Kota Praya dan ±1 jam dari Mandalika.
                                            Akses jalan baik untuk motor
                                            maupun mobil.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CARD Bendungan Pandanduri -->
                        <div class="col-md-4" id="bendungan-pandanduri">
                            <div class="card border-0 shadow rounded-4 h-100">
                                <a href="{{ route('map') }}">
                                    <img src="{{ asset('storage/images/1750499791_polygon.jpg') }}"
                                        class="card-img-top rounded-top-4" alt="Bendungan Pandanduri">
                                </a>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold text-success">Bendungan Pandanduri</h5>
                                    <p class="small mb-2 text-warning">🌟 Rating: 4.3/5</p>
                                    <p class="card-text">
                                        Terletak di <strong>Lombok Timur</strong>, Bendungan Pandanduri dibangun antara
                                        tahun 2011–2014 dan memiliki kapasitas tampung 27 juta m³. Berfungsi sebagai sumber
                                        irigasi untuk lebih dari 10.000 hektar lahan, bendungan ini juga menawarkan potensi
                                        wisata alam yang tenang dan asri.
                                    </p>

                                    <button class="btn btn-sm btn-outline-success rounded-pill mt-auto mb-2"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#detailPandanduri"
                                        aria-expanded="false" aria-controls="detailPandanduri">
                                        Lihat Selengkapnya
                                    </button>

                                    <div class="collapse pt-3" id="detailPandanduri">
                                        <p class="mb-2 fw-bold text-success">✅ Fasilitas Umum:</p>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge border border-success text-success px-3 py-2">Area
                                                Parkir</span>
                                            <span class="badge border border-success text-success px-3 py-2">Jalur
                                                Tracking</span>
                                            <span class="badge border border-success text-success px-3 py-2">Spot
                                                Foto</span>
                                            <span class="badge border border-success text-success px-3 py-2">Area
                                                Santai</span>
                                        </div>

                                        <p class="mb-2 fw-bold text-success">🎯 Fungsi & Daya Tarik:</p>
                                        <ul class="small text-muted ps-3 mb-3">
                                            <li>Menyalurkan air irigasi ke ±10.398 hektar lahan pertanian</li>
                                            <li>Luas genangan mencapai 315,7 hektar</li>
                                            <li>Dikelilingi perbukitan & pemandangan hijau</li>
                                            <li>Cocok untuk rekreasi ringan & wisata edukasi</li>
                                        </ul>

                                        <p class="small text-muted">
                                            🚗 <strong>Akses:</strong> ±25 menit dari Kota Selong. Jalan menuju bendungan
                                            cukup baik dan dapat diakses kendaraan pribadi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CARD Bendungan Batujai -->
                        <div class="col-md-4" id="bendungan-batujai">
                            <div class="card border-0 shadow rounded-4 h-100">
                                <a href="{{ route('map') }}">
                                <img src="{{ asset('storage/images/1750499124_polygon.jpg') }}"
                                    class="card-img-top rounded-top-4" alt="Bendungan Batujai">
                                </a>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold text-success">Bendungan Batujai</h5>
                                    <p class="small mb-2 text-warning">🌟 Rating: 4.4/5</p>
                                    <p class="card-text">
                                        Berlokasi di <strong>Lombok Tengah</strong>, Bendungan Batujai merupakan bendungan
                                        terbesar di NTB yang dibangun tahun 1977–1982. Berfungsi sebagai irigasi, pengendali
                                        banjir, dan sumber air baku, tempat ini juga menjadi lokasi rekreasi favorit warga
                                        dengan pemandangan yang asri dan suasana sore yang tenang.
                                    </p>

                                    <button class="btn btn-sm btn-outline-success rounded-pill mt-auto mb-2"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#detailBatujai"
                                        aria-expanded="false" aria-controls="detailBatujai">
                                        Lihat Selengkapnya
                                    </button>

                                    <div class="collapse pt-3" id="detailBatujai">
                                        <p class="mb-2 fw-bold text-success">✅ Fasilitas Umum:</p>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge border border-success text-success px-3 py-2">Area
                                                Parkir</span>
                                            <span class="badge border border-success text-success px-3 py-2">Tempat
                                                Duduk</span>
                                            <span class="badge border border-success text-success px-3 py-2">Pedagang Kaki
                                                Lima</span>
                                            <span class="badge border border-success text-success px-3 py-2">Jalur
                                                Santai</span>
                                        </div>

                                        <p class="mb-2 fw-bold text-success">🎯 Fungsi & Daya Tarik:</p>
                                        <ul class="small text-muted ps-3 mb-3">
                                            <li>Mengairi ±3.350 hektar lahan pertanian</li>
                                            <li>Menurunkan debit banjir dari 1.332 → 764 m³/detik</li>
                                            <li>Luas genangan ±890 hektar & kapasitas tampung 18,2 juta m³</li>
                                            <li>Sering dikunjungi untuk rekreasi sore hari</li>
                                        </ul>

                                        <p class="small text-muted">
                                            🛣️ <strong>Akses:</strong> ±30 menit dari Bandara Internasional Lombok. Jalan
                                            utama menuju lokasi dapat dilalui mobil & motor dengan kondisi baik.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <style>
                .badge-pill {
                    border-radius: 50rem;
                    font-weight: 500;
                    font-size: 0.85rem;
                    background-color: #e8f5e9;
                    transition: all 0.2s;
                }

                .badge-pill:hover {
                    background-color: #c8e6c9;
                    cursor: default;
                }

                .card-img-top {
                    height: 200px;
                    object-fit: cover;
                    object-position: center;
                }
            </style>
        @endsection
