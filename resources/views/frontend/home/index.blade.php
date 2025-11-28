@extends('frontend.layouts.main')

@push('hero')
    <section class="hero-section" id="hero">
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
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right"
    style="
        /* 1. Terapkan Background Gradient: Biru Tua ke Emas Pudar */
        background: -webkit-linear-gradient(top, #fd0000ff, #fc9608ff); /* WebKit */
        background: linear-gradient(to bottom, #ffe8c1ff, #eaa442ff); /* Standar */
        -webkit-background-clip: text;
        background-clip: text;

        /* 3. Jadikan teks transparan agar gradasi terlihat */
        -webkit-text-fill-color: transparent;
        color: transparent;

        /* Tambahkan font-weight atau font-size jika diperlukan */
        font-weight: bold;
    ">
    {{ $heroTitle ? $heroTitle->content : 'Selamat Datang di Aliansi Profilewdwasd' }}
</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">
                                {{ $heroSubtitle ? $heroSubtitle->content : 'STEP INTO THE FUTURE SAFELY.' }}
                            </p>
                            <style>
                            .btn-custom-hover {
                                padding: 10px 25px !important;
                                border: 2px solid #FFFFFF !important;
                                color: #FFFFFF !important;
                                background-color: transparent !important;
                                border-radius: 5px;
                                transition: all 0.3s ease;
                                /* PENAMBAHAN: Membuat teks lebih besar */
                                font-size: 1.2rem; /* Anda bisa coba 1.3rem, 1.4rem, dst. */
                            }

                            /* Gaya saat kursor melewatinya (Full Background Hover) */
                            .btn-custom-hover:hover {
                                background-color: #0d47a1 !important; /* Ganti dengan warna biru solid saat hover */
                                border-color: #ffae00ff !important; /* Border ikut warna biru */
                                color: #ffaa00ff !important; /* Pastikan teks tetap putih */
                                box-shadow: 0 4px 8px rgba(255, 196, 0, 0.99);
                            }
                            </style>
                         <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                        <a href="#main"
                        class="btn btn-outline-white btn-custom-hover">Mulai</a>
                         </p>
                        </div>
                        <div class="col-lg-4 text-center text-lg-end">
                            <img src="{{ asset('assets/img/logo.png') }}"
                                alt="Hero Image" data-aos="fade-right"
                                style="object-fit: contain; width: 350px; height: 350px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    @include('frontend.home.about')


@endsection
