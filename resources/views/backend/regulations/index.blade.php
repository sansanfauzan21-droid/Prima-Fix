@extends('backend.layouts.main')

@section('title', 'Regulations')

@section('content')
    <div class="row mx-1">
        <!-- Basic Breadcrumb -->
        <nav aria-label="breadcrumb mx-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Regulations</li>
            </ol>
        </nav>
        <!-- Basic Breadcrumb -->

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Regulations</h3>
                <a href="{{ route('regulations.create') }}" class="btn btn-primary">Add Regulation</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nomer</th>
                                <th>Nama Pasal</th>
                                <th>Tanggal</th>
                                <th>Dokumen</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($regulations as $regulation)
                                <tr>
                                    <td>{{ $regulation->id }}</td>
                                    <td>{{ $regulation->nomer }}</td>
                                    <td>{{ $regulation->nama_pasal }}</td>
                                    <td>{{ $regulation->tanggal }}</td>
                                    <td>
                                        @if($regulation->dokumen)
                                            <a href="{{ asset('storage/dokumen/' . $regulation->dokumen) }}" target="_blank" class="btn btn-sm btn-info">
                                                <i class="fas fa-file-pdf"></i> View PDF
                                            </a>
                                        @else
                                            <span class="text-muted">No file</span>
                                        @endif
                                    </td>
                                    <td>{{ $regulation->created_at->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('regulations.edit', $regulation->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('regulations.destroy', $regulation->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this regulation?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No regulations found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
