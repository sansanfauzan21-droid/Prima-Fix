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
                            <h1 data-aos="fade-up" data-aos-delay="">Memberikan Pelayanan Yang Terbaik</h1>
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
            <div class="row mb-5 align-items-end">
                <div class="col-md-6" data-aos="fade-up">

                    <h2>Keluhan Dan Banding</h2>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <strong class="d-block mb-1">Address</strong>
                            <span>{{ $company && $company->address ? $company->address : 'Jl. Pinus Raya No. 133, Perumahan Pinus Regency,
Kel. Babakan Penghulu, Kec. Cinambo, Kota Bandung' }}</span>
                        </li>
                        <li class="mb-3">
                            <strong class="d-block mb-1">Phone</strong>
                            <a href="https://wa.me/{{ preg_replace('/\D/', '', $company && $company->phone_number ? $company->phone_number : '+62 811205411') }}" target="_blank">{{ $company && $company->phone_number ? $company->phone_number : '+62 811205411' }}</a>
                        </li>
                        <li class="mb-3">
                            <strong class="d-block mb-1">Email</strong>
                            <span>{{ $company && $company->email ? $company->email : 'office.aliansi@gmail.com' }}</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                    <form action="{{ route('frontend.contact-us.send') }}" method="post" role="form">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="col-md-12 form-group mt-3">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="col-md-12 form-group mt-3">
                                <label for="name">Message For Complaint</label>
                                <textarea class="form-control" name="message" required></textarea>
                            </div>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <div class="col-md-6 form-group">
                                <input type="submit" class="btn btn-primary d-block w-100" value="Send Message">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
