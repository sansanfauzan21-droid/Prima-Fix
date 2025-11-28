@extends('frontend.layouts.main')

@push('hero')
    <section class="hero-section inner-page" style="clip-path: none; -webkit-clip-path: none;">
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
                                Visi</h1>
                                <p style="color: white; text-align: justify; text-justify: inter-word; margin: 0 auto; max-width: 600px;">Menjadi perusahaan jasa ketenagalsitrikan yang terdepan,
                    handal, inovatif, dan ramah lingkungan. Dan juga selalu
                    berkomitmen menyediakan solusi ketenagalistrikan yang
                    berkualitas bagi masyarakat dan juga dunia industri, guna
                    mendukung pembangunan nasional yang berkelanjutan.</p>
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
            <h1 class="section-heading" style="color: #333; font-weight: bold; margin-bottom: 20px;">MISI PERUSAHAAN</h1>
            <p class="lead" style="color: #666; font-size: 1.2em;">Komitmen Aliansi Prima Energi dalam memberikan pelayanan terbaik</p>
        </div>
    </div>

    <style>
        .mission-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            background-clip: padding-box;
        }

        .mission-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, #4f4b4aff 8%, #e6efecd8 40%, #cfdff1ff 55%, #f3c2a3ff 95%);
            border-radius: 20px;
            z-index: -1;
            padding: 2px;
        }

        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .mission-card:hover .card-title {
            color: #000000;
        }

        .mission-card .card-text {
            font-weight: bold;
            font-family: 'calibri';
        }

        .mission-card .card-title {
            margin-bottom: 1rem;
        }
    </style>

    <div class="row">
        <!-- Misi 1 -->
        <div class="col-md-6 mb-4">
            <div class="card mission-card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/1.png') }}" alt="Reliable Services" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.8em;">Memberikan Layanan Ketenagalistrikan yang Andal dan Aman</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1.1em;">
                        Menyediakan jasa kelistrikan yang berkualitas tinggi dengan mengutamakan keamanan, stabilitas, dan keandalan sistem listrik.
                    </p>
                    <p class="card-text" style="color: #5a5959ff; font-style: italic; font-size: 1em;">
                        Providing Reliable and Safe Electrical Services. Providing high-quality electrical services with a focus on safety, stability, and system reliability.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi 2 -->
        <div class="col-md-6 mb-4">
            <div class="card mission-card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/2.png') }}" alt="Customer Satisfaction" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.8em;">Mengutamakan Kepuasan Pelanggan</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1.1em;">
                        Fokus pada pemenuhan kebutuhan pelanggan melalui pelayanan yang profesional, tepat waktu, dan responsif terhadap setiap permintaan atau keluhan.
                    </p>
                    <p class="card-text" style="color: #5a5959ff; font-style: italic; font-size: 1em;">
                        Focusing on meeting customer needs through professional, timely service, and being responsive to every request or complaint.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi 3 -->
        <div class="col-md-6 mb-4">
            <div class="card mission-card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/3.png') }}" alt="Innovation" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.8em;">Mendorong Inovasi Teknologi</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1.1em;">
                        Mengembangkan solusi kelistrikan berbasis teknologi terbaru untuk meningkatkan efisiensi dan efektivitas pelayanan.
                    </p>
                    <p class="card-text" style="color: #5a5959ff; font-style: italic; font-size: 1em;">
                        Encouraging Technological Innovation. Developing electrical solutions based on the latest technology to enhance service efficiency and effectiveness.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi 4 -->
        <div class="col-md-6 mb-4">
            <div class="card mission-card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/4.png') }}" alt="Renewable Energy" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.8em;">Mendukung Energi Terbarukan</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1.1em;">
                        Berpartisipasi aktif dalam pengembangan dan implementasi energi terbarukan sebagai bagian dari komitmen terhadap keberlanjutan lingkungan.
                    </p>
                    <p class="card-text" style="color: #5a5959ff; font-style: italic; font-size: 1em;">
                        Supporting Renewable Energy. Actively participating in the development and implementation of renewable energy as part of our commitment to environmental sustainability.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi 5 -->
        <div class="col-md-6 mb-4">
            <div class="card mission-card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/5.png') }}" alt="Human Resources" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.8em;">Memperkuat Kompetensi Sumber Daya Manusia</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1.1em;">
                        Melakukan pengembangan dan pelatihan berkelanjutan bagi karyawan agar memiliki keterampilan dan pengetahuan yang sesuai dengan perkembangan teknologi kelistrikan.
                    </p>
                    <p class="card-text" style="color: #5a5959ff; font-style: italic; font-size: 1em;">
                        Strengthening Human Resource Competence. Implementing continuous development and training for employees to ensure they possess the skills and knowledge in line with the advancements in electrical technology.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi 6 -->
        <div class="col-md-6 mb-4">
            <div class="card mission-card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/6.png') }}" alt="Safety" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.8em;">Mengedepankan Keselamatan dan Keamanan Kerja</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1.1em;">
                        Memastikan seluruh pekerjaan dilakukan sesuai standar keselamatan dan keamanan, baik bagi karyawan maupun pelanggan, demi meminimalkan risiko.
                    </p>
                    <p class="card-text" style="color: #5a5959ff; font-style: italic; font-size: 1em;">
                        Prioritizing Workplace Safety and Security. Ensuring that all work is carried out in accordance with safety and security standards, for both employees and customers, to minimize risks.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi 7 -->
        <div class="col-md-6 mb-4">
            <div class="card mission-card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/7.png') }}" alt="Partnership" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.8em;">Membangun Kemitraan yang Kuat</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1.1em;">
                        Meningkatkan kerja sama dengan pihak terkait seperti pemerintah, industri, dan masyarakat dalam rangka menyediakan solusi kelistrikan yang komprehensif.
                    </p>
                    <p class="card-text" style="color: #5a5959ff; font-style: italic; font-size: 1em;">
                        Building Strong Partnerships. Enhancing cooperation with relevant stakeholders such as the government, industry, and the community to provide comprehensive electrical solutions.
                    </p>
                </div>
            </div>
        </div>

        <!-- Misi 8 -->
        <div class="col-md-6 mb-4">
            <div class="card mission-card h-100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/8.png') }}" alt="Environment" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.8em;">Mengurangi Dampak Lingkungan</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1.1em;">
                        Mengoptimalkan penggunaan teknologi ramah lingkungan dan meningkatkan efisiensi energi dalam setiap proyek kelistrikan.
                    </p>
                    <p class="card-text" style="color: #5a5959ff; font-style: italic; font-size: 1em;">
                        Reducing Environmental Impact. Optimizing the use of environmentally friendly technology and improving energy efficiency in every electrical project.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
