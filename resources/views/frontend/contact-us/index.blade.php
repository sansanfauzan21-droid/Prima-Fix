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
                            <h1 data-aos="fade-up" data-aos-delay="100" style="color: white; font-weight: 700; font-size: 3rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); margin-bottom: 20px;">Hubungi Kami</h1>
                            <p data-aos="fade-up" data-aos-delay="300" style="color: rgba(255,255,255,0.9); font-size: 1.2rem; font-weight: 300;">Kami siap membantu Anda dengan layanan terbaik kami. Jangan ragu untuk menghubungi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush

@section('content')
    <section class="section contact-section" style="padding: 80px 0; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 style="color: #333; font-weight: 700; font-size: 2.5rem; margin-bottom: 20px;">Mari Terhubung Dengan Kami</h2>
                    <p style="color: #666; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Ada pertanyaan, butuh bantuan atau kendala? Beritahu kepada kami dan kami akan segera merespons.</p>
                </div>
            </div>

            <div class="row">
                <!-- Contact Info Cards -->
                <div class="col-lg-4 mb-5" data-aos="fade-right">
                    <div class="contact-info-wrapper">
                        <!-- Address Card -->
                        <div class="contact-card" style="background: white; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.15), 0 5px 15px rgba(0,0,0,0.08); margin-bottom: 30px; padding: 30px; transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; transform: perspective(1200px) rotateX(5deg) rotateY(-3deg) rotateZ(1deg); transform-style: preserve-3d;" onmouseover="this.style.transform='perspective(1200px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) translateY(-10px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(0,0,0,0.2), 0 10px 25px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='perspective(1200px) rotateX(5deg) rotateY(-3deg) rotateZ(1deg)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15), 0 5px 15px rgba(0,0,0,0.08)'">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(102,126,234,0.05) 0%, rgba(118,75,162,0.05) 100%); border-radius: 20px; transform: translateZ(-20px);"></div>
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                            <div class="card-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(102,126,234,0.3);">
                                <i class="fas fa-map-marker-alt fa-lg" style="color: white;"></i>
                            </div>
                            <h5 style="color: #333; font-weight: 700; margin-bottom: 15px; font-size: 1.1em;">Alamat</h5>
                            <a href="#map-section" style="color: #666; text-decoration: none; transition: color 0.3s; cursor: pointer;" onmouseover="this.style.color='#667eea'" onmouseout="this.style.color='#666'">
                                <p style="line-height: 1.6; margin-bottom: 0;">{{ $company && $company->address ? $company->address : 'Jl. Pinus Raya No. 133, Perumahan Pinus Regency, Kel. Babakan Penghulu, Kec. Cinambo, Kota Bandung' }}</p>
                            </a>
                        </div>

                        <!-- Phone Card -->
                        <div class="contact-card" style="background: white; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.15), 0 5px 15px rgba(0,0,0,0.08); margin-bottom: 30px; padding: 30px; transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1); position: relative;" onmouseover="this.style.transform='translateY(-10px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(0,0,0,0.2), 0 10px 25px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15), 0 5px 15px rgba(0,0,0,0.08)'">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); border-radius: 20px 20px 0 0;"></div>
                            <div class="card-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(40,167,69,0.3);">
                                <i class="fas fa-phone fa-lg" style="color: white;"></i>
                            </div>
                            <h5 style="color: #333; font-weight: 700; margin-bottom: 15px; font-size: 1.1em;">Telepon</h5>
                            <span onclick="handlePhoneClick('{{ preg_replace('/\D/', '', $company && $company->phone_number ? $company->phone_number : '+62811205411') }}')" style="color: #28a745; text-decoration: none; font-weight: 600; font-size: 1.1em; transition: color 0.3s; cursor: pointer;" onmouseover="this.style.color='#20c997'">{{ $company && $company->phone_number ? $company->phone_number : '+62 811205411' }}</span>
                            <p style="color: #666; margin-top: 10px; font-size: 0.9em;">Klik untuk menghubungi via telepon</p>
                        </div>

                        <!-- Email Card -->
                        <div class="contact-card" style="background: white; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.15), 0 5px 15px rgba(0,0,0,0.08); padding: 30px; transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1); position: relative;" onmouseover="this.style.transform='translateY(-10px) scale(1.02)'; this.style.boxShadow='0 25px 50px rgba(0,0,0,0.2), 0 10px 25px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.15), 0 5px 15px rgba(0,0,0,0.08)'">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%); border-radius: 20px 20px 0 0;"></div>
                            <div class="card-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 25px rgba(255,193,7,0.3);">
                                <i class="fas fa-envelope fa-lg" style="color: white;"></i>
                            </div>
                            <h5 style="color: #333; font-weight: 700; margin-bottom: 15px; font-size: 1.1em;">Email</h5>
                            <a href="mailto:{{ $company && $company->email ? $company->email : 'office.aliansi@gmail.com' }}" style="color: #ffc107; text-decoration: none; font-weight: 600; font-size: 1.1em; transition: color 0.3s; cursor: pointer;" onmouseover="this.style.color='#fd7e14'">{{ $company && $company->email ? $company->email : 'office.aliansi@gmail.com' }}</a>
                                <p style="color: #666; margin-top: 10px; font-size: 0.9em;">Kirim email untuk pertanyaan lebih detail</p>
                            </div>
                        </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="contact-form-wrapper" style="background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 40px; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                        <h3 style="color: #333; font-weight: 700; margin-bottom: 30px; text-align: center;">Kirim Pesan</h3>

                        <form action="{{ route('frontend.contact-us.send') }}" method="post" role="form" id="contactForm">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <div class="floating-label-input">
                                        <input type="text" name="name" class="form-control modern-input" id="name" placeholder=" " required style="border: none; border-bottom: 2px solid #e9ecef; border-radius: 0; padding: 10px 0; font-size: 1rem; background: transparent; transition: border-color 0.3s;">
                                        <label for="name" class="floating-label" style="position: absolute; top: 10px; left: 0; color: #6c757d; transition: all 0.3s; pointer-events: none;">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="floating-label-input">
                                        <input type="email" class="form-control modern-input" name="email" id="email" placeholder=" " required style="border: none; border-bottom: 2px solid #e9ecef; border-radius: 0; padding: 10px 0; font-size: 1rem; background: transparent; transition: border-color 0.3s;">
                                        <label for="email" class="floating-label" style="position: absolute; top: 10px; left: 0; color: #6c757d; transition: all 0.3s; pointer-events: none;">Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 30px;">
                                <div class="floating-label-input">
                                    <input type="text" class="form-control modern-input" name="subject" id="subject" placeholder=" " required style="border: none; border-bottom: 2px solid #e9ecef; border-radius: 0; padding: 10px 0; font-size: 1rem; background: transparent; transition: border-color 0.3s;">
                                    <label for="subject" class="floating-label" style="position: absolute; top: 10px; left: 0; color: #6c757d; transition: all 0.3s; pointer-events: none;">Subjek</label>
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 30px;">
                                <div class="floating-label-input">
                                    <textarea class="form-control modern-input" name="message" id="message" placeholder=" " rows="5" required style="border: none; border-bottom: 2px solid #e9ecef; border-radius: 0; padding: 10px 0; font-size: 1rem; background: transparent; transition: border-color 0.3s; resize: vertical;"></textarea>
                                    <label for="message" class="floating-label" style="position: absolute; top: 10px; left: 0; color: #6c757d; transition: all 0.3s; pointer-events: none;">Pesan</label>
                                </div>
                            </div>

                            @if(session('success'))
                                <div class="alert alert-success" style="margin-top: 20px; border-radius: 10px; border: none; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white;">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger" style="margin-top: 20px; border-radius: 10px; border: none; background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white;">{{ session('error') }}</div>
                            @endif

                            <div class="form-group" style="margin-top: 40px; text-align: center;">
                                <button type="submit" class="btn btn-primary modern-btn" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; color: white; padding: 15px 40px; border-radius: 50px; font-weight: 600; font-size: 1.1rem; box-shadow: 0 8px 25px rgba(102,126,234,0.3); transition: all 0.3s; position: relative; overflow: hidden;">
                                    <span class="btn-text">Kirim Pesan</span>
                                    <div class="btn-overlay" style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: left 0.5s;"></div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Google Map Section -->
            <div id="map-section" class="row mt-5" data-aos="fade-up">
                <div class="col-12">
                    <div class="map-wrapper" style="border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative; cursor: pointer;" onclick="window.open('https://maps.app.goo.gl/rSvc1aDDTxuR3xH76', '_blank')">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.902!2d107.6822775!3d-6.9303734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c343636b18f3:0x717c150b674b1dc9!2sPT+ALIANSI+PRIMA+ENERGI!5e0!3m2!1sen!2sid!4v1690000000000!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" onclick="event.stopPropagation()"></iframe>
                        <div class="map-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(102,126,234,0.1); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; pointer-events: none;">
                            <div style="background: rgba(255,255,255,0.9); padding: 10px 20px; border-radius: 25px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                                <i class="fas fa-external-link-alt" style="margin-right: 8px; color: #667eea;"></i>
                                <span style="color: #333; font-weight: 600;">Buka di Google Maps</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
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
        const form = document.getElementById('contactForm');
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


    });
</script>
@endpush
