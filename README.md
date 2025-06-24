# 🌿 Savana Raya - Sistem Informasi Geospasial Pariwisata Lombok

**Savana Raya** adalah platform edukatif berbasis web yang menyajikan informasi spasial mengenai destinasi wisata di Pulau Lombok. Aplikasi ini dirancang untuk membantu pengguna mengeksplorasi lokasi wisata berdasarkan titik koordinat, area wisata, rute perjalanan, serta informasi atribut pendukung lainnya.

---

## 🔥 Keunggulan Proyek

- Menyajikan data spasial interaktif berbasis peta (Leaflet.js).
- Dilengkapi fitur popup, geolocation, digitasi/menambahkan data pariwisata titik area dan rute perjalanan wisata, filter, dan tampilan data tabular.
- Memberikan rute rekomendasi wisata berdasarkan wilayah geografis (Lombok Timur, Lombok Tengah, Lombok Barat, Lombok Utara, dan Mataram).
- Tampilan user-friendly dengan tema hijau alami.
- Akses data terbuka dari Ina-Geoportal, BPS, dan sumber open data lainnya.

---

## 🧩 Fitur yang Disediakan

- 🌍 **Peta Interaktif**: Menampilkan data point, polyline, dan polygon lokasi wisata.
- 📊 **Tabel Data Wisata**: Menyediakan informasi detail dalam format tabel yang dapat diurutkan dan dicari menjadikannya lebih interaktif dan fleksibel.
- 🧭 **Rute Perjalanan**: Menampilkan rekomendasi perjalanan dari Bandara ke beberapa destinasi wisata menurut Kabupaten/Kota di Pulau Lombok.
- 📷 **Galeri Wisata & Rekomendasi Wisata**: Kumpulan foto dari berbagai destinasi populer dan rekomendasi wisata menurut Savana Raya.
- 🔐 **Autentikasi Pengguna**: Login untuk akses fitur data (hanya admin).
- 📁 **API Terbuka**: Endpoint data spasial dapat diakses dalam format GeoJSON.

---

## 🛠️ Teknologi yang Digunakan

- **Laravel** (Backend Framework)
- **Leaflet.js** (Peta Interaktif)
- **Bootstrap 5** & Tailwind CSS (Tampilan Responsif)
- **Font Awesome** (Ikon)
- **PostgreSQL + PostGIS + dBeaver** (Database spasial)
- **GeoServer** (Web Map Service - WMS)
- **OpenStreetMap + Esri World Imagery + CartoDB Positron** (Base map)

---

> Dikembangkan dengan semangat eksplorasi dan cinta terhadap keindahan alam Lombok.  
> Oleh: Shelamita Amanah Wibowo [23/517749/SV/22825]



## **Dokumentasi Laravel**  
Untuk informasi lebih lanjut tentang Laravel, kunjungi [Laravel Docs](https://laravel.com/docs).  

## **Cara Menggunakan**  
### 1. Clone repository ini  
```sh
git clone https://github.com/shelamita/pgwebl.git
cd pgwebl
```

### 2. Install dependensi  
```sh
composer install
npm install
```

### 3. Konfigurasi file `.env`  
- Salin file `.env.example` menjadi `.env`  
  ```sh
  cp .env.example .env
  ```
- Atur konfigurasi database di file `.env`  
- Generate application key  
  ```sh
  php artisan key:generate
  ```

### 4. Jalankan migrasi database  
```sh
php artisan migrate
```

### 5. Jalankan aplikasi  
```sh
php artisan serve
```
Aplikasi akan berjalan di `http://127.0.0.1:8000`
