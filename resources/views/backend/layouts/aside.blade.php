 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ CompanyHelper::get() && CompanyHelper::get()['logos'] ? asset('storage/' . CompanyHelper::get()['logos']) : asset('assets/img/logo.png') }}"
                    alt="Pt. Aliansi Prima Energi" style="width: 46px; height: 46px; object-fit: contain;">
            </span>
            <span
                class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase fs-4">{{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'Pt. Aliansi Prima Energi' }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('dashboard*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Company Profile -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Company Profile</span>
        </li>
        <!-- Home -->
        <li class="menu-item {{ Request::is('company-profile/home*') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Home">Home</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('company-profile/home/hero*') ? 'active' : '' }}">
                    <a href="{{ route('home.hero.index') }}" class="menu-link">
                        <div data-i18n="Hero">Hero</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('company-profile/home/about*') ? 'active' : '' }}">
                    <a href="{{ route('home.about.index') }}" class="menu-link">
                        <div data-i18n="About">About</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('company-profile/home/highlight*') ? 'active' : '' }}">
                    <a href="{{ route('home.highlight.index') }}" class="menu-link">
                        <div data-i18n="Highlight">Highlight</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('company-profile/home/content*') ? 'active' : '' }}">
                    <a href="{{ route('home-content.index') }}" class="menu-link">
                        <div data-i18n="Content">Content</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('company-profile/home/sbu-image*') ? 'active' : '' }}">
                    <a href="{{ route('home.sbu-image.index') }}" class="menu-link">
                        <div data-i18n="SBU Images">SBU Images</div>
                    </a>
                </li>
            </ul>
        </li>


        <!-- Utilities -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">utilities</span></li>
        <!-- Company -->
        <li class="menu-item {{ Request::is('utilities/company*') ? 'active' : '' }}">
            <a href="{{ route('company.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div data-i18n="Company">Company</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('utilities/regulations*') ? 'active' : '' }}">
            <a href="{{ route('regulations.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Regulations">Regulations</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('utilities/contact-form*') ? 'active' : '' }}">
            <a href="{{ route('contact-form.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-alt-detail"></i>
                <div data-i18n="Contact Form">Contact Form</div>
            </a>
        </li>
    </ul>
</aside>
