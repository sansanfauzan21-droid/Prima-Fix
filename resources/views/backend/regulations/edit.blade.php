@extends('backend.layouts.main')

@section('content')
    <div class="row mx-1">
        <!-- Basic Breadcrumb -->
        <nav aria-label="breadcrumb mx-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('regulations.index') }}">Regulations</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
        <!-- Basic Breadcrumb -->

        <div class="card">
            <h3 class="card-head my-2 mx-2 mt-3">Edit Regulation</h3>
            <div class="card-body mx-2">
                <form action="{{ route('regulations.update', $regulation->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nomer">Nomer <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nomer') is-invalid @enderror" name="nomer"
                                id="nomer" placeholder="Regulation Number" value="{{ old('nomer', $regulation->nomer) }}" required />
                            @error('nomer')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama_pasal">Nama Pasal <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama_pasal') is-invalid @enderror" name="nama_pasal"
                                id="nama_pasal" placeholder="Article Name" value="{{ old('nama_pasal', $regulation->nama_pasal) }}" required />
                            @error('nama_pasal')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="tanggal">Tanggal <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                                id="tanggal" value="{{ old('tanggal', $regulation->tanggal) }}" required />
                            @error('tanggal')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="dokumen">Dokumen (PDF)</label>
                        <div class="col-sm-10">
                            @if($regulation->dokumen)
                                <div class="mb-2">
                                    <strong>Current File:</strong>
                                    <a href="{{ url('file/' . $regulation->dokumen) }}" target="_blank" class="btn btn-sm btn-info ms-2">
                                        <i class="fas fa-file-pdf"></i> View Current PDF
                                    </a>
                                </div>
                            @endif
                            <input type="file" class="form-control @error('dokumen') is-invalid @enderror" name="dokumen"
                                id="dokumen" accept=".pdf" />
                            <div class="form-text">Upload file PDF baru untuk mengganti file sebelumnya (opsional)</div>
                            @error('dokumen')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('regulations.index') }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
