@extends('backend.layouts.main')

@section('content')

<!-- Welcome Section -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card position-relative overflow-hidden" style="min-height: 300px; background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #333333 100%); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
            <!-- Animated Background Elements -->
            <div class="position-absolute top-0 end-0 opacity-20">
                <i class="fas fa-cogs fa-3x text-light animate-pulse" style="animation: float 3s ease-in-out infinite; filter: drop-shadow(0 0 10px rgba(255,255,255,0.3));"></i>
            </div>
            <div class="position-absolute bottom-0 start-0 opacity-20">
                <i class="fas fa-chart-line fa-4x text-light animate-bounce" style="animation-delay: 1s; filter: drop-shadow(0 0 10px rgba(255,255,255,0.3));"></i>
            </div>
            <div class="position-absolute top-50 start-50 translate-middle opacity-5">
                <i class="fas fa-building fa-5x text-light" style="animation: rotate 20s linear infinite; filter: drop-shadow(0 0 20px rgba(255,255,255,0.2));"></i>
            </div>

            <div class="card-body position-relative">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="text-light mb-3 animate__animated animate__fadeInUp" style="text-shadow: 0 0 20px rgba(255,255,255,0.5); font-weight: 700;">
                            <i class="fas fa-rocket mr-2 animate-pulse text-warning" style="filter: drop-shadow(0 0 10px rgba(255,215,0,0.8));"></i>
                            Selamat Datang di Dashboard PT ALIANSI PRIMA ENERGI
                        </h2>
                        <p class="text-light mb-4 lead animate__animated animate__fadeInUp animate__delay-1s" style="text-shadow: 0 0 10px rgba(255,255,255,0.3);">
                            <i class="fas fa-star mr-1 text-warning animate-pulse"></i>
                            Kelola konten website perusahaan dengan mudah dan efisien.
                            Pantau statistik penting dan akses fitur utama dari sini.
                        </p>
                        <div class="d-flex flex-wrap gap-2 animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="{{ route('home.hero.index') }}" class="btn btn-warning btn-lg shadow-sm hover-lift" style="border: none; box-shadow: 0 4px 15px rgba(255,215,0,0.3);">
                                <i class="fas fa-image mr-1"></i> Kelola Hero
                            </a>
                            <a href="{{ route('home-content.index') }}" class="btn btn-outline-light btn-lg shadow-sm hover-lift" style="border-color: rgba(255,255,255,0.5);">
                                <i class="fas fa-edit mr-1"></i> Edit Konten
                            </a>
                            <a href="{{ route('company.index') }}" class="btn btn-outline-light btn-lg shadow-sm hover-lift" style="border-color: rgba(255,255,255,0.5);">
                                <i class="fas fa-building mr-1"></i> Company Info
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center animate__animated animate__zoomIn animate__delay-1s">
                        <div class="position-relative">
                            <i class="fas fa-tachometer-alt text-light" style="font-size: 8rem; opacity: 0.4; filter: drop-shadow(0 0 30px rgba(255,255,255,0.4));"></i>
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <i class="fas fa-play-circle text-warning fa-2x animate-pulse" style="filter: drop-shadow(0 0 15px rgba(255,215,0,0.8));"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .hover-lift:hover {
        transform: translateY(-2px);
        transition: transform 0.3s ease;
    }

    .animate-spin-on-load {
        animation: spin 2s ease-in-out;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
            }
    }

    .progress-circle {
        animation: progress-fill 2s ease-in-out;
    }

    @keyframes progress-fill {
        0% {
            stroke-dasharray: 0, 100;
        }

        100% {
            stroke-dasharray: {
                    {
                    min($stats['sbu_images'] * 10, 100)
                }
            }

            ,
            100;
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.2);
            opacity: 0.7;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Quick Actions Enhanced Styles */
    .hover-scale:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    }

    .action-card:hover .icon-wrapper i {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }

    .icon-wrapper {
        transition: transform 0.3s ease;
    }

    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .animate-bounce {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }

    .card.shadow-lg {
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }

    .action-card {
        transition: all 0.3s ease;
    }

    .action-card:hover {
        text-decoration: none !important;
    }

    /* Notification Badge Styles */
    .notification-badge {
        border-radius: 50%;
        min-width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        border: 2px solid white;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        animation: notification-pulse 2s infinite;
    }

    @keyframes notification-pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        50% {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        100% {
            transform: scale(1);
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
    }

    /* Enhanced notification positioning */
    .card.position-relative .notification-badge {
        z-index: 10;
    }
</style>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
        <a href="{{ route('home-content.index') }}" class="text-decoration-none">
            <div class="card hover-lift" style="cursor: pointer; transition: transform 0.3s ease;">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-heading">Home Contents</span>
                            <div class="d-flex align-items-center my-1">
                                <h4 class="mb-0 me-2">{{ $stats['home_contents'] }}</h4>
                            </div>
                            <small class="text-success fw-semibold">
                                <i class="bx bx-up-arrow-alt"></i> Section
                            </small>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-primary">
                                <i class="bx bx-edit bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
        <a href="{{ route('home.sbu-image.index') }}" class="text-decoration-none">
            <div class="card hover-lift" style="cursor: pointer; transition: transform 0.3s ease;">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-heading">SBU Images</span>
                            <div class="d-flex align-items-center my-1">
                                <div class="position-relative d-inline-block me-2">
                                    <svg width="60" height="60" viewBox="0 0 36 36" class="circular-chart animate-spin-on-load">
                                        <path d="m18,2.0845 a 15.9155,15.9155 0 0,1 0,31.831 a 15.9155,15.9155 0 0,1 0,-31.831"
                                            fill="none"
                                            stroke="#e6e6e6"
                                            stroke-width="2" />
                                        <path d="m18,2.0845 a 15.9155,15.9155 0 0,1 0,31.831 a 15.9155,15.9155 0 0,1 0,-31.831"
                                            fill="none"
                                            stroke="#28a745"
                                            stroke-width="2"
                                            stroke-dasharray="{{ min($stats['sbu_images'] * 10, 100) }}, 100"
                                            class="progress-circle" />
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <span class="fw-bold text-dark">{{ $stats['sbu_images'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <small class="text-success fw-semibold">
                                <i class="bx bx-up-arrow-alt"></i> Images
                            </small>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-success">
                                <i class="bx bx-image bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
        <a href="{{ route('contact-form.index') }}" class="text-decoration-none">
            <div class="card hover-lift" style="cursor: pointer; transition: transform 0.3s ease;">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-heading">Contact Forms</span>
                            <div class="d-flex align-items-center my-1">
                                <h4 class="mb-0 me-2">{{ $stats['contact_forms'] }}</h4>
                            </div>
                            <small class="text-success fw-semibold">
                                <i class="bx bx-up-arrow-alt"></i> Messages
                            </small>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-info">
                                <i class="bx bx-message-alt-detail bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>



    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
        <a href="{{ route('review.index') }}" class="text-decoration-none">
            <div class="card hover-lift" style="cursor: pointer; transition: transform 0.3s ease;">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-heading">Reviews</span>
                            <div class="d-flex align-items-center my-1">
                                <h4 class="mb-0 me-2">{{ $stats['reviews'] }}</h4>
                            </div>
                            <small class="text-success fw-semibold">
                                <i class="bx bx-up-arrow-alt"></i> Reviews
                            </small>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-secondary">
                                <i class="bx bx-comment bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4">
        <a href="{{ route('regulations.index') }}" class="text-decoration-none">
            <div class="card hover-lift" style="cursor: pointer; transition: transform 0.3s ease;">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-heading">Regulations</span>
                            <div class="d-flex align-items-center my-1">
                                <h4 class="mb-0 me-2">{{ $stats['regulations'] }}</h4>
                            </div>
                            <small class="text-success fw-semibold">
                                <i class="bx bx-up-arrow-alt"></i> Documents
                            </small>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-danger">
                                <i class="bx bx-file bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Quick Actions & System Overview -->
<div class="row mb-4">
    <div class="col-lg-8 mb-4">
        <div class="card shadow-lg border-0" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 15px; overflow: hidden;">
            <div class="card-header bg-gradient-primary text-white position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 15px 15px 0 0;">
                <div class="position-absolute top-0 end-0 opacity-25">
                    <i class="fas fa-rocket fa-2x animate-pulse"></i>
                </div>
                <h5 class="card-title mb-0 fw-bold">
                    <i class="bx bx-rocket-launch me-2"></i> Quick Actions
                    <small class="text-white-50 fw-light">Access frequently used features</small>
                </h5>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    <!-- Content Management Section -->
                    <div class="col-12 mb-3">
                        <h6 class="text-muted mb-3">
                            <i class="bx bx-edit-alt me-1"></i> Content Management
                        </h6>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="{{ route('home.hero.index') }}" class="action-card text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm hover-scale" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 12px; transition: all 0.3s ease;">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper mb-2">
                                                <i class="bx bx-image fa-2x"></i>
                                            </div>
                                            <h6 class="card-title mb-1 fw-bold">Manage Hero</h6>
                                            <small class="opacity-75">Hero section content</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Media & Assets Section -->
                    <div class="col-12 mb-3">
                        <h6 class="text-muted mb-3">
                            <i class="bx bx-image-alt me-1"></i> Media & Assets
                        </h6>
                        <div class="row g-2">

                            <div class="col-md-6">
                                <a href="{{ route('home.sbu-image.index') }}" class="action-card text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm hover-scale" style="background: linear-gradient(135deg, #6c757d 0%, #495057 100%); color: white; border-radius: 12px; transition: all 0.3s ease;">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper mb-2">
                                                <i class="bx bx-image-alt fa-2x"></i>
                                            </div>
                                            <h6 class="card-title mb-1 fw-bold">SBU Images</h6>
                                            <small class="opacity-75">Business unit images</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Business Operations Section -->
                    <div class="col-12 mb-3">
                        <h6 class="text-muted mb-3">
                            <i class="bx bx-building me-1"></i> Business Operations
                        </h6>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="{{ route('home-content.index') }}" class="action-card text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm hover-scale" style="background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%); color: white; border-radius: 12px; transition: all 0.3s ease;">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper mb-2">
                                                <i class="bx bx-edit fa-2x"></i>
                                            </div>
                                            <h6 class="card-title mb-1 fw-bold">Edit Content</h6>
                                            <small class="opacity-75">Home page content</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('company.index') }}" class="action-card text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm hover-scale" style="background: linear-gradient(135deg, #dc3545 0%, #e83e8c 100%); color: white; border-radius: 12px; transition: all 0.3s ease;">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper mb-2">
                                                <i class="bx bx-building fa-2x"></i>
                                            </div>
                                            <h6 class="card-title mb-1 fw-bold">Company Info</h6>
                                            <small class="opacity-75">Company details</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('regulations.index') }}" class="action-card text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm hover-scale" style="background: linear-gradient(135deg, #17a2b8 0%, #03dac6 100%); color: white; border-radius: 12px; transition: all 0.3s ease;">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper mb-2">
                                                <i class="bx bx-file fa-2x"></i>
                                            </div>
                                            <h6 class="card-title mb-1 fw-bold">Regulations</h6>
                                            <small class="opacity-75">Legal documents</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Service Section -->
                    <div class="col-12">
                        <h6 class="text-muted mb-3">
                            <i class="bx bx-support me-1"></i> Customer Service
                        </h6>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="{{ route('contact-form.index') }}" class="action-card text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm hover-scale" style="background: linear-gradient(135deg, #343a40 0%, #495057 100%); color: white; border-radius: 12px; transition: all 0.3s ease;">
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper mb-2">
                                                <i class="bx bx-message-alt-detail fa-2x"></i>
                                            </div>
                                            <h6 class="card-title mb-1 fw-bold">Contact Forms</h6>
                                            <small class="opacity-75">All contact messages</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('contact-form.index', ['type' => 'complaints']) }}" class="action-card text-decoration-none">
                                    <div class="card h-100 border-0 shadow-sm hover-scale position-relative" style="background: linear-gradient(135deg, #dc3545 0%, #c82333 100%); color: white; border-radius: 12px; transition: all 0.3s ease;">
                                        <div class="position-absolute top-0 end-0 m-2">
                                            <span class="badge bg-light text-danger fw-bold animate-pulse">Priority</span>
                                        </div>
                                        @if($stats['complaints_unread'] > 0)
                                            <div class="position-absolute top-0 start-0 m-2">
                                                <span class="badge bg-warning text-dark notification-badge">{{ $stats['complaints_unread'] }}</span>
                                            </div>
                                        @endif
                                        <div class="card-body text-center p-3">
                                            <div class="icon-wrapper mb-2">
                                                <i class="bx bx-message-alt-detail fa-2x"></i>
                                            </div>
                                            <h6 class="card-title mb-1 fw-bold">Complaints & Issues</h6>
                                            <small class="opacity-75">Customer complaints</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"><i class="bx bx-cog"></i> System Overview</h5>
            </div>
            <div class="card-body">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info"><i class="bx bx-server"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">System Status</span>
                        <span class="info-box-number">Active</span>
                    </div>
                </div>
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success"><i class="bx bx-data"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Database</span>
                        <span class="info-box-number">Healthy</span>
                    </div>
                </div>
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="bx bx-time"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Last Backup</span>
                        <span class="info-box-number">Today</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection