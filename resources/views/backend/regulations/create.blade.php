@extends('backend.layouts.main')

@section('title', 'Create Regulation')

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
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
        <!-- Basic Breadcrumb -->

        <div class="card">
            <h3 class="card-head my-2 mx-2 mt-3">Create Regulation</h3>
            <div class="card-body mx-2">
                <form action="{{ route('regulations.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nomer">Nomer <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nomer') is-invalid @enderror" name="nomer"
                                id="nomer" placeholder="Regulation Number" value="{{ old('nomer') }}" required />
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
                                id="nama_pasal" placeholder="Article Name" value="{{ old('nama_pasal') }}" required />
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
                                id="tanggal" value="{{ old('tanggal') }}" required />
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
                            <input type="file" class="form-control @error('dokumen') is-invalid @enderror" name="dokumen"
                                id="dokumen" accept=".pdf" />
                            <div class="form-text">Upload file PDF regulasi (opsional)</div>
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
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
