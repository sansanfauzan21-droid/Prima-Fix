@extends('backend.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Contact Form Details</h5>
                    <a href="{{ route('contact-form.index') }}" class="btn btn-secondary">Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Name:</h6>
                            <p>{{ $contactForm->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Email:</h6>
                            <p>{{ $contactForm->email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Subject:</h6>
                            <p>{{ $contactForm->subject }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Date:</h6>
                            <p>{{ $contactForm->created_at->format('d M Y H:i') }}</p>
                        </div>
                    </div>
                    @if($contactForm->category)
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Category:</h6>
                            <p><span class="badge bg-info">{{ $contactForm->category }}</span></p>
                        </div>
                        <div class="col-md-6">
                            <h6>Priority:</h6>
                            <p>
                                @if($contactForm->priority)
                                    @if($contactForm->priority == 'Kritis')
                                        <span class="badge bg-danger">{{ $contactForm->priority }}</span>
                                    @elseif($contactForm->priority == 'Tinggi')
                                        <span class="badge bg-warning">{{ $contactForm->priority }}</span>
                                    @elseif($contactForm->priority == 'Sedang')
                                        <span class="badge bg-secondary">{{ $contactForm->priority }}</span>
                                    @else
                                        <span class="badge bg-light text-dark">{{ $contactForm->priority }}</span>
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Message:</h6>
                            <p>{{ nl2br(e($contactForm->message)) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Status:</h6>
                            @if($contactForm->is_read)
                                <span class="badge bg-success">Read</span>
                            @else
                                <span class="badge bg-warning">Unread</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reply Form -->
    <div id="reply-form" class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Balas Pesan</h5>
                </div>
                <div class="card-body">
                    @if(session("success"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session("success") }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    @if(session("error"))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session("error") }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form action="{{ route("contact-form.reply", $contactForm->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="reply_message" class="form-label">Pesan Balasan</label>
                            <textarea class="form-control" id="reply_message" name="reply_message" rows="6" placeholder="Ketik balasan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bx-send me-1"></i> Kirim Balasan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
