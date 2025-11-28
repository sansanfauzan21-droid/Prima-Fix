@extends('frontend.layouts.main')

@push('hero')
    <section class="hero-section inner-page">
        <svg width="0" height="0">
    <defs>
        <clipPath id="hero-clip" clipPathUnits="objectBoundingBox">
            <path 
    d="M0,0 L1,0 L1, 0.85  
    C0.9, 0.90 0.7, 0.90 0.5, 0.85  
    C0.3, 0.80 0.1, 0.85 0, 0.88 Z" 
/>
</clipPath>
    </defs>
</svg>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">
                                Wilayah Operasional</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@push('styles')
<style>
    :root {
        /* Warna Biru Cemerlang Anda */
        --primary-blue-custom: #31bdf0;
        --dark-bg: #151415;
        --light-grey: #f8f9fa;
        --accent-orange: #FFA500; /* Warna Ikon */
        --secondary-blue: #007bff;
        --dark-blue-gradient: #0056b3;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--light-grey);
        color: #333;
    }

    .section-heading {
        color: var(--secondary-blue);
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    /* Gradasi Intro Card */
    .intro-card {
        background: linear-gradient(135deg, var(--dark-bg) 10%, var(--primary-blue-custom) 50%, var(--dark-bg) 100%);
        color: white;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        padding: 30px;
    }

    .slo-card {
        border-radius: 15px;
        background: linear-gradient(135deg, #ffffff 0%, #e9ecef 100%);
        color: #333;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        border: 1px solid rgba(0, 0, 0, 0.1);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .slo-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    /* CARD HEADER YANG SUDAH DIMODIFIKASI */
    .slo-card .card-header {
        /* MENGGUNAKAN GRADASI LATAR BELAKANG */
        background: linear-gradient(135deg, var(--dark-bg) 10%, var(--primary-blue-custom) 50%, var(--dark-bg) 100%);

        /* Hapus 'color: white;' agar warna ikon dan teks bisa diatur terpisah */
        font-weight: bold;
        padding: 1rem;
        border-bottom: none;
        text-align: center;
        font-size: 1.1em;
    }

    /* KELAS BARU UNTUK IKON */
    .header-icon {
        color: rgba(255, 128, 0, 1); /* Warna Ikon (Orange) */
        display: block;
        margin-bottom: 0.25rem;
    }

    /* KELAS BARU UNTUK TEKS */
    .header-text {
        color: white; /* Warna Teks (Putih) */
    }

    .slo-card .card-body {
        padding: 1.5rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .slo-card .card-text {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
        text-align: left;
    }
    .slo-card .card-text li {
        margin-bottom: 0.5rem;
        padding-left: 1.5rem;
        position: relative;
    }
    .slo-card .card-text li::before {
        content: "\f00c";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        color: var(--accent-orange);
        position: absolute;
        left: 0;
        top: 0.1em;
        font-size: 0.9em;
    }

    /* Media Query untuk Mobile */
    @media (max-width: 767px) {
        .intro-card {
            padding: 20px 15px;
        }
        .intro-card .lead {
            font-size: 1.1em !important;
        }
        .slo-card .card-header {
            font-size: 1em;
        }
        .slo-card .card-body {
            padding: 1rem;
        }
    }
</style>
@endpush

@section('content')

    <section class="section pt-5 pb-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-10">
                    <h2 class="section-heading">Wilayah Operasional</h2>
                    <div class="card shadow-lg p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border: none; border-radius: 15px;">
                        <p class="lead mb-3" style="font-size: 1.2em; line-height: 1.6; color: #333;">
                            Wilayah Operasi Pelaksanaan Inspeksi Pemeriksaan dan<br>
                            Pengujian PT ALIANSI PRIMA ENERGI mencakup keseluruhan<br>
                            wilayah Negara Kesatuan Republik Indonesia.
                        </p>
                        <p class="text-muted" style="font-style: italic; font-size: 1em; line-height: 1.5;">
                            The operational area for inspection, examination, and testing<br>
                            of PT ALIANSI PRIMA ENERGI covers the entire territory of the<br>
                            Unitary State of the Republic of Indonesia.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <img src="{{ asset('assets/img/petaindo.png') }}" alt="Peta Wilayah Operasional Indonesia" class="img-fluid" style="width: 100%; height: auto; max-height: 400px; object-fit: cover; background: transparent;">
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-md-8 text-center">
                    <div class="alert alert-info">
                        <h5>Komitmen Kami</h5>
                        <p>Di mana pun lokasi proyek Anda, tim profesional Aliansi Prima Energi siap memberikan pelayanan terbaik dengan standar kualitas internasional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 text-center">
                    <a href="{{ route('frontend.services.slo') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-external-link-alt me-2"></i> Lihat Detail SLO
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
