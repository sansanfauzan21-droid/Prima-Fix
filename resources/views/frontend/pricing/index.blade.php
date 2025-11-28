@extends('frontend.layouts.main')

@push('hero')
    <div class="hero-section inner-page">
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
                            <h1 data-aos="fade-up" data-aos-delay="">Our Pricing</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endpush

@section('content')
    <section class="section">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-md-7 mb-5">
                    <h2 class="section-heading">Choose A Product</h2>
                </div>
            </div>
            <div class="row align-items-stretch">

                @if ($pricing->count())
                    @foreach ($pricing as $item)
                        <div class="col-lg-4 my-4 mb-lg-0">
                            <div class="pricing h-100 text-center {{ $item->best ? 'popular' : '' }}">
                                @if (!$item->category)
                                    <span>&nbsp;</span>
                                @else
                                    <span class="popularity">{{ $item->category }}</span>
                                @endif
                                <h3>{{ $item->title }}</h3>
                                <ul class="list-unstyled">
                                    @if ($item->detail->count())
                                        @foreach ($item->detail as $value)
                                            <li>{{ $value->list }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                                <div class="price-cta">
                                    <strong class="price">
                                        @if ($item->price > 0)
                                            @IDR($item->price)
                                            @if ($item->payment_period == \App\Models\Backend\Pricing\Pricing::MONTHLY_PAYMENT)
                                                /Month
                                            @elseif ($item->payment_period == \App\Models\Backend\Pricing\Pricing::ANNUAL_PAYMENT)
                                                /Year
                                            @endif
                                        @else
                                            Free
                                        @endif
                                    </strong>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="pricing h-100 text-center">
                            <span>&nbsp;</span>
                            <h3>Basic</h3>
                            <ul class="list-unstyled">
                                <li>Create up to 5 forms</li>
                                <li>Generate 100 monthly reports</li>
                            </ul>
                            <div class="price-cta">
                                <strong class="price">Free</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="pricing h-100 text-center popular">
                            <span class="popularity">Most Popular</span>
                            <h3>Professional</h3>
                            <ul class="list-unstyled">
                                <li>Create up to 20 forms</li>
                                <li>Generate 2500 monthly reports</li>
                                <li>Manage a team of up to 5 people</li>
                            </ul>
                            <div class="price-cta">
                                <strong class="price">$9.95/month</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="pricing h-100 text-center">
                            <span class="popularity">Best Value</span>
                            <h3>Ultimate</h3>
                            <ul class="list-unstyled">
                                <li>Create up to 20 forms</li>
                                <li>Generate 2500 monthly reports</li>
                                <li>Manage a team of up to 5 people</li>
                            </ul>
                            <div class="price-cta">
                                <strong class="price">$199.95/month</strong>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </section>
@endsection
