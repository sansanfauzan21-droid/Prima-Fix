@extends('frontend.layouts.main')

@push('hero')
    <section class="hero-section inner-page contact-hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
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
        <div class="hero-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); clip-path: url(#hero-clip);"></div>
        <div class="floating-shapes">
            <div class="shape shape-1" style="position: absolute; top: 10%; left: 10%; width: 50px; height: 50px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
            <div class="shape shape-2" style="position: absolute; top: 20%; right: 15%; width: 30px; height: 30px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 8s ease-in-out infinite reverse;"></div>
            <div class="shape shape-3" style="position: absolute; bottom: 15%; left: 20%; width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 7s ease-in-out infinite;"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center hero-text" style="position: relative; z-index: 2;">
                            <h1 data-aos="fade-up" data-aos-delay="100" style="color: white; font-weight: 700; font-size: 3rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); margin-bottom: 20px;"><i class="fas fa-exclamation-triangle" style="margin-right: 15px;"></i>Keluhan & Banding</h1>
                            <p data-aos="fade-up" data-aos-delay="300" style="color: rgba(255,255,255,0.9); font-size: 1.2rem; font-weight: 300;">Suara Anda penting bagi kami. Laporkan keluhan atau ajukan banding dengan aman dan terpercaya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Process Timeline Section -->
    <section class="process-section" style="padding: 80px 0; background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%); position: relative; overflow: hidden;">
        <!-- Floating Elements -->
        <div class="timeline-particles">
            <div class="particle particle-1" style="position: absolute; top: 20%; left: 10%; width: 8px; height: 8px; background: rgba(0, 123, 255, 0.3); border-radius: 50%; animation: particleFloat 8s ease-in-out infinite;"></div>
            <div class="particle particle-2" style="position: absolute; top: 30%; right: 15%; width: 6px; height: 6px; background: rgba(0, 212, 255, 0.4); border-radius: 50%; animation: particleFloat 6s ease-in-out infinite reverse;"></div>
            <div class="particle particle-3" style="position: absolute; bottom: 25%; left: 20%; width: 10px; height: 10px; background: rgba(0, 123, 255, 0.2); border-radius: 50%; animation: particleFloat 10s ease-in-out infinite;"></div>
            <div class="particle particle-4" style="position: absolute; top: 40%; right: 25%; width: 5px; height: 5px; background: rgba(0, 212, 255, 0.5); border-radius: 50%; animation: particleFloat 7s ease-in-out infinite reverse;"></div>
        </div>

        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 style="color: #c53030; font-weight: 700; font-size: 2.5rem; margin-bottom: 20px; position: relative;">
                        <i class="fas fa-route" style="margin-right: 15px;"></i>Proses Penanganan Keluhan
                        <div class="title-underline" style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 100px; height: 3px; background: linear-gradient(90deg, #007bff 0%, #00d4ff 100%); border-radius: 2px;"></div>
                    </h2>
                    <p style="color: #742a2a; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Kami menangani setiap keluhan dengan proses yang terstruktur dan transparan</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="timeline-container" style="position: relative;">
                        <div class="timeline-line" style="position: absolute; top: 50%; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #e0e0e0 0%, #b0b0b0 100%); transform: translateY(-50%); z-index: 1; border-radius: 2px;"></div>
                        <div class="timeline-progress" style="position: absolute; top: 50%; left: 0; height: 4px; width: 0%; background: linear-gradient(90deg, #007bff 0%, #00d4ff 100%); transform: translateY(-50%); z-index: 2; border-radius: 2px; transition: width 2s ease-in-out;"></div>

                        <div class="row justify-content-center">
                            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="timeline-step" style="background: white; border-radius: 20px; padding: 35px 25px; text-align: center; box-shadow: 0 10px 30px rgba(21, 101, 192, 0.15); position: relative; z-index: 3; margin-top: -25px; transition: all 0.4s ease; cursor: pointer; border: 2px solid transparent;">
                                    <div class="step-icon" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 70px; height: 70px; background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3); transition: all 0.3s ease;">
                                        <i class="fas fa-inbox fa-lg" style="color: white;"></i>
                                    </div>
                                    <div class="step-number" style="width: 30px; height: 30px; background: rgba(0, 123, 255, 0.1); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px; color: #007bff; font-weight: 700; font-size: 1.2rem; margin-top: 25px;">1</div>
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 15px; font-size: 1.1rem;">Penerimaan</h5>
                                    <p style="color: #666; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Keluhan Anda diterima dan dicatat dalam sistem kami dengan nomor tiket unik</p>
                                    <div class="step-arrow" style="position: absolute; right: -10px; top: 50%; transform: translateY(-50%); opacity: 0; transition: opacity 0.3s ease;">
                                        <i class="fas fa-chevron-right" style="color: #007bff; font-size: 1.2rem;"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="timeline-step" style="background: white; border-radius: 20px; padding: 35px 25px; text-align: center; box-shadow: 0 10px 30px rgba(21, 101, 192, 0.15); position: relative; z-index: 3; transition: all 0.4s ease; cursor: pointer; border: 2px solid transparent;">
                                    <div class="step-icon" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 70px; height: 70px; background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3); transition: all 0.3s ease;">
                                        <i class="fas fa-search fa-lg" style="color: white;"></i>
                                    </div>
                                    <div class="step-number" style="width: 30px; height: 30px; background: rgba(0, 123, 255, 0.1); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px; color: #007bff; font-weight: 700; font-size: 1.2rem; margin-top: 25px;">2</div>
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 15px; font-size: 1.1rem;">Verifikasi</h5>
                                    <p style="color: #666; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Tim kami memverifikasi dan mengkategorikan keluhan Anda berdasarkan prioritas</p>
                                    <div class="step-arrow" style="position: absolute; right: -10px; top: 50%; transform: translateY(-50%); opacity: 0; transition: opacity 0.3s ease;">
                                        <i class="fas fa-chevron-right" style="color: #007bff; font-size: 1.2rem;"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="500">
                                <div class="timeline-step" style="background: white; border-radius: 20px; padding: 35px 25px; text-align: center; box-shadow: 0 10px 30px rgba(21, 101, 192, 0.15); position: relative; z-index: 3; margin-top: -25px; transition: all 0.4s ease; cursor: pointer; border: 2px solid transparent;">
                                    <div class="step-icon" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 70px; height: 70px; background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3); transition: all 0.3s ease;">
                                        <i class="fas fa-cogs fa-lg" style="color: white;"></i>
                                    </div>
                                    <div class="step-number" style="width: 30px; height: 30px; background: rgba(0, 123, 255, 0.1); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px; color: #007bff; font-weight: 700; font-size: 1.2rem; margin-top: 25px;">3</div>
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 15px; font-size: 1.1rem;">Penanganan</h5>
                                    <p style="color: #666; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Proses penyelesaian sesuai dengan kategori dan prioritas yang telah ditentukan</p>
                                    <div class="step-arrow" style="position: absolute; right: -10px; top: 50%; transform: translateY(-50%); opacity: 0; transition: opacity 0.3s ease;">
                                        <i class="fas fa-chevron-right" style="color: #007bff; font-size: 1.2rem;"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="700">
                                <div class="timeline-step" style="background: white; border-radius: 20px; padding: 35px 25px; text-align: center; box-shadow: 0 10px 30px rgba(21, 101, 192, 0.15); position: relative; z-index: 3; transition: all 0.4s ease; cursor: pointer; border: 2px solid transparent;">
                                    <div class="step-icon" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); width: 70px; height: 70px; background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3); transition: all 0.3s ease;">
                                        <i class="fas fa-check-circle fa-lg" style="color: white;"></i>
                                    </div>
                                    <div class="step-number" style="width: 30px; height: 30px; background: rgba(0, 123, 255, 0.1); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px; color: #007bff; font-weight: 700; font-size: 1.2rem; margin-top: 25px;">4</div>
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 15px; font-size: 1.1rem;">Follow-up</h5>
                                    <p style="color: #666; font-size: 0.9rem; line-height: 1.6; margin-bottom: 0;">Anda akan mendapat update rutin dan konfirmasi penyelesaian akhir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="complaint-form-section" style="padding: 80px 0; background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="complaint-form-wrapper" style="background: white; border-radius: 25px; box-shadow: 0 20px 60px rgba(0,0,0,0.1); padding: 50px; position: relative;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 6px; background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%);"></div>

                        <!-- Form Header -->
                        <div class="form-header text-center mb-5">
                            <h3 style="color: #333; font-weight: 700; margin-bottom: 15px;"><i class="fas fa-edit" style="margin-right: 10px; color: #007bff;"></i>Form Pengaduan & Banding</h3>
                            <p style="color: #666; font-size: 1rem;">Silakan lengkapi form di bawah ini dengan detail yang jelas</p>
                        </div>

                        <form action="{{ route('frontend.contact-us.send') }}" method="post" role="form" id="complaintForm">
                            @csrf

                            <!-- Complaint Category -->
                            <div class="form-group mb-4">
                                <label style="color: #333; font-weight: 600; margin-bottom: 15px; display: block;"><i class="fas fa-tags" style="margin-right: 8px; color: #007bff;"></i>Kategori Keluhan</label>
                                <div class="category-buttons" style="display: flex; flex-wrap: wrap; gap: 10px;">
                                    <button type="button" class="category-btn" data-value="Layanan"><i class="fas fa-concierge-bell" style="margin-right: 8px;"></i>Layanan</button>
                                    <button type="button" class="category-btn" data-value="Produk"><i class="fas fa-box" style="margin-right: 8px;"></i>Produk</button>
                                    <button type="button" class="category-btn" data-value="Administrasi"><i class="fas fa-file-alt" style="margin-right: 8px;"></i>Administrasi</button>
                                    <button type="button" class="category-btn" data-value="Lainnya"><i class="fas fa-ellipsis-h" style="margin-right: 8px;"></i>Lainnya</button>
                                </div>
                                <input type="hidden" name="category" id="categoryInput" required>
                            </div>

                            <!-- Priority Level -->
                            <div class="form-group mb-4">
                                <label style="color: #333; font-weight: 600; margin-bottom: 15px; display: block;"><i class="fas fa-exclamation-triangle" style="margin-right: 8px; color: #007bff;"></i>Tingkat Prioritas</label>
                                <div class="priority-buttons" style="display: flex; flex-wrap: wrap; gap: 10px;">
                                    <button type="button" class="priority-btn" data-value="Rendah"><i class="fas fa-arrow-down" style="margin-right: 8px;"></i>Rendah</button>
                                    <button type="button" class="priority-btn" data-value="Sedang"><i class="fas fa-minus" style="margin-right: 8px;"></i>Sedang</button>
                                    <button type="button" class="priority-btn" data-value="Tinggi"><i class="fas fa-arrow-up" style="margin-right: 8px;"></i>Tinggi</button>
                                    <button type="button" class="priority-btn" data-value="Kritis"><i class="fas fa-exclamation" style="margin-right: 8px;"></i>Kritis</button>
                                </div>
                                <input type="hidden" name="priority" id="priorityInput" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <div class="floating-label-input">
                                        <input type="text" name="name" class="form-control modern-input" id="name" placeholder=" " required style="border: none; border-bottom: 2px solid #e9ecef; border-radius: 0; padding: 10px 0; font-size: 1rem; background: transparent; transition: border-color 0.3s;">
                                        <label for="name" class="floating-label" style="position: absolute; top: 10px; left: 0; color: #6c757d; transition: all 0.3s; pointer-events: none;"><i class="fas fa-user" style="margin-right: 8px;"></i>Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="floating-label-input">
                                        <input type="email" class="form-control modern-input" name="email" id="email" placeholder=" " required style="border: none; border-bottom: 2px solid #e9ecef; border-radius: 0; padding: 10px 0; font-size: 1rem; background: transparent; transition: border-color 0.3s;">
                                        <label for="email" class="floating-label" style="position: absolute; top: 10px; left: 0; color: #6c757d; transition: all 0.3s; pointer-events: none;"><i class="fas fa-envelope" style="margin-right: 8px;"></i>Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 30px;">
                                <div class="floating-label-input">
                                    <input type="text" class="form-control modern-input" name="subject" id="subject" placeholder=" " required style="border: none; border-bottom: 2px solid #e9ecef; border-radius: 0; padding: 10px 0; font-size: 1rem; background: transparent; transition: border-color 0.3s;">
                                    <label for="subject" class="floating-label" style="position: absolute; top: 10px; left: 0; color: #6c757d; transition: all 0.3s; pointer-events: none;"><i class="fas fa-heading" style="margin-right: 8px;"></i>Judul Keluhan</label>
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 30px;">
                                <div class="floating-label-input">
                                    <textarea class="form-control modern-input" name="message" id="message" placeholder=" " rows="6" required style="border: none; border-bottom: 2px solid #e9ecef; border-radius: 0; padding: 10px 0; font-size: 1rem; background: transparent; transition: border-color 0.3s; resize: vertical;"></textarea>
                                    <label for="message" class="floating-label" style="position: absolute; top: 10px; left: 0; color: #6c757d; transition: all 0.3s; pointer-events: none;"><i class="fas fa-comment-alt" style="margin-right: 8px;"></i>Detail Keluhan atau Banding</label>
                                </div>
                            </div>

                            @if(session('success'))
                                <div class="alert alert-success" style="margin-top: 20px; border-radius: 10px; border: none; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white;"><i class="fas fa-check-circle" style="margin-right: 8px;"></i>{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger" style="margin-top: 20px; border-radius: 10px; border: none; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white;"><i class="fas fa-exclamation-triangle" style="margin-right: 8px;"></i>{{ session('error') }}</div>
                            @endif

                            <div class="form-group" style="margin-top: 40px; text-align: center;">
                                <button type="submit" class="modern-btn" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 25px; padding: 12px 40px; color: white; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.3s; position: relative; overflow: hidden;">
                                    <span class="btn-text">Kirim Keluhan</span>
                                    <div class="btn-overlay" style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); transition: left 0.3s; z-index: -1;"></div>
                                    <i class="fas fa-paper-plane" style="margin-left: 8px;"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- FAQ Section -->
    <section class="faq-section" style="padding: 80px 0; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 style="color: #1565c0; font-weight: 700; font-size: 2.5rem; margin-bottom: 20px;"><i class="fas fa-question-circle" style="margin-right: 15px;"></i>Pertanyaan Umum tentang Keluhan</h2>
                    <p style="color: #0d47a1; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Temukan jawaban atas pertanyaan-pertanyaan umum seputar proses pengaduan dan penanganan keluhan kami</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="complaintFAQ" style="max-width: 800px; margin: 0 auto;">
                        <div class="card faq-card" style="border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); margin-bottom: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-header" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); border: none; padding: 0;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="faq1" style="width: 100%; text-align: left; padding: 20px 30px; color: #1565c0; font-weight: 600; text-decoration: none; border: none; background: transparent;">
                                        <i class="fas fa-chevron-down" style="margin-right: 15px; transition: transform 0.3s;"></i>Berapa lama waktu yang dibutuhkan untuk menangani keluhan?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq1" class="collapse" aria-labelledby="heading1" data-parent="#complaintFAQ">
                                <div class="card-body" style="padding: 0 30px 20px 30px; color: #555;">
                                    Waktu penanganan keluhan tergantung pada tingkat prioritas dan kompleksitas masalah. Keluhan prioritas tinggi biasanya ditangani dalam 24-48 jam, sedangkan keluhan reguler dalam 3-5 hari kerja. Kami akan memberikan update status secara berkala.
                                </div>
                            </div>
                        </div>

                        <div class="card faq-card" style="border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); margin-bottom: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-header" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); border: none; padding: 0;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2" style="width: 100%; text-align: left; padding: 20px 30px; color: #1565c0; font-weight: 600; text-decoration: none; border: none; background: transparent;">
                                        <i class="fas fa-chevron-down" style="margin-right: 15px; transition: transform 0.3s;"></i>Apakah keluhan saya akan dijaga kerahasiaannya?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq2" class="collapse" aria-labelledby="heading2" data-parent="#complaintFAQ">
                                <div class="card-body" style="padding: 0 30px 20px 30px; color: #555;">
                                    Ya, kami menjaga kerahasiaan semua informasi yang Anda berikan. Data keluhan hanya digunakan untuk keperluan penanganan internal dan tidak akan disebarkan ke pihak ketiga tanpa izin Anda, kecuali diwajibkan oleh hukum.
                                </div>
                            </div>
                        </div>

                        <div class="card faq-card" style="border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); margin-bottom: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-header" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); border: none; padding: 0;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3" style="width: 100%; text-align: left; padding: 20px 30px; color: #1565c0; font-weight: 600; text-decoration: none; border: none; background: transparent;">
                                        <i class="fas fa-chevron-down" style="margin-right: 15px; transition: transform 0.3s;"></i>Bagaimana cara mengikuti perkembangan keluhan saya?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq3" class="collapse" aria-labelledby="heading3" data-parent="#complaintFAQ">
                                <div class="card-body" style="padding: 0 30px 20px 30px; color: #555;">
                                    Setelah mengirim keluhan, Anda akan menerima email konfirmasi dengan nomor tiket. Gunakan nomor tiket tersebut untuk menanyakan status keluhan melalui email atau telepon. Kami juga akan mengirim update secara berkala.
                                </div>
                            </div>
                        </div>

                        <div class="card faq-card" style="border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); margin-bottom: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-header" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); border: none; padding: 0;">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="faq4" style="width: 100%; text-align: left; padding: 20px 30px; color: #1565c0; font-weight: 600; text-decoration: none; border: none; background: transparent;">
                                        <i class="fas fa-chevron-down" style="margin-right: 15px; transition: transform 0.3s;"></i>Apa yang harus saya lakukan jika tidak puas dengan penanganan keluhan?
                                    </button>
                                </h5>
                            </div>
                            <div id="faq4" class="collapse" aria-labelledby="heading4" data-parent="#complaintFAQ">
                                <div class="card-body" style="padding: 0 30px 20px 30px; color: #555;">
                                    Jika Anda tidak puas dengan penanganan awal, Anda dapat mengajukan banding melalui form yang sama atau menghubungi supervisor kami langsung. Kami berkomitmen untuk menyelesaikan setiap keluhan hingga Anda puas.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section class="tips-section" style="padding: 80px 0; background: linear-gradient(135deg, #e8f4f8 0%, #d1ecf1 100%);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 style="color: #1565c0; font-weight: 700; font-size: 2.5rem; margin-bottom: 20px;"><i class="fas fa-lightbulb" style="margin-right: 15px;"></i>Tips Melaporkan Keluhan</h2>
                    <p style="color: #0d47a1; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Ikuti tips berikut agar keluhan Anda dapat ditangani dengan lebih efektif dan efisien</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="tips-card" style="background: white; border-radius: 20px; padding: 30px; text-align: center; box-shadow: 0 10px 30px rgba(21, 101, 192, 0.15); height: 100%; transition: transform 0.3s;">
                        <div class="tips-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3);">
                            <i class="fas fa-search fa-2x" style="color: white;"></i>
                        </div>
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 15px;">Jelaskan Masalah dengan Detail</h5>
                        <p style="color: #666; line-height: 1.6;">Berikan deskripsi yang lengkap tentang masalah yang Anda alami, termasuk kapan, di mana, dan bagaimana kejadiannya terjadi.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="tips-card" style="background: white; border-radius: 20px; padding: 30px; text-align: center; box-shadow: 0 10px 30px rgba(21, 101, 192, 0.15); height: 100%; transition: transform 0.3s;">
                        <div class="tips-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3);">
                            <i class="fas fa-paperclip fa-2x" style="color: white;"></i>
                        </div>
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 15px;">Lampirkan Bukti Pendukung</h5>
                        <p style="color: #666; line-height: 1.6;">Jika memungkinkan, lampirkan foto, video, atau dokumen yang dapat mendukung keluhan Anda untuk mempercepat proses verifikasi.</p>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="tips-card" style="background: white; border-radius: 20px; padding: 30px; text-align: center; box-shadow: 0 10px 30px rgba(21, 101, 192, 0.15); height: 100%; transition: transform 0.3s;">
                        <div class="tips-icon" style="width: 80px; height: 80px; background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3);">
                            <i class="fas fa-clock fa-2x" style="color: white;"></i>
                        </div>
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 15px;">Laporkan Segera</h5>
                        <p style="color: #666; line-height: 1.6;">Semakin cepat Anda melaporkan keluhan, semakin baik peluang kami untuk menanganinya dengan efektif dan akurat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes particleFloat {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        33% { transform: translateY(-10px) rotate(120deg); }
        66% { transform: translateY(5px) rotate(240deg); }
    }

    .contact-hero .floating-shapes .shape {
        animation: float 6s ease-in-out infinite;
    }

    .contact-hero .floating-shapes .shape-2 {
        animation-delay: 2s;
    }

    .contact-hero .floating-shapes .shape-3 {
        animation-delay: 4s;
    }

    .timeline-particles .particle {
        animation: particleFloat 8s ease-in-out infinite;
    }

    .timeline-particles .particle-2 {
        animation-delay: 2s;
    }

    .timeline-particles .particle-3 {
        animation-delay: 4s;
    }

    .timeline-particles .particle-4 {
        animation-delay: 6s;
    }

    .timeline-step:hover {
        transform: translateY(-10px);
        border-color: #007bff !important;
        box-shadow: 0 15px 40px rgba(0, 123, 255, 0.2) !important;
    }

    .timeline-step:hover .step-icon {
        transform: scale(1.1);
        box-shadow: 0 10px 30px rgba(0, 123, 255, 0.4);
    }

    .timeline-step:hover .step-arrow {
        opacity: 1 !important;
    }

    .timeline-step:hover .step-number {
        background: rgba(0, 123, 255, 0.2) !important;
        color: #007bff !important;
    }

    .category-btn {
        background: #f8f9fa;
        border: 2px solid #e9ecef;
        border-radius: 25px;
        padding: 10px 20px;
        color: #666;
        font-weight: 500;
        transition: all 0.3s;
        cursor: pointer;
        pointer-events: auto;
        user-select: none;
        position: relative;
        z-index: 10;
    }

    .priority-btn {
        background: #e3f2fd;
        border: 2px solid #007bff;
        border-radius: 25px;
        padding: 10px 20px;
        color: #007bff;
        font-weight: 500;
        transition: all 0.3s;
        cursor: pointer !important;
        pointer-events: auto !important;
        user-select: none;
        position: relative;
        z-index: 10;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .category-btn.active {
        background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%) !important;
        color: white !important;
        border-color: #007bff !important;
        transform: translateY(0px) !important;
    }

    .category-btn.active::after {
        content: " ✓";
        font-weight: bold;
    }

    .priority-btn.active {
        background: linear-gradient(135deg, #007bff 0%, #00d4ff 100%) !important;
        color: white !important;
        border-color: #007bff !important;
        transform: translateY(0px) !important;
    }

    .priority-btn.active::after {
        content: " ✓";
        font-weight: bold;
    }

    .category-btn:hover, .priority-btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .floating-label-input {
        position: relative;
        margin-bottom: 30px;
    }

    .floating-label-input .modern-input:focus {
        border-bottom-color: #667eea !important;
        box-shadow: none !important;
    }

    .floating-label-input .modern-input:focus + .floating-label,
    .floating-label-input .modern-input:not(:placeholder-shown) + .floating-label {
        top: -20px;
        font-size: 0.8rem;
        color: #667eea;
        font-weight: 600;
        opacity: 0;
    }

    .floating-label-input textarea:focus + .floating-label,
    .floating-label-input textarea:not(:placeholder-shown) + .floating-label {
        top: -20px;
        font-size: 0.8rem;
        color: #667eea;
        font-weight: 600;
        opacity: 0;
    }

    .modern-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(102,126,234,0.4) !important;
    }

    .modern-btn:hover .btn-overlay {
        left: 100%;
    }

    .contact-card:hover .card-icon {
        transform: scale(1.1);
        transition: transform 0.3s;
    }

    .tips-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(21, 101, 192, 0.2) !important;
    }

    .tips-card:hover .tips-icon {
        transform: scale(1.1);
        box-shadow: 0 10px 30px rgba(0, 123, 255, 0.4);
    }

    @media (max-width: 768px) {
        .contact-hero h1 {
            font-size: 2rem !important;
        }

        .contact-section {
            padding: 40px 0 !important;
        }

        .contact-form-wrapper,
        .contact-card {
            padding: 20px !important;
        }

        .map-wrapper iframe {
            height: 300px !important;
        }

        .timeline-step {
            margin-bottom: 30px !important;
        }

    .timeline-step:hover {
        transform: none;
    }

    .category-btn, .priority-btn {
        pointer-events: auto !important;
        cursor: pointer !important;
        user-select: none;
    }

    .category-btn:hover, .priority-btn:hover {
        opacity: 0.9;
    }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Floating labels animation
        const inputs = document.querySelectorAll('.modern-input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.querySelector('.floating-label').style.top = '-20px';
                this.parentElement.querySelector('.floating-label').style.fontSize = '0.8rem';
                this.parentElement.querySelector('.floating-label').style.color = '#667eea';
                this.parentElement.querySelector('.floating-label').style.fontWeight = '600';
            });

            input.addEventListener('blur', function() {
                if (this.value === '') {
                    this.parentElement.querySelector('.floating-label').style.top = '10px';
                    this.parentElement.querySelector('.floating-label').style.fontSize = '1rem';
                    this.parentElement.querySelector('.floating-label').style.color = '#6c757d';
                    this.parentElement.querySelector('.floating-label').style.fontWeight = 'normal';
                }
            });

            // Check on load
            if (input.value !== '') {
                input.parentElement.querySelector('.floating-label').style.top = '-20px';
                input.parentElement.querySelector('.floating-label').style.fontSize = '0.8rem';
                input.parentElement.querySelector('.floating-label').style.color = '#667eea';
                input.parentElement.querySelector('.floating-label').style.fontWeight = '600';
            }
        });

        // Form validation
        const form = document.getElementById('complaintForm');
        form.addEventListener('submit', function(e) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !subject || !message) {
                e.preventDefault();
                alert('Mohon lengkapi semua field yang diperlukan.');
                return false;
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Mohon masukkan alamat email yang valid.');
                return false;
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Auto redirect to Google Maps when map wrapper is visible
        let mapRedirected = false;
        const mapSection = document.getElementById('map-section');
        if (mapSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !mapRedirected) {
                        mapRedirected = true;
                        window.open('https://maps.app.goo.gl/rSvc1aDDTxuR3xH76', '_blank');
                    }
                });
            }, {
                threshold: 0.5 // Trigger when 50% of the map section is visible
            });
            observer.observe(mapSection);
        }

        // Handle phone click - works on both mobile and desktop
        function handlePhoneClick(phoneNumber) {
            // Check if it's a mobile device
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                // Mobile: use tel: protocol
                window.location.href = 'tel:' + phoneNumber;
            } else {
                // Desktop: copy to clipboard and show message
                navigator.clipboard.writeText(phoneNumber).then(function() {
                    alert('Nomor telepon telah disalin ke clipboard: ' + phoneNumber);
                }).catch(function(err) {
                    alert('Nomor telepon: ' + phoneNumber + '\nSilakan salin nomor ini secara manual.');
                });
            }
        }

        // Handle category button selection
        console.log('Setting up category buttons...');
        const categoryButtons = document.querySelectorAll('.category-btn');
        const categoryInput = document.getElementById('categoryInput');
        console.log('Found', categoryButtons.length, 'category buttons');

        categoryButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Category button clicked:', this.getAttribute('data-value'));

                // Remove active class from all buttons
                categoryButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.style.background = '#f8f9fa';
                    btn.style.borderColor = '#e9ecef';
                    btn.style.color = '#666';
                });

                // Add active class to clicked button
                this.classList.add('active');
                this.style.background = 'linear-gradient(135deg, #007bff 0%, #00d4ff 100%)';
                this.style.borderColor = '#007bff';
                this.style.color = 'white';

                // Set hidden input value
                categoryInput.value = this.getAttribute('data-value');
                console.log('Category input set to:', categoryInput.value);
            });
        });

        // Handle priority button selection
        console.log('Setting up priority buttons...');
        const priorityButtons = document.querySelectorAll('.priority-btn');
        const priorityInput = document.getElementById('priorityInput');
        console.log('Found', priorityButtons.length, 'priority buttons');

        priorityButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Priority button clicked:', this.getAttribute('data-value'));

                // Remove active class from all buttons
                priorityButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.style.background = '#e3f2fd';
                    btn.style.borderColor = '#007bff';
                    btn.style.color = '#007bff';
                });

                // Add active class to clicked button
                this.classList.add('active');
                this.style.background = 'linear-gradient(135deg, #007bff 0%, #00d4ff 100%)';
                this.style.borderColor = '#007bff';
                this.style.color = 'white';

                // Set hidden input value
                priorityInput.value = this.getAttribute('data-value');
                console.log('Priority input set to:', priorityInput.value);
            });
        });

        // Form validation for category and priority
        form.addEventListener('submit', function(e) {
            const category = categoryInput.value;
            const priority = priorityInput.value;

            if (!category) {
                e.preventDefault();
                alert('Mohon pilih kategori keluhan.');
                return false;
            }

            if (!priority) {
                e.preventDefault();
                alert('Mohon pilih tingkat prioritas.');
                return false;
            }
        });

    });
</script>
@endpush
