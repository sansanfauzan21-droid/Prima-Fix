<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <link href="{{ asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
 <title>{{ $title }} |
{{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'Pt. Aliansi Prima Energi' }}
 </title>
 <meta content="" name="description">
 <meta content="" name="keywords">

<link
href="{{ CompanyHelper::get() && CompanyHelper::get()['ico'] ? asset('storage/' . CompanyHelper::get()['ico']) : asset('assets/img/logo.png') }}"
rel="icon">
 <link
href="{{ CompanyHelper::get() && CompanyHelper::get()['logos'] ? asset('storage/' . CompanyHelper::get()['logos']) : asset('assets/img/Kuroyasha.png') }}"
rel="apple-touch-icon">

<link
href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
rel="stylesheet">

<link href="{{ asset('assets/frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/assets/css/style.css') }}" rel="stylesheet">

    <style>
    /* 1. PENGATURAN BACKGROUND BODY (FULL IMAGE) */
    body {
        /* Pertahankan background image Anda */
        background-image: url("{{ asset('assets/img/background-fix.png') }}");

        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-position: center center;

        /* Warna cadangan */
        background-color: #f0f0f0;

        /* Hapus warna teks default body, biarkan CSS spesifik menentukan warna */
        color: initial;
    }

    /* 2. MEMBUAT ELEMEN UTAMA TRANSPARAN */
    /* Ini hanya untuk area yang seharusnya kosong, bukan kotak konten */
    #main, 
    .section, 
    .container, 
    .row {
        background-color: transparent !important; 
    }

    /* 3. MENGEMBALIKAN BACKGROUND SOLID KE KOTAK KONTEN AGAR TEKS TERBACA */
    
    /* Blok Komitmen dan Layanan Utama (yang sebelumnya bg-light) */
    .feature-1 .bg-light, 
    .d-flex.justify-content-center > div.bg-light {
        background-color: #ffffff !important; /* Kembalikan ke putih solid */
        color: #333 !important; /* Kembalikan warna teks default */
    }

    /* Blok Menu Link (yang sebelumnya bg-white) */
    .bg-white.border.rounded.mb-4.shadow-sm,
    .list-group-item {
        background-color: #ffffff !important; /* Kembalikan ke putih solid */
        color: #333 !important; /* Kembalikan warna teks default */
        /* Pastikan teks yang tadinya text-gray-700/small kembali ke warna aslinya */
    }
    /* 4. MENGATUR ULANG WARNA TEKS UNTUK JUDUL UTAMA DI ATAS KOTAK */
    /* Ini adalah teks PT ALIANSI PRIMA ENERGI dan paragraf deskripsi */
    h1.text-primary, 
    p.text-gray-700.lead {
        /* Set warna kontras, misalnya putih atau kuning, di atas background gambar Anda */
        color: #ffffff !important; 
        text-shadow: 1px 1px 3px rgba(0,0,0,0.8); /* Tambah bayangan agar terbaca */
    }

    /* 5. MENGATUR ULANG WARNA TEKS DAN ICON DI DALAM KOTAK PUTIH */
    /* Pastikan warna teks/ikon di dalam kotak putih kembali ke warna default Bootstrap */
    .text-gray-700, .small.text-muted, .text-dark {
        color: inherit !important; /* Menggunakan warna dari elemen parent (yaitu #333) */
    }
    .text-success { color: #28a745 !important; }
    .text-primary { color: #007bff !important; }
    .text-info { color: #17a2b8 !important; }
    
    /* Pertahankan warna solid pada header Menu Link dan Swiper */
    .swiper.logoSwiper {
        background-color: #002364 !important;
    }
    .bg-white h5, .bg-secondary h5 {
        background-color: #002364 !important;
        color: #ffffff !important;
    }

    /* Smooth scrolling untuk anchor links */
    html {
        scroll-behavior: smooth;
    }

</style>
@stack('styles')
</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center">
<div class="container d-flex justify-content-between align-items-center">


 <div class="logo">
 <h1 class="m-0 text-uppercase">
<a href="{{ route('frontend.home.index') }}" class="company-logo-link d-flex align-items-center">
 
 <img src="{{ CompanyHelper::get() && CompanyHelper::get()['logos'] ? asset('storage/' . CompanyHelper::get()['logos']) : asset('assets/img/logo.png') }}"
 alt="Logo" class="logo-img me-2">
 
 @if (CompanyHelper::get() && CompanyHelper::get()['nickname'])
{{ CompanyHelper::get()['nickname'] }}
 @else
<span class="logo-text-container">
 <span class="text-lg" style="color: #FFA500;">Aliansi</span><br>
 <span class="text-sm" style="color: #FFFFFF;">Prima Energi</span>
</span>
 @endif
 
</a>
 </h1>
</div>

 @include('frontend.layouts.nav')</div>
 </header>@stack('hero')
<main id="main">

@yield('content')

 </main>@include('frontend.layouts.footer')

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
 class="bi bi-arrow-up-short"></i></a>

<script src="{{ asset('assets/frontend/assets/vendor/aos/aos.js') }}"></script>
 <script src="{{ asset('assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>
<script>
        AOS.init({
            // Opsional: atur durasi (dalam ms), dari 0 sampai 3000
            duration: 1000,
            // Opsional: atur seberapa banyak elemen harus masuk ke viewport sebelum animasi dimulai (dari 0 hingga 1)
            once: true, // Animasi hanya terjadi sekali (setelah load)
        });
    </script>
@stack('scripts')
</body>

</html>