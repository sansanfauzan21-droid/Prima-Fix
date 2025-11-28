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
                            <h1 data-aos="fade-up" data-aos-delay="">{{ $title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    <section class="section">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <h3 class="mb-4 text-center" style="color: #007bff; font-weight: 700; position: relative;">
                        <i class="fas fa-star me-2"></i>Highlight Regulasi
                        <div style="position: absolute; bottom: -5px; left: 50%; transform: translateX(-50%); width: 60px; height: 3px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); border-radius: 2px;"></div>
                    </h3>
                </div>
            </div>

            <div class="row">
                <!-- Swiper Container -->
                <div class="swiper highlightSwiper" style="padding: 20px 0;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card h-100 modern-card" style="border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);"></div>
                                <div class="card-body text-center" style="padding: 30px 20px;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(0,123,255,0.3);">
                                        <i class="fas fa-gavel fa-lg" style="color: white;"></i>
                                    </div>
                                    <h5 class="card-title" style="font-weight: 700; color: #333; margin-bottom: 15px; font-size: 1.1em;">Undang-Undang Ketenagalistrikan</h5>
                                    <p class="card-text" style="color: #666; line-height: 1.6; font-size: 0.95em;">Regulasi dasar yang mengatur kegiatan di sektor ketenagalistrikan, termasuk pembangunan, pengoperasian, dan pengawasan infrastruktur listrik.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100 modern-card" style="border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%);"></div>
                                <div class="card-body text-center" style="padding: 30px 20px;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(40,167,69,0.3);">
                                        <i class="fas fa-dollar-sign fa-lg" style="color: white;"></i>
                                    </div>
                                    <h5 class="card-title" style="font-weight: 700; color: #333; margin-bottom: 15px; font-size: 1.1em;">Tarif Listrik</h5>
                                    <p class="card-text" style="color: #666; line-height: 1.6; font-size: 0.95em;">Ketentuan mengenai penetapan dan penyesuaian tarif listrik untuk memastikan keseimbangan antara kepentingan konsumen dan penyedia jasa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100 modern-card" style="border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%);"></div>
                                <div class="card-body text-center" style="padding: 30px 20px;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(255,193,7,0.3);">
                                        <i class="fas fa-shield-alt fa-lg" style="color: white;"></i>
                                    </div>
                                    <h5 class="card-title" style="font-weight: 700; color: #333; margin-bottom: 15px; font-size: 1.1em;">Standar Keselamatan</h5>
                                    <p class="card-text" style="color: #666; line-height: 1.6; font-size: 0.95em;">Norma dan standar keselamatan yang harus dipatuhi dalam instalasi, pemeliharaan, dan penggunaan peralatan listrik untuk mencegah risiko kecelakaan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100 modern-card" style="border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);"></div>
                                <div class="card-body text-center" style="padding: 30px 20px;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #17a2b8 0%, #138496 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(23,162,184,0.3);">
                                        <i class="fas fa-leaf fa-lg" style="color: white;"></i>
                                    </div>
                                    <h5 class="card-title" style="font-weight: 700; color: #333; margin-bottom: 15px; font-size: 1.1em;">Energi Terbarukan</h5>
                                    <p class="card-text" style="color: #666; line-height: 1.6; font-size: 0.95em;">Kebijakan dan insentif untuk pengembangan energi terbarukan seperti solar, angin, dan hidro untuk mendukung transisi energi berkelanjutan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100 modern-card" style="border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #6f42c1 0%, #5a32a3 100%);"></div>
                                <div class="card-body text-center" style="padding: 30px 20px;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #6f42c1 0%, #5a32a3 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(111,66,193,0.3);">
                                        <i class="fas fa-chart-line fa-lg" style="color: white;"></i>
                                    </div>
                                    <h5 class="card-title" style="font-weight: 700; color: #333; margin-bottom: 15px; font-size: 1.1em;">Pengaturan Pasar Listrik</h5>
                                    <p class="card-text" style="color: #666; line-height: 1.6; font-size: 0.95em;">Aturan yang mengatur mekanisme pasar listrik, termasuk perdagangan, kompetisi, dan pengawasan untuk efisiensi dan keadilan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100 modern-card" style="border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);"></div>
                                <div class="card-body text-center" style="padding: 30px 20px;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(220,53,69,0.3);">
                                        <i class="fas fa-users fa-lg" style="color: white;"></i>
                                    </div>
                                    <h5 class="card-title" style="font-weight: 700; color: #333; margin-bottom: 15px; font-size: 1.1em;">Perlindungan Konsumen</h5>
                                    <p class="card-text" style="color: #666; line-height: 1.6; font-size: 0.95em;">Hak dan kewajiban konsumen listrik, termasuk mekanisme penyelesaian sengketa dan jaminan kualitas layanan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card h-100 modern-card" style="border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #20c997 0%, #17a2b8 100%);"></div>
                                <div class="card-body text-center" style="padding: 30px 20px;">
                                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #20c997 0%, #17a2b8 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(32,201,151,0.3);">
                                        <i class="fas fa-cogs fa-lg" style="color: white;"></i>
                                    </div>
                                    <h5 class="card-title" style="font-weight: 700; color: #333; margin-bottom: 15px; font-size: 1.1em;">Pengembangan Infrastruktur</h5>
                                    <p class="card-text" style="color: #666; line-height: 1.6; font-size: 0.95em;">Rencana dan regulasi untuk pembangunan jaringan transmisi dan distribusi listrik guna mendukung pertumbuhan ekonomi dan kebutuhan energi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation buttons -->
                    <div class="swiper-button-next" style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); width: 50px; height: 50px; border-radius: 50%; box-shadow: 0 4px 15px rgba(0,123,255,0.3); border: none; color: white; font-size: 1.2em; margin-top: -25px;" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 20px rgba(0,123,255,0.4)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 15px rgba(0,123,255,0.3)'"></div>
                    <div class="swiper-button-prev" style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); width: 50px; height: 50px; border-radius: 50%; box-shadow: 0 4px 15px rgba(0,123,255,0.3); border: none; color: white; font-size: 1.2em; margin-top: -25px;" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 20px rgba(0,123,255,0.4)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 15px rgba(0,123,255,0.3)'"></div>
                </div>
            </div>

            <!-- Regulations Table -->
            <div class="row mt-5">
                    <div class="col-md-12">
                    <h3 class="mb-4" style="color: #007bff; font-weight: 700; position: relative;">
                        <i class="fas fa-file-alt me-2"></i>Daftar Regulasi
                        <div style="position: absolute; bottom: -5px; left: 0; width: 60px; height: 3px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); border-radius: 2px;"></div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover modern-table" style="border-radius: 15px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.15); border: none; background: white;">
                            <thead style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color: white; border: none;">
                                <tr>
                                    <th style="border: none; padding: 20px 15px; font-weight: 700; font-size: 0.95em; text-transform: uppercase; letter-spacing: 0.5px; position: relative;">
                                        <i class="fas fa-hashtag me-2"></i>No
                                    </th>
                                    <th style="border: none; padding: 20px 15px; font-weight: 700; font-size: 0.95em; text-transform: uppercase; letter-spacing: 0.5px;">
                                        <i class="fas fa-book me-2"></i>Nama Pasal
                                    </th>
                                    <th style="border: none; padding: 20px 15px; font-weight: 700; font-size: 0.95em; text-transform: uppercase; letter-spacing: 0.5px;">
                                        <i class="fas fa-file-pdf me-2"></i>Dokumen
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($regulations as $index => $regulation)
                                    <tr class="table-row" style="border: none; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); position: relative;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                                        <td style="padding: 20px 15px; vertical-align: middle; font-weight: 600; color: #007bff; border: none; background: linear-gradient(135deg, rgba(0,123,255,0.05) 0%, rgba(0,86,179,0.05) 100%); position: relative;">
                                            <span style="display: inline-block; width: 30px; height: 30px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color: white; border-radius: 50%; text-align: center; line-height: 30px; font-size: 0.9em; font-weight: bold;">{{ $index + 1 }}</span>
                                        </td>
                                        <td style="padding: 20px 15px; vertical-align: middle; font-weight: 600; color: #333; border: none; background: linear-gradient(135deg, rgba(255,255,255,0.8) 0%, rgba(248,249,250,0.8) 100%);">
                                            <div style="display: flex; align-items: center;">
                                                <div style="width: 4px; height: 40px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); border-radius: 2px; margin-right: 15px;"></div>
                                                    <span style="font-size: 1em; line-height: 1.4;">{{ $regulation->nama_pasal }}</span>
                                            </div>
                                        </td>
                                        <td style="padding: 20px 15px; vertical-align: middle; border: none; background: linear-gradient(135deg, rgba(255,255,255,0.8) 0%, rgba(248,249,250,0.8) 100%);">
                                            @if($regulation->dokumen)
                                                <a href="{{ asset('storage/dokumen/' . $regulation->dokumen) }}" target="_blank" download="{{ $regulation->dokumen }}" class="btn btn-sm download-btn" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); border: none; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; transition: all 0.3s ease; font-weight: 600; box-shadow: 0 4px 15px rgba(40,167,69,0.3); position: relative; overflow: hidden;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(40,167,69,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(40,167,69,0.3)'">
                                                    <i class="fas fa-download me-2"></i>Download PDF
                                                    <div style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: left 0.5s;" onmouseover="this.previousElementSibling.style.left='100%'" onmouseout="this.previousElementSibling.style.left='-100%'"></div>
                                                </a>
                                            @else
                                                <span class="text-muted" style="font-style: italic; padding: 10px 15px; background: rgba(108,117,125,0.1); border-radius: 15px; display: inline-block;">
                                                    <i class="fas fa-exclamation-triangle me-1"></i>Tidak ada dokumen
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center" style="padding: 60px 20px; color: #6c757d; font-style: italic; border: none; background: linear-gradient(135deg, rgba(248,249,250,0.5) 0%, rgba(233,236,239,0.5) 100%); position: relative;">
                                            <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); border-radius: 2px; opacity: 0.3;"></div>
                                            <i class="fas fa-folder-open fa-3x mb-3" style="color: #dee2e6;"></i>
                                            <br>
                                            <span style="font-size: 1.1em; font-weight: 500;">Belum ada regulasi yang ditambahkan.</span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@push('styles')
<style>
    /* Mobile: Hide navigation buttons */
    @media (max-width: 767px) {
        .highlightSwiper .swiper-button-next,
        .highlightSwiper .swiper-button-prev {
            display: none !important;
        }

        .highlightSwiper {
            padding: 20px 10px !important;
        }

        .highlightSwiper .swiper-slide .card-body {
            padding: 20px 15px !important;
        }

        .highlightSwiper .swiper-slide .card-title {
            font-size: 1em !important;
        }

        .highlightSwiper .swiper-slide .card-text {
            font-size: 0.9em !important;
        }
    }
</style>
@endpush
@endsection
