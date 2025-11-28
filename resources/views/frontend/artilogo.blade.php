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
                                Arti Logo</h1>
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
            <h1 class="section-heading" style="color: #333; font-weight: bold; margin-bottom: 20px;">ARTI LOGO ALIANSI PRIMA ENERGI</h1>
            <p class="lead" style="color: #666; font-size: 1.2em;">Makna dan Filosofi di Balik Identitas Visual Kami</p>
        </div>
    </div>

    <!-- Logo Utama -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
            <div class="card shadow-lg" style="border: none; border-radius: 20px; overflow: hidden;">
                <div class="card-body p-5">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Aliansi Prima Energi" class="img-fluid mb-4" style="max-width: 250px;">
                    <h3 class="card-title" style="color: #FFA500; font-weight: bold;">Logo Utama</h3>
                    <p class="card-text" style="color: #555; font-size: 1.1em; line-height: 1.6;">
                        Logo Aliansi Prima Energi melambangkan kekuatan, kehandalan, dan inovasi dalam bidang jasa ketenagalistrikan.
                        Setiap elemen desain memiliki makna filosofis yang mendalam.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Elemen-elemen Logo -->
    <div class="row">
        <!-- Berpegangan Tangan -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/berpegangan.png') }}" alt="Berpegangan Tangan" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">Berpegangan Tangan</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Melambangkan kebersamaan, kekuatan, persatuan dan dukungan antar individu yang saling terikat.
                        Berpegangan tangan yang dilakukan oleh empat orang menunjukkan bahwa setiap individu memiliki peran penting.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        Holding hands symbolizes togetherness, strength, unity, and mutual support between individuals who are connected.
                    </p>
                </div>
            </div>
        </div>

        <!-- Kincir Angin -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/kincir.png') }}" alt="Kincir Angin" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">Kincir Angin</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Melambangkan pemanfaatan sumber daya alam dengan bijak, ketekunan, dan kemampuan mengubah tantangan menjadi peluang.
                        Kincir angin mengajarkan kesabaran dan pentingnya timing dalam mencapai tujuan.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        The windmill symbolizes the wise utilization of natural resources, perseverance, and the ability to turn challenges into opportunities.
                    </p>
                </div>
            </div>
        </div>

        <!-- Petir -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/petir.png') }}" alt="Petir" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">Petir</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Melambangkan kekuatan, ketegasan, dan perubahan mendadak yang dapat mengubah keadaan dalam sekejap.
                        Petir juga mampu bersinar ditengah ketidakpastian dan menghadapi tantangan tanpa rasa takut.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        Lightning symbolizes strength, decisiveness, and sudden change that can transform a situation in an instant.
                    </p>
                </div>
            </div>
        </div>

        <!-- Warna Jingga -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/warnaorange.png') }}" alt="Warna Jingga" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">Warna Jingga</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Melambangkan antusiasme, energi, dan kreativitas. Warna ini sering diasosiasikan dengan kehangatan, semangat, dan optimisme.
                        Warna jingga juga membawa kesan ramah dan memotivasi.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        The orange color symbolizes enthusiasm, energy, and creativity. It is often associated with warmth, spirit, and optimism.
                    </p>
                </div>
            </div>
        </div>

        <!-- Warna Hijau Muda -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/warnahijau.png') }}" alt="Warna Hijau Muda" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">Warna Hijau Muda</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Melambangkan pertumbuhan, pembaruan, dan kesehatan. Hijau muda mengingatkan pada alam, kesegaran, dan kemurnian.
                        Warna ini mencerminkan kebangkitan, perkembangan, dan optimisme.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        Light green symbolizes growth, renewal, and health. It reminds us of nature, freshness, and purity.
                    </p>
                </div>
            </div>
        </div>

        <!-- Warna Biru Muda -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/warnabirum.png') }}" alt="Warna Biru Muda" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">Warna Biru Muda</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Melambangkan ketenangan, kedamaian, dan kepercayaan. Warna biru muda sering dihubungkan dengan rasa tenang dan suasana yang santai.
                        Ia juga menginspirasi rasa percaya diri dan keandalan.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        The color light blue symbolizes calmness, peace, and trust. Light blue is often associated with a sense of tranquility.
                    </p>
                </div>
            </div>
        </div>

        <!-- Warna Hitam -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100" style="border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/warnahitam.png') }}" alt="Warna Hitam" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h4 class="card-title" style="color: #FFA500; font-weight: bold;">Warna Hitam</h4>
                    <p class="card-text" style="color: #555; line-height: 1.6;">
                        Melambangkan kekuatan, ketegasan, dan misteri. Warna hitam sering dikaitkan dengan keseriusan dan formalitas,
                        tetapi juga bisa menunjukkan kecanggihan dan kekuatan yang tidak tergoyahkan.
                    </p>
                    <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                        The color black symbolizes strength, decisiveness, and mystery. Black is often associated with seriousness and formality.
                    </p>
                </div>
            </div>
        </div>

       
@endsection
