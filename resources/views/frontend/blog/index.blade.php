@extends('frontend.layouts.main')

@push('hero')
<section class="hero-section inner-page">
    <svg width="0" height="0">
        <defs>
            <clipPath id="hero-clip" clipPathUnits="objectBoundingBox">
                <path
                    d="M0,0 L1,0 L1, 0.85  
    C0.9, 0.90 0.7, 0.90 0.5, 0.85  
    C0.3, 0.80 0.1, 0.85 0, 0.88 Z" />
            </clipPath>
        </defs>
    </svg>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="">
                            {{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'PT Aliansi Prima Energi' }}
                            Blog
                        </h1>
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
        <div class="row mb-5">
            @if ($blog->count())
            @foreach ($blog as $item)
            <div class="col-md-4">
                <div class="post-entry">
                    <a href="{{ route('frontend.blog.show', $item->id) }}" class="d-block mb-4">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('assets/frontend/assets/img/img_1.jpg') }}"
                            alt="Image" class="img-fluid"
                            style="object-fit: contain; width: 500px; height: 500px;">
                    </a>
                    <div class="post-text">
                        <span class="post-meta">
                            @if ($item->created_at->diffInWeeks(\Carbon\Carbon::now()) < 1)
                                {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                @else
                                {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
                                @endif
                                &bullet; By <a href="#">{{ $item->author->name }}</a>
                        </span>
                        <h3><a href="{{ route('frontend.blog.show', $item->id) }}">{{ $item->title }}</a></h3>
                        <p>
                            @if ($item->subarticle)
                            {{ strlen($item->subarticle) >= 100 ? substr($item->subarticle, 0, 100) . '..' : $item->subarticle }}
                            @else
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.
                            @endif
                        </p>
                        <p><a href="{{ route('frontend.blog.show', $item->id) }}" class="readmore">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-4">
                <div class="post-entry">
                    <a href="blog-single.html" class="d-block mb-4">
                        <img src="assets/img/img_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-text">
                        <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                        <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        <p><a href="#" class="readmore">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-entry">
                    <a href="blog-single.html" class="d-block mb-4">
                        <img src="assets/img/img_2.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-text">
                        <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                        <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        <p><a href="#" class="readmore">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-entry">
                    <a href="blog-single.html" class="d-block mb-4">
                        <img src="assets/img/img_3.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-text">
                        <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                        <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        <p><a href="#" class="readmore">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="post-entry">
                    <a href="blog-single.html" class="d-block mb-4">
                        <img src="assets/img/img_4.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-text">
                        <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                        <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        <p><a href="#" class="readmore">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-entry">
                    <a href="blog-single.html" class="d-block mb-4">
                        <img src="assets/img/img_3.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-text">
                        <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                        <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        <p><a href="#" class="readmore">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-entry">
                    <a href="blog-single.html" class="d-block mb-4">
                        <img src="assets/img/img_2.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-text">
                        <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Admin</a></span>
                        <h3><a href="#">Chrome now alerts you when someone steals your password</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        <p><a href="#" class="readmore">Read more</a></p>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $blog->links() }}
            </div>
        </div>
    </div>

</section>
@endsection