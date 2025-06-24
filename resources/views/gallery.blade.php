@extends('layout.template')

@section('content')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <div class="container py-5" style="font-family: 'Poppins', sans-serif;">
        <h2 class="fw-bold text-success text-center mb-5">Galeri Wisata Lombok</h2>

        <!-- SECTION 1: Pantai -->
        <section class="mb-5">
            <h4 class="fw-semibold text-success mb-4">🏖️ Pantai Indah di Lombok</h4>
            <div class="row g-4">
                <!-- CARD Pantai Tanjung Aan -->
                <div class="col-md-4" id="pantai-tanjung-aan">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750323234_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Tanjung Aan">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Tanjung Aan</h5>
                            <p class="card-text">
                                Desa Kuta, Kecamatan Pujut, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Kuta Mandalika -->
                <div class="col-md-4" id="pantai-kuta-mandalika">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750321738_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Kuta Mandalika">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Kuta Mandalika</h5
                            <p class="card-text">
                                Desa Kuta, Kecamatan Pujut, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Mawun -->
                <div class="col-md-4" id="pantai-mawun">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750324812_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Mawun">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Mawun</h5>
                            <p class="card-text">
                                Jl. Raya Mawun, Desa Tumpak, Kecamatan Pujut, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Sire -->
                <div class="col-md-4" id="pantai-sire">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750320010_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Sire">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Sire</h5>
                            <p class="card-text">
                                Desa Sire, Kecamatan Tanjung, Kabupaten Lombok Utara, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Mentigi -->
                <div class="col-md-4">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750321070_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Mentigi">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Mentigi</h5>
                            <p class="card-text">
                                Desa Malaka, Kecamatan Pemenang, Kabupaten Lombok Utara, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pink Beach -->
                <div class="col-md-4" id="pink-beach">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750247169_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pink Beach (Pantai Tangsi)">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pink Beach (Pantai Tangsi)</h5>
                            <p class="card-text">
                                Dusun Temeak, Desa Serewe, Kecamatan Jerowaru, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Tanjung Bloam -->
                <div class="col-md-4" id="pantai-bloam">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750247299_point.jpeg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Tanjung Bloam">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Tanjung Bloam</h5>
                            <p class="card-text">
                                Dusun Tangsi, Temeak, Desa Sekaroh, Kecamatan Jerowaru, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Senggigi -->
                <div class="col-md-4" id="pantai-senggigi">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750323866_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Senggigi">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Senggigi</h5>
                            <p class="card-text">
                                Desa Senggigi, Kecamatan Batu Layar, Kabupaten Lombok Barat, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Ampenan -->
                <div class="col-md-4" id="pantai-ampenan">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750695092_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Senggigi">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Ampenan</h5>
                            <p class="card-text">
                                Jl. Pabean, Kecamatan Ampenan, Kota Mataram, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Loang Baloq -->
                <div class="col-md-4" id="pantai-loang-baloq">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage\images\1750249352_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Loang Baloq">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Loang Baloq</h5>
                            <p class="card-text">
                                Kelurahan Tanjung Karang, Kecamatan Sekarbela, Kota Mataram, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Meninting -->
                <div class="col-md-4" id="pantai-meninting">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750695733_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Meninting">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Meninting</h5>
                            <p class="card-text">
                                Kampung Kongok, Desa Meninting, Kecamatan Ampenan Utara, Kota Mataram, Provinsi Nusa Tenggara Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Kaliantan -->
                <div class="col-md-4" id="pantai-kaliantan">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750247477_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Kaliantan">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Kaliantan</h5>
                            <p class="card-text">
                                Dusun Kaliantan, Desa Seriwe, Kecamatan Jerowaru, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Mekaki -->
                <div class="col-md-4" id="pantai-mekaki">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750247578_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Mekaki">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Mekaki</h5>
                            <p class="card-text">
                                Jl. Raya Mekaki, Pelangan, Kecamatan Sekotong, Kabupaten Lombok Barat, Provinsi Nusa Tenggara Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Cemare Lembar -->
                <div class="col-md-4" id="pantai-cemare-lembar">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750248280_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Cemare Lembar">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Cemare Lembar</h5>
                            <p class="card-text">
                                Dusun Cemare, Desa Lembar Selatan, Kecamatan Lembar, Kabupaten Lombok Barat, Provinsi Nusa Tenggara Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Labuhan Haji -->
                <div class="col-md-4" id="pantai-labuhan-haji">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750248564_point.jpeg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Labuhan Haji">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Labuhan Haji</h5>
                            <p class="card-text">
                                Desa Labuhan Haji, Kecamatan Labuhan Haji, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Duduk -->
                <div class="col-md-4" id="pantai-duduk">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750248696_point.jpeg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Duduk">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Duduk</h5>
                            <p class="card-text">
                                Labuhan Lombok, Kecamatan Pringgabaya, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Ketapang Tampes -->
                <div class="col-md-4" id="pantai-ketapang-tampes">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750248876_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Ketapang Tampes">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Ketapang Tampes</h5>
                            <p class="card-text">
                                Jl. Raya Bayan, Selengen, Kecamatan Kayangan, Kabupaten Lombok Utara, Provinsi Nusa Tenggara Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Pantai Penyisok -->
                <div class="col-md-4" id="pantai-penyisok">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750249352_point.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Pantai Penyisok">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Pantai Penyisok</h5>
                            <p class="card-text">
                                Desa Sekaroh, Kecamatan Jerowaru, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: Bendungan -->
        <section>
            <h4 class="fw-semibold text-success mb-4">🌊 Bendungan di Lombok</h4>
            <div class="row g-4">
                <!-- CARD Bendungan Pengga -->
                <div class="col-md-4" id="bendungan-pengga">
                    <div class="card border-0 shadow rounded-4 h-100">
                            <img src="{{ asset('storage/images/1750497661_polygon.jpg') }}"
                                class="card-img-top rounded-top-4" alt="Bendungan Pengga">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Bendungan Pengga</h5>
                            <p class="card-text">
                                Desa Pelambik, Kecamatan Praya Barat Daya, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Bendungan Pandanduri -->
                <div class="col-md-4" id="bendungan-pandanduri">
                    <div class="card border-0 shadow rounded-4 h-100">
                            <img src="{{ asset('storage/images/1750499791_polygon.jpg') }}"
                                class="card-img-top rounded-top-4" alt="Bendungan Pandanduri">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Bendungan Pandanduri</h5>
                            <p class="card-text">
                                DAS Palung, Desa Suwangi, Kecamatan Sakra, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Bendungan Batujai -->
                <div class="col-md-4" id="bendungan-batujai">
                    <div class="card border-0 shadow rounded-4 h-100">
                            <img src="{{ asset('storage/images/1750499124_polygon.jpg') }}"
                                class="card-img-top rounded-top-4" alt="Bendungan Batujai">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Bendungan Batujai</h5>
                            <p class="card-text">
                                Desa Batujai, Kecamatan Praya Barat, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD Danau Loang Baloq -->
                <div class="col-md-4" id="danau-loang-baloq">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <img src="{{ asset('storage/images/1750695534_polygon.jpg') }}" class="card-img-top rounded-top-4"
                            alt="Danau Loang Baloq">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-success">Danau Loang Baloq</h5>
                            <p class="card-text">
                                Kelurahan Tanjung Karang, Kecamatan Sekarbela, Kota Mataram, Provinsi Nusa Tenggara Barat, Indonesia.
                            </p>
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
