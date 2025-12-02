@extends('backend.layouts.main')

@push('head')
<style>
.nav-tabs .nav-link.active.contact-us-tab {
    background-color: #007bff !important;
    color: white !important;
    border-color: #007bff !important;
}
.nav-tabs .nav-link.active.complaints-tab {
    background-color: #dc3545 !important;
    color: white !important;
    border-color: #dc3545 !important;
}
</style>
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Contact Form Submissions</h5>
                </div>
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link {{ $type == 'contact_us' ? 'active contact-us-tab' : '' }}" href="{{ route('contact-form.index', ['type' => 'contact_us']) }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $type == 'complaints' ? 'active complaints-tab' : '' }}" href="{{ route('contact-form.index', ['type' => 'complaints']) }}">Complaints & Issues</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    @if($type == 'complaints')
                                        <th>Category</th>
                                        <th>Priority</th>
                                    @endif
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contactForms as $contactForm)
                                    <tr>
                                        <td>{{ $contactForm->name }}</td>
                                        <td>{{ $contactForm->email }}</td>
                                        <td>{{ $contactForm->subject }}</td>
                                        @if($type == 'complaints')
                                            <td>
                                                @if($contactForm->category)
                                                    <span class="badge bg-info">{{ $contactForm->category }}</span>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
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
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        @endif
                                        <td>
                                            @if($contactForm->is_read)
                                                <span class="badge bg-success">Read</span>
                                            @else
                                                <span class="badge bg-warning">Unread</span>
                                            @endif
                                        </td>
                                        <td>{{ $contactForm->created_at->format('d M Y H:i') }}</td>
                                        <td>
                                            <a href="{{ route('contact-form.show', $contactForm->id) }}" class="btn btn-sm btn-primary">View</a>
                                            <a href="{{ route('contact-form.show', $contactForm->id) }}#reply-form" class="btn btn-sm btn-success">Reply</a>
                                            <form action="{{ route('contact-form.destroy', $contactForm->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this contact form?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ $type == 'complaints' ? '8' : '6' }}" class="text-center">No contact form submissions found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $contactForms->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
