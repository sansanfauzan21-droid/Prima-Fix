<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10" data-aos="fade-up" data-aos-delay="600" style="font-family: 'Times New Roman', Times, serif !important;">
                <div class="p-4 rounded mb-6 text-center"
                    style="max-width: 1200px; width: 100%;
                        background-color: #ffffff75 !important;
                        box-shadow: 0 0 0 1px #ffffffff, 0 1px 3px rgba(255, 255, 255, 1) !important;">

                    <h1 class="text-4xl font-bold mb-4"
                        style="
                            /* 1. Terapkan Background Gradient dari Biru Tua (#002364) ke Kuning/Emas (#FFCC00) */
                            background: -webkit-linear-gradient(top, #0e54d6ff, #ff9d00ff); /* Untuk browser berbasis WebKit */
                            background: linear-gradient(to bottom, ##0e54d6ff, #ff9d00ff); /* Standar CSS */
                            /* 2. Gunakan teks sebagai mask untuk menampilkan gradasi */
                            -webkit-background-clip: text;
                            background-clip: text;
                            /* 3. Jadikan teks transparan agar gradasi terlihat */
                            -webkit-text-fill-color: transparent;
                            color: transparent;
                            /* pertahankan ukuran dan ketebalan font */
                            font-weight: bold !important;">
                        {{ $aboutTitle ? $aboutTitle->content : 'PT ALIANSI PRIMA ENERGI' }}
                    </h1>

                    <p class="mb-6 lead" style="color: #333333 !important; text-align: left; font-size: 1.2rem !important; opacity: 0.9 !important;">
                        {{ $aboutDescription ? $aboutDescription->content : 'Kami adalah Perusahaan Jasa Inspeksi Teknik di Bidang Ketenagalistrikan yang didirikan pada 12 November 2024, dihadapan Notaris RAMADHAN MUAWAD S.H., M.KN., yang berkedudukan di Kabupaten Bandung. Sebagai salah satu penyedia Jasa Inspeksi Teknik Ketenagalistrikan terpercaya, kami berkomitmen untuk memberikan layanan berkualitas tinggi yang memenuhi standar keamanan dan keandalan tertinggi.' }}
                    </p>
                </div>

                <div class="p-4 rounded mb-6"
                    data-aos="fade-right" data-aos-delay="800"
                    style="max-width: 1200px; width: 100%;
                                background-color: #ffffff75 !important;
                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                border-radius: 10px;">
                    <h3 class="text-3xl font-bold mb-3 text-secondary text-center" style="color: #000000 !important;">{{ $commitmentTitle ? $commitmentTitle->content : 'Komitmen Kami' }}</h3>
                    <p class="text-gray-700 mb-6 text-center" style="font-size: 1.1rem; color: #000000ff !important;">
                        {{ $commitmentDescription ? $commitmentDescription->content : 'PT ALIANSI PRIMA ENERGI berkomitmen untuk terus memberikan pelayanan terbaik untuk para pelanggan demi terwujudnya Instalasi Tenaga Listrik yang:' }}
                    </p>

                    <div class="row justify-content-center pt-3">
                        @if($commitmentItems)
                        @php $items = explode('|', $commitmentItems->content); @endphp
                        @foreach($items as $index => $item)
                        <div class="col-md-4 mb-4">
                            <div class="text-center p-3">
                                @if($index == 0)
                                <i class="fas fa-shield-alt" style="font-size: 3rem; color: #ff0000ff; margin-bottom: 10px;"></i>
                                @elseif($index == 1)
                                <i class="fas fa-cogs" style="font-size: 3rem; color: #007bff; margin-bottom: 10px;"></i>
                                @elseif($index == 2)
                                <i class="fas fa-leaf" style="font-size: 3rem; color: #17a2b8; margin-bottom: 10px;"></i>
                                @endif
                                <h4 class="font-weight-bold" style="font-size: 1.4rem; color: #333333;">{{ $item }}</h4>
                                @if($index == 0)
                                <p class="small text-muted" style="font-size: 0.95rem;">Keamanan sebagai prioritas utama</p>
                                @elseif($index == 1)
                                <p class="small text-muted" style="font-size: 0.95rem;">Keandalan dalam setiap layanan</p>
                                @elseif($index == 2)
                                <p class="small text-muted" style="font-size: 0.95rem;">Peduli terhadap lingkungan</p>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-4 mb-4">
                            <div class="text-center p-3">
                                <i class="fas fa-shield-alt" style="font-size: 3rem; color: #ff0000ff; margin-bottom: 10px;"></i>
                                <h4 class="font-weight-bold" style="font-size: 1.4rem; color: #333333;">AMAN</h4>
                                <p class="small text-muted" style="font-size: 0.95rem;">Keamanan sebagai prioritas utama</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="text-center p-3">
                                <i class="fas fa-cogs" style="font-size: 3rem; color: #007bff; margin-bottom: 10px;"></i>
                                <h4 class="font-weight-bold" style="font-size: 1.4rem; color: #333333;">ANDAL</h4>
                                <p class="small text-muted" style="font-size: 0.95rem;">Keandalan dalam setiap layanan</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="text-center p-3">
                                <i class="fas fa-leaf" style="font-size: 3rem; color: #17a2b8; margin-bottom: 10px;"></i>
                                <h4 class="font-weight-bold" style="font-size: 1.27rem; color: #333333;">AKRAB RAMAH LINGKUNGAN</h4>
                                <p class="small text-muted" style="font-size: 0.95rem;">Peduli terhadap lingkungan</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-5" data-aos="fade-left" data-aos-delay="600">
                    <div class="p-4 rounded shadow-sm"
                        style="max-width: 1200px; width: 100%;
                background-color: #ffffff75!important;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;">

                        <div class="row align-items-center">
                            <div class="col-md-6 order-md-1">
                                <h3 class="text-3xl font-semibold mb-4" style="text-align: left; color: #002364;">{{ $servicesTitle ? $servicesTitle->content : 'Layanan Utama Kami' }}</h3>

                                <ul class="list-unstyled" style="color: black; margin-bottom: 20px; font-size: 1.1rem !important;">
                                    @if($servicesList)
                                    @php $services = explode('|', $servicesList->content); @endphp
                                    @foreach($services as $service)
                                    <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #ff9d00ff; margin-right: 10px;"></i>{{ $service }}</li>
                                    @endforeach
                                    @else
                                    <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #ff9d00ff; margin-right: 10px;"></i>Inspeksi Instalasi Tenaga Listrik</li>
                                    <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #ff9d00ff; margin-right: 10px;"></i>Handal, inovatif, dan ramah lingkungan.</li>
                                    <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #ff9d00ff; margin-right: 10px;"></i>Komitmen solusi ketenagalistrikan yang berkualitas.</li>
                                    <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #ff9d00ff; margin-right: 10px;"></i>Mendukung pembangunan nasional yang berkelanjutan.</li>
                                    @endif
                                </ul>
                            </div>

                            <div class="col-md-6 order-md-2 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Layanan Kami" class="img-fluid rounded" style="max-height: 250px; opacity: 0.9;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">

                    <style>
                        /* Gaya dasar untuk border */
                        .judul-border-hover {
                            display: inline-block;
                            padding: 10px 15px;
                            /* Tambahkan padding lebih besar agar area hover lebih lebar */

                            /* Border default (abu-abu muda) */
                            border: 2px solid #DDDDDD;
                            border-radius: 5px;

                            /* Warna teks dan background default */
                            color: #6c757d;
                            /* Warna teks abu-abu (seperti di gambar 232304.png) */
                            background-color: #FFFFFF;

                            transition: all 0.3s ease;
                            /* Transisi untuk semua properti (color, background, border) */
                            cursor: pointer;
                            /* Menambahkan indikasi bahwa ini bisa diklik/di-hover */
                        }

                        /* Gaya saat kursor melewatinya (Full Background Hover) */
                        .judul-border-hover:hover {
                            /* Warna solid yang memenuhi seluruh kotak saat hover */
                            background-color: #0d47a1;
                            /* Biru tua yang solid (Mirip tombol Keluhan & Banding) */

                            /* Warna border ikut berubah */
                            border-color: #ff9100ff;

                            /* Warna teks berubah menjadi putih agar kontras */
                            color: #ffbf00ff;

                            /* Opsional: Tambahkan sedikit shadow untuk efek "pop" */
                            box-shadow: 0 4px 8px rgba(255, 153, 0, 1);
                        }
                    </style>
                    <div class="col-md-8 text-left">
                        <h3 class="text-3xl font-bold mb-3 judul-border-hover" style="text-align: left;">{{ $certificateTitle ? $certificateTitle->content : 'Sertifikat Badan Usaha' }}</h3>

                        <div class="swiper logoSwiper" style="border-radius: 10px; position: relative; padding: 20px; background-color: #002364; border: 4px solid #fbb034;">
                            <style>
                                .swiper.logoSwiper .swiper-button-prev,
                                .swiper.logoSwiper .swiper-button-next {
                                    /* Memastikan tombol berada di tengah vertikal */
                                    top: 55% !important;
                                    transform: translateY(-50%) !important;

                                    /* Menaikkan lapisan tombol agar tidak tertutup gambar/teks */
                                    z-index: 20 !important;

                                    /* Mengubah warna agar kontras dengan latar belakang biru tua */
                                    color: #fbb034 !important;
                                    font-size: 30px !important;
                                    /* Membuat panah sedikit lebih besar */

                                    /* Tambahkan bayangan teks agar lebih mudah dilihat di atas gambar */
                                    text-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
                                }

                                .swiper.logoSwiper .swiper-button-prev {
                                    left: 20px !important;
                                    /* Jarak dari tepi kiri */
                                }

                                .swiper.logoSwiper .swiper-button-next {
                                    right: 20px !important;
                                    /* Jarak dari tepi kanan */
                                }

                                .swiper.logoSwiper .swiper-slide img {
                                    max-height: 450px;
                                    width: 100%;
                                    object-fit: contain;
                                    border: 4px solid #ff9d00ff;
                                }
                            </style>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-wrapper">
                                @if(isset($sbuImages) && $sbuImages->count() > 0)
                                @foreach($sbuImages as $image)
                                <div class="swiper-slide">
                                    <img src="{{ str_starts_with($image->image_path, 'assets/') ? asset($image->image_path) : asset('storage/' . $image->image_path) }}" alt="{{ $image->alt_text }}" class="img-fluid rounded">
                                </div>
                                @endforeach
                                @else
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="swiper-slide">
                                    <img src="{{ asset('assets/img/legal.png') }}" alt="Sertifikat {{ $i }}" class="img-fluid rounded">
                            </div>
                            @endfor
                            @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="bg-white border rounded mb-4 shadow-sm">
                        <h5 class="p-3 mb-0 text-white rounded-top" style="text-align: left; background-color: #002364;">
                            <i class="fas fa-sign-in-alt mr-2"></i> MASUK SEBAGAI
                        </h5>
                        <div class="list-group list-group-flush">
                            <a href="https://siujang.esdm.go.id/Pelayanan-Perizinan" class="list-group-item list-group-item-action"> BADAN USAHA SI UJANG GATRIK</a>
                            <a href="https://siujang.esdm.go.id/Login" class="list-group-item list-group-item-action"> TT DAN PJT SI UJANG GATRIK</a>
                        </div>
                    </div>
                </div>
            </div>
</section>