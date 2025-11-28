<nav id="navbar" class="navbar">
    <ul>
        <li class="dropdown"><a href="#"><span>Beranda</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                <li><a href="{{ route('frontend.home.logo') }}">Arti Logo</a></li>
                <li><a href="{{ route('frontend.visimisi.index') }}">Visi dan Misi</a></li>
                <li><a href="{{ route('frontend.home.culture') }}">Budaya Perusahaan</a></li>
            </ul>
        </li>
        <li><a href="{{ route('frontend.home.organization') }}">Struktur Organisasi</a></li>
        <li class="dropdown"><a href="#"><span>Pelayanan Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{ route('frontend.services.index') }}">Wilayah Operasional</a></li>
                <li><a href="{{ route('frontend.services.slo') }}">Sertifikasi Laik Operasi (SLO)</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Legalitas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{ route('frontend.legalitas.index') }}">Legalitas Perusahaan</a></li>
                <li><a href="{{ route('frontend.legalitas.index') }}#sertifikat">Sertifikat Perusahaan</a></li>
                <li><a href="{{ route('frontend.legalitas.regulasi') }}">Regulasi Perusahaan</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Contact Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="{{ route('frontend.contact-us.index') }}">Contact Us</a></li>
                <li><a href="{{ route('frontend.contact-us.keluhankendala') }}">Keluhan Dan Banding</a></li>
            </ul>
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
