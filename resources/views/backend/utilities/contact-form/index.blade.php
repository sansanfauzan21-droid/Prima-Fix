@extends('backend.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Contact Form Submissions</h5>
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
                                            <form action="{{ route('contact-form.destroy', $contactForm->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this contact form?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No contact form submissions found.</td>
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
