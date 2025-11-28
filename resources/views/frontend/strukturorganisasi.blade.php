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
                                Struktur Organisasi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    <style>
    /* ... CSS Wajib untuk Filtering ... */
    
    /* MENGUBAH STYLE team-member (Wajib) */
    .team-member {
        position: relative;
        padding-bottom: 20px;
        /* Tambahkan display: flex dan flex-direction: column */
        display: flex;
        flex-direction: column;
        height: 100%; /* Memastikan ia mengambil tinggi penuh dari swiper-slide */
    }
    
    /* MENGUBAH STYLE CONTAINER GAMBAR (Wajib) */
    .member-img-container {
        /* Set tinggi minimum agar semua gambar memiliki ruang vertikal yang sama */
        min-height: 250px; /* Sesuaikan nilai ini agar sesuai dengan foto tim Anda yang tertinggi */
        width: 100%;
        display: flex;
        align-items: center; /* Pusatkan gambar secara vertikal */
        justify-content: center; /* Pusatkan gambar secara horizontal */
        flex-grow: 1; /* Biarkan container gambar mengambil ruang yang tersisa */
    }

    /* Style Gambar dan Tag Posisi (Lainnya tetap) */
    .member-img-container img { 
        width: 100%; 
        max-height: 250px; /* Batasi tinggi gambar agar tidak melebihi min-height container */
        height: auto; 
        object-fit: contain; /* Memastikan gambar tidak terpotong */
        border-radius: 10px; 
    }
    
    /* KOREKSI POSISI TAG JABATAN */
    .position-tag {
        /* Karena member-info sekarang relative, kita harus mengubah posisi tag */
        position: absolute;
        bottom: 5px; /* Posisikan 5px dari bawah member-info */
        left: 50%;
        transform: translateX(-50%);
        /* ... styling lainnya ... */
    }
    
    /* ... CSS Swiper Scrollbar lainnya ... */
    /* Kunci: Menyembunyikan slide yang tidak aktif secara paksa */
.swiper-slide.hidden-slide {
    display: none !important;
    visibility: hidden;
    width: 0 !important; 
    height: 0 !important;
}
.swiper-wrapper.filtering {
    transition-duration: 0ms !important;
}
.hero-section-container {
        /* Memastikan section mengambil tinggi minimal penuh layar */
        min-height: 100vh; 
        display: flex;
        align-items: center; /* Untuk memusatkan konten secara vertikal */
    }
    /* KOREKSI UTAMA: Memberikan Ruang Teks yang Cukup */
/* MENGUBAH STYLE KOTAK NAMA */
.member-info {
    position: relative; 
    
    /* Ganti background: black/white */
    background-color: white; /* Atur background atas menjadi Putih */
    
    /* KUNCI 1: Border Radius Penuh di Atas dan Bawah */
    border-radius: 10px !important; 
    
    padding-top: 5px;
    
    /* KOREKSI: PADDING BAWAH HARUS DIBERIKAN RUANG BESAR UNTUK KOTAK ORANYE */
    padding-bottom: 50px !important; /* Nilai besar (50px) untuk memberi ruang pada tag jabatan */
    
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center; 
    /* Hapus left: 0; right: 0; margin-top: 10px; jika Anda tidak membutuhkannya */
}

/* KOREKSI: Memberikan Ruang Teks yang Cukup */
.member-info h4 {
    min-height: 2.5em;
    font-size: 1.1rem;
    font-weight: bold;
    color: #000000; /* Changed from white to black for visibility */
    /* KOREKSI 2: HILANGKAN MARGIN BAWAAN BAGAIMANAPUN CARANYA */
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
    margin-top: 0 !important;
    padding-top: 1px; /* Tambahkan padding agar ada ruang di bawah nama */
    line-height: 1.2;
    margin-left: auto;
    margin-right: auto;
    width: fit-content;
}

.position-tag {
    /* MENGEMBALIKAN KE POSISI ABSOLUT DENGAN LEBAR DINAMIS */
    position: absolute !important; 
    
    /* KUNCI 1: Mengatur posisi horizontal agar bisa digeser */
    left: 50%; /* Posisikan 50% dari kiri container induk */
    transform: translateX(-50%); /* Geser kembali 50% dari lebar dirinya sendiri (untuk centering) */
    
    /* Kunci 2: Mengatur Div oranye ke lebar konten (tidak 100% full) */
    width: 250px; 
    
    /* Posisikan vertikal di bawah kotak putih */
    bottom: 0 !important; 
    margin: 0 !important; 

    /* Style Visual */
   background: linear-gradient(135deg, 
    #160d08 10%,    /* Warna 1: Mulai lebih awal, opacity penuh */
    #28efcec0 35%,    /* Warna 2: Transisi lebih lambat dari 10% ke 35% */
    #318df0 55%,    /* Warna 3: Transisi terjadi dari 35% ke 65% */
    #f76f1aff 95%);   /* Warna 4: Transisi terakhir */
    color: white; 
    padding: 9px 10px; 

    /*font*/
    color: #ffffffff;
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    
    /* KUNCI 3: Border Radius Penuh di Bawah, Hapus di Atas */
    border-radius: 0 0 10px 10px !important; /* Membulat hanya di bawah */
    border-top-left-radius: 0 !important; 
    border-top-right-radius: 0 !important;
}
/* 1. DEFINISI ANIMASI */
@keyframes scrolling-text {
    0% { transform: translateX(0); } 
    100% { transform: translateX(-100%); }
}

/* 2. GAYA CONTAINER MARQUEE */
.marquee-text-container {
    width: 100%; 
    height: 1.5em; /* TINGGI CUKUP */
    overflow: hidden; 
    white-space: nowrap; 
    margin: 0; /* Hapus margin yang mengganggu */
    padding: 0;
}

/* 3. GAYA ELEMEN TEKS YANG BERGERAK */
.marquee-text-container h4 {
    display: inline-block; 
    padding-left: 100%; /* KUNCI: Mendorong teks ke luar kanan */
    margin: 0; /* Hapus margin default H4 */
    
    animation: scrolling-text 10s linear infinite; /* Durasi animasi */
    font-weight: bold; 
    font-size: 1.1rem; 
}


/* CSS KOREKSI AOS: Gunakan properti ini untuk memutar animasi saat AOS selesai */
/* Asumsikan AOS menggunakan class [data-aos-id] atau [data-aos] untuk menandai elemen yang masuk */
.swiper-slide[data-aos].aos-animate h4 {
    animation-play-state: running !important;
}

/* Responsive CSS untuk mobile */
@media (max-width: 767px) {
    .position-tag {
        width: 100% !important;
        font-size: 0.9rem !important;
        padding: 8px 5px !important;
    }

    .member-info h4 {
        font-size: 1rem !important;
        min-height: 2em !important;
    }

    .member-img-container {
        min-height: 200px !important;
    }

    .member-img-container img {
        max-height: 200px !important;
    }

    .team-nav-container .btn {
        font-size: 0.8rem !important;
        padding: 8px 12px !important;
        margin: 2px !important;
    }

    .swiper {
        padding-bottom: 40px !important;
    }
}

@media (max-width: 575px) {
    .position-tag {
        font-size: 0.8rem !important;
        padding: 6px 4px !important;
    }

    .member-info h4 {
        font-size: 0.9rem !important;
    }

    .member-img-container {
        min-height: 180px !important;
    }

    .member-img-container img {
        max-height: 180px !important;
    }

    .team-nav-container .btn {
        font-size: 0.75rem !important;
        padding: 6px 10px !important;
    }
}
</style>
<section class="section team-section">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-10">
                
                <div class="text-center mb-5">
                    <h1 data-aos="fade-up" data-aos-delay="" style="margin-top: 50px;">
                        Struktur Organisasi
                    </h1>
                </div>
        
        <div class="team-nav-container mb-5">
            <div class="d-flex justify-content-center mb-2">
                <a href="#direksi" class="btn btn-dark mx-1 team-nav-btn">Direksi</a>
                <a href="#Finance, Tax, Accounting, HRD" class="btn btn-link mx-1 text-dark team-nav-btn">Finance, Tax, Accounting, HRD</a>
                <a href="#Project Control, QA, Marketing, Logistik" class="btn btn-link mx-1 text-dark team-nav-btn">Project Control, QA, Marketing, Logistik</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#Penanggung Jawab Teknik" class="btn btn-link mx-1 text-dark team-nav-btn">Penanggung Jawab Teknik</a>
                <a href="#Tenaga Teknik" class="btn btn-link mx-1 text-dark team-nav-btn">Tenaga Teknik</a>
            </div>
        </div>

        <div class="swiper team-slider" data-aos="fade-up" data-aos-delay="300">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide" data-category="direksi" data-aos="fade-up">
                    <div class="team-member text-center">
                        <div class="member-img-container">
                            <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                <div class="member-info" style="text-align: left;">
                    <div class="marquee-text-container">
                        <h4>ICKHSAN NURULFALAH</h4>
                    </div>

                    <div style="text-align: center;">
                        <span class="position-tag">Komisaris</span>
                    </div>
                </div>
                    </div>
                </div>
                <div class="swiper-slide" data-category="direksi" data-aos="fade-up" data-aos-delay="299">
                    <div class="team-member text-center">
                        <div class="member-img-container">
                            <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                        <div class="member-info" style="text-align: left;">
                    <div class="marquee-text-container">
                        <h4>USEP HENDRA JAYA</h4>
                    </div>
                    <div style="text-align: center;">
                        <span class="position-tag">Direktur</span>
                    </div>
                    </div>
                </div>
                    </div>  
                <div class="swiper-slide" data-category="Finance, Tax, Accounting, HRD" data-aos="fade-up" data-aos-delay="299">
                   <div class="team-member text-center">
                    <div class="member-img-container">
                        <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                    <div class="member-info" style="text-align: left;">
                        <div class="marquee-text-container">
                        <h4>HANA PUTRI ANDRIANI</h4>
                        </div>
                        <div style="text-align: center;">
                        <span class="position-tag">Finance, Tax, Accounting, HRD</span>
                        </div>
                    </div>
                </div>
                </div>

                <div class="swiper-slide" data-category="Project Control, QA, Marketing, Logistik" data-aos="fade-up" data-aos-delay="299">
                   <div class="team-member text-center">
                    <div class="member-img-container">
                        <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                    <div class="member-info" style="text-align: left;">
                        <div class="marquee-text-container">
                        <h4>SEPTIANI NUR ALAWIYAH</h4>
                        </div>
                        <div style="text-align: center;">
                        <span class="position-tag">Project Control</span>
                        </div>
                    </div>
                </div>
                </div>

                <div class="swiper-slide" data-category="Penanggung Jawab Teknik" data-aos="fade-up" data-aos-delay="299">
                   <div class="team-member text-center">
                    <div class="member-img-container">
                        <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                    <div class="member-info" style="text-align: left;">
                        <div class="marquee-text-container">
                        <h4>RAKA LUTHFI PRADANA H.</h4>
                        </div>
                        <div style="text-align: center;">
                        <span class="position-tag">Penanggung Jawab Teknik</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-category="Tenaga Teknik" data-aos="fade-up" data-aos-delay="299">
                   <div class="team-member text-center">
                    <div class="member-img-container">
                        <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                    <div class="member-info" style="text-align: left;">
                        <div class="marquee-text-container">
                        <h4>BIMBIM TEGUH PRATAMA</h4>
                        </div>
                        <div style="text-align: center;">
                        <span class="position-tag">Tenaga Teknik</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-category="Tenaga Teknik" data-aos="fade-up" data-aos-delay="299">
                   <div class="team-member text-center">
                    <div class="member-img-container">
                        <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                    <div class="member-info" style="text-align: left;">
                        <div class="marquee-text-container">
                        <h4>ICHWAN NURDIN</h4>
                        </div>
                        <div style="text-align: center;">
                        <span class="position-tag">Tenaga Teknik</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-category="Tenaga Teknik" data-aos="fade-up" data-aos-delay="299">
                   <div class="team-member text-center">
                    <div class="member-img-container">
                        <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                    <div class="member-info" style="text-align: left;">
                        <div class="marquee-text-container">
                        <h4>ICHWAN NURDIN</h4>
                        </div>
                        <div style="text-align: center;">
                        <span class="position-tag">Tenaga Teknik</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-category="Tenaga Teknik" data-aos="fade-up" data-aos-delay="299">
                   <div class="team-member text-center">
                    <div class="member-img-container">
                        <img src="{{ asset('assets/img/dummy.png') }}" class="img-fluid" alt="dummy">
                    </div>
                    <div class="member-info" style="text-align: left;">
                        <div class="marquee-text-container">
                        <h4>ADITYA RAMADAN NUGRAHA</h4>
                        </div>
                        <div style="text-align: center;">
                        <span class="position-tag">Tenaga Teknik</span>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            
            <div class="swiper-scrollbar"></div>
            </div>

    </div>

    <!-- Struktur Organisasi Image Section -->
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="text-center mb-4">
                <h2 data-aos="fade-up" data-aos-delay="">Diagram Struktur Organisasi</h2>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets/img/struktur-C.png') }}" alt="Struktur Organisasi PT Aliansi Prima Energi" style="width: 100%; max-width: 1200px; height: auto; border: none; box-shadow: none;">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const teamSwiperEl = document.querySelector('.team-slider');
        const navLinks = document.querySelectorAll('.team-nav-btn');
        const initialCategory = 'direksi'; 
        let teamSwiper;

        // 1. INISIALISASI SWIPER 
        teamSwiper = new Swiper(teamSwiperEl, {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                576: { slidesPerView: 2, },
                992: { slidesPerView: 3, },
                1200: { slidesPerView: 4, }
            },
            scrollbar: { el: '.swiper-scrollbar', draggable: true },
            observer: true, 
            observeParents: true,
            // Penting: Hapus konfigurasi pagination/navigation bawaan
        });
        
        // 2. FUNGSI FILTER UTAMA
        function filterSlides(category) {
            
            const targetCategory = category.toLowerCase().replace(/[-\s]/g, ''); 
            
            // Tambahkan kelas 'filtering' untuk menonaktifkan transisi Swiper selama proses
            teamSwiper.wrapperEl.classList.add('filtering');
            
            const allSlides = teamSwiperEl.querySelectorAll('.swiper-slide');
            
            // Sembunyikan/Tampilkan slide
            allSlides.forEach(slide => {
                const slideCategory = slide.getAttribute('data-category').toLowerCase().replace(/[-\s]/g, '');
                
                if (targetCategory === 'all' || slideCategory === targetCategory) {
                    slide.classList.remove('hidden-slide');
                    // Tidak perlu mengatur display/width/height di JS lagi karena CSS sudah kuat
                } else {
                    slide.classList.add('hidden-slide');
                    // Tidak perlu mengatur display/width/height di JS lagi karena CSS sudah kuat
                }
            });

            // Perbarui Style Tombol Navigasi
            navLinks.forEach(link => {
                const linkCategory = link.getAttribute('href').replace('#', '').toLowerCase().replace(/[-\s]/g, '');

                link.classList.remove('btn-dark', 'btn-link', 'text-dark');
                if (linkCategory === targetCategory) {
                    link.classList.add('btn-dark'); 
                } else {
                    link.classList.add('btn-link', 'text-dark'); 
                }
            });
            requestAnimationFrame(() => {
                teamSwiper.update();
                teamSwiper.slideTo(0, 0); 
               teamSwiper.wrapperEl.classList.remove('filtering');
            }); 
        }   
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const category = this.getAttribute('href').replace('#', '');
                filterSlides(category);
            });
        });
        
        filterSlides(initialCategory);
        restartMarquee();
    });
    function restartMarquee() {
        const marqueeElements = document.querySelectorAll('.marquee-text-container h4');
        
        marqueeElements.forEach(h4 => {
            h4.style.animation = 'none';
            h4.offsetHeight; 
            h4.style.animation = 'scrolling-text 8s linear infinite'; 
        });
    }
</script>
@endsection
