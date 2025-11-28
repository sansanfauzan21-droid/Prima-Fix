@extends('backend.layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('home-content.index') }}">Home Content Sections</a>
            </li>
            <li class="breadcrumb-item active">Edit {{ $humanReadableTitle }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Edit Konten: {{ $humanReadableTitle }}</h5>
                <div class="card-body">
                    <form action="{{ route('home-content.update.section', $content->section) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="content">Isi Konten</label>
                            <div class="col-sm-10">
                                <textarea
                                    name="content"
                                    id="content"
                                    class="form-control"
                                    rows="5"
                                    placeholder="Masukkan isi konten..."
                                    required
                                >{{ old('content', $content->content) }}</textarea>
                                @error('content')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="status"
                                        id="status"
                                        value="1"
                                        {{ old('status', $content->status) ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="status">
                                        Aktif (Tampilkan di Frontend)
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('home-content.index') }}" class="btn btn-secondary ms-2">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
