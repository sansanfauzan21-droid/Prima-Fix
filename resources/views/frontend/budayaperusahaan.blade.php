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
                                Budaya Perusahaan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8">
            <h1 class="section-heading" style="color: #333; font-weight: bold; margin-bottom: 20px;">BUDAYA PERUSAHAAN</h1>
            <p class="lead" style="color: #666; font-size: 1.2em;">Nilai-nilai yang Mendorong Kami Menuju Kesuksesan Bersama</p>
        </div>
    </div>

    <!-- Nilai Utama -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div class="card shadow-lg" style="border: none; border-radius: 15px; overflow: hidden; background: linear-gradient(135deg, #FFA500 0%, #FF8C00 100%);">
                <div class="card-body text-center p-4">
                    <h3 class="card-title" style="font-weight: bold; font-size: 2.5em; font-family: 'Times New Roman', serif; color: #000; margin: 0;">SMART</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Budaya Perusahaan -->
    <div class="row">
        <!-- SYNERGY -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/synergy.png') }}" alt="Synergy" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">SYNERGY</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Membangun lingkungan kerja yang mendorong untuk melakukan kolaborasi antar individu dan tim untuk bisa mencapai tujuan bersama.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        Building a work environment that encourages collaboration between individuals and teams to achieve common goals.
                    </p>
                </div>
            </div>
        </div>

        <!-- MOTIVATION -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/motivasi.png') }}" alt="Motivation" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">MOTIVATION</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Mendorong semua individu dan tim untuk bisa mencapai tujuan, serta dapat menghadapi tantangan dan terus selalu bersemangat, serta fokus pada apa yang ingin dicapai.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        Encouraging all individuals and teams to achieve their goals, face challenges, stay motivated, and remain focused on what they want to accomplish.
                    </p>
                </div>
            </div>
        </div>

        <!-- MORALS -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/morals.png') }}" alt="Morals" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">AKHLAK</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Mendorong semua individu dan tim untuk memiliki nilai nilai moral, etika dan integritas kepada semua Stakeholder untuk bisa membentuk hubungan yang harmonis.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        Encouraging all individuals and teams to uphold moral values, ethics, and integrity with all stakeholders in order to build harmonious relationships.
                    </p>
                </div>
            </div>
        </div>

        <!-- RESPECT -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/respect.png') }}" alt="Respect" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">RESPECT</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Mendorong semua individu dan tim untuk selalu menghargai, menghormati dan memperlakukan orang lain dengan penuh penghargaan, baik dalam ucapan, tindakan, maupun pikiran.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        Encouraging all individuals and teams to always appreciate, respect, and treat others with full regard, in words, actions, and thoughts.
                    </p>
                </div>
            </div>
        </div>

        <!-- TARGET -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/target.png') }}" alt="Target" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">TARGET</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Mendorong semua individu dan tim untuk selalu memiliki tujuan atau sasaran yang spesifik, relevan, jelas dan terukur. Serta menciptakan rasa urgensi dan mendorong tindakan yang lebih terencana dalam menyelesaikan semua pekerjaan.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        Encouraging all individuals and teams to always have specific, relevant, clear, and measurable goals or objectives.
                    </p>
                </div>
            </div>
        </div>

@endsection
