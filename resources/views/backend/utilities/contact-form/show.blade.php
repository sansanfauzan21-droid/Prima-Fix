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
</div>
@endsection
