@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Welcome Hero Section -->
    <div class="row">
        <div class="col-12">
            <div class="card bg-gradient-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="text-white mb-3">
                                <i class="fas fa-crown mr-2"></i>
                                Selamat Datang di Dashboard Super Admin
                            </h2>
                            <p class="text-white-50 mb-4 lead">
                                Kelola konten website PT ALIANSI PRIMA ENERGI dengan mudah dan efisien.
                                Pantau statistik penting dan akses fitur utama dari sini.
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('home.hero.index') }}" class="btn btn-light btn-lg">
                                    <i class="fas fa-image mr-1"></i> Kelola Hero
                                </a>
                                <a href="{{ route('home.about.index') }}" class="btn btn-outline-light btn-lg">
                                    <i class="fas fa-info-circle mr-1"></i> Edit About
                                </a>
                                <a href="{{ route('company.index') }}" class="btn btn-outline-light btn-lg">
                                    <i class="fas fa-building mr-1"></i> Company Info
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-tachometer-alt text-white" style="font-size: 8rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Company Profile Statistics -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-primary">
                <div class="inner">
                    <h3>{{ \App\Models\Backend\Home\HomeContent::count() }}</h3>
                    <p>Home Content Sections</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ \App\Models\Backend\Home\HomeContent::count() > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-home"></i>
                </div>
                <a href="{{ route('home-content.index') }}" class="small-box-footer">
                    Manage Content <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ \App\Models\Backend\Home\SbuImage::count() }}</h3>
                    <p>SBU Images</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ \App\Models\Backend\Home\SbuImage::count() > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-images"></i>
                </div>
                <a href="{{ route('home.sbu-image.index') }}" class="small-box-footer">
                    Manage Images <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-warning">
                <div class="inner">
                    <h3>{{ \App\Models\Backend\Home\Highlight::count() }}</h3>
                    <p>Highlights</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ \App\Models\Backend\Home\Highlight::count() > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-star"></i>
                </div>
                <a href="{{ route('home.highlight.index') }}" class="small-box-footer">
                    Manage Highlights <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-info">
                <div class="inner">
                    <h3>{{ \App\Models\Backend\Utilities\Review::count() }}</h3>
                    <p>Customer Reviews</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ \App\Models\Backend\Utilities\Review::count() > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-comments"></i>
                </div>
                <a href="{{ route('review.index') }}" class="small-box-footer">
                    Manage Reviews <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Content Management Statistics -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-secondary">
                <div class="inner">
                    <h3>{{ \App\Models\Backend\Utilities\ContactForm::count() }}</h3>
                    <p>Contact Form Submissions</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ \App\Models\Backend\Utilities\ContactForm::count() > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <a href="{{ route('contact-form.index') }}" class="small-box-footer">
                    View Messages <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-dark">
                <div class="inner">
                    <h3>{{ \App\Models\Backend\Regulation::count() }}</h3>
                    <p>Legal Documents</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ \App\Models\Backend\Regulation::count() > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <a href="{{ route('regulations.index') }}" class="small-box-footer">
                    Manage Documents <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-light">
                <div class="inner">
                    <h3>{{ \App\Models\User::count() }}</h3>
                    <p>System Users</p>
                    <div class="progress">
                        <div class="progress-bar bg-dark" style="width: {{ \App\Models\User::count() > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                    User Management <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-danger">
                <div class="inner">
                    <h3>{{ \Spatie\Permission\Models\Role::count() }}</h3>
                    <p>User Roles</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ \Spatie\Permission\Models\Role::count() > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-user-tag"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Role Settings <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions and Recent Activity -->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0"><i class="fas fa-bolt mr-2"></i> Quick Actions - Company Profile</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <a href="{{ route('home.hero.index') }}" class="btn btn-outline-primary btn-block mb-3">
                                <i class="fas fa-image fa-2x mb-2"></i><br>
                                <strong>Kelola Hero</strong>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="{{ route('home.about.index') }}" class="btn btn-outline-success btn-block mb-3">
                                <i class="fas fa-info-circle fa-2x mb-2"></i><br>
                                <strong>Edit About</strong>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="{{ route('home.highlight.index') }}" class="btn btn-outline-warning btn-block mb-3">
                                <i class="fas fa-star fa-2x mb-2"></i><br>
                                <strong>Manage Highlights</strong>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="{{ route('home-content.index') }}" class="btn btn-outline-info btn-block mb-3">
                                <i class="fas fa-edit fa-2x mb-2"></i><br>
                                <strong>Edit Home Content</strong>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="{{ route('home.sbu-image.index') }}" class="btn btn-outline-secondary btn-block mb-3">
                                <i class="fas fa-images fa-2x mb-2"></i><br>
                                <strong>Manage SBU Images</strong>
                            </a>
                        </div>
                        <div class="col-md-4 col-6">
                            <a href="{{ route('company.index') }}" class="btn btn-outline-dark btn-block mb-3">
                                <i class="fas fa-building fa-2x mb-2"></i><br>
                                <strong>Edit Company Info</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title mb-0"><i class="fas fa-chart-line mr-2"></i> System Overview</h3>
                </div>
                <div class="card-body">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info"><i class="fas fa-cog"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">System Status</span>
                            <span class="info-box-number">Active</span>
                        </div>
                    </div>
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success"><i class="fas fa-server"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Server Uptime</span>
                            <span class="info-box-number">99.9%</span>
                        </div>
                    </div>
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning"><i class="fas fa-database"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Database</span>
                            <span class="info-box-number">Healthy</span>
                        </div>
                    </div>
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fas fa-shield-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Security</span>
                            <span class="info-box-number">Secure</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Utilities Quick Actions -->
            <div class="card mt-3">
                <div class="card-header bg-info text-white">
                    <h3 class="card-title mb-0"><i class="fas fa-cogs mr-2"></i> Utilities</h3>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('regulations.index') }}" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-file-alt mr-1"></i> Regulations
                        </a>
                        <a href="{{ route('contact-form.index') }}" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-envelope mr-1"></i> Contact Forms
                        </a>
                        <a href="{{ route('review.index') }}" class="btn btn-outline-warning btn-sm">
                            <i class="fas fa-comments mr-1"></i> Reviews
                        </a>
                        <a href="{{ route('blog.index') }}" class="btn btn-outline-info btn-sm">
                            <i class="fas fa-blog mr-1"></i> Blog Posts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
