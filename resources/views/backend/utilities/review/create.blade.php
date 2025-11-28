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
                    <a href="{{ route('review.index') }}">Review</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
        <!-- Basic Breadcrumb -->

        <div class="card">
            <h3 class="card-head my-2 mx-2 mt-3">Create Review</h3>
            <div class="card-body mx-2">
                <form action="{{ route('review.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="name">Name <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="John Doe" value="{{ old('name') }}" />
                            @error('name')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="position">Position <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('position') is-invalid @enderror"
                                name="position" id="position" placeholder="CEO" value="{{ old('position') }}" />
                            @error('position')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="message" class="col-sm-2 col-form-label">Message <span
                                class="text-danger fw-bolder">*</span></label>
                        <div class="col-sm-10">
                            <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror"
                                placeholder="Review message" aria-label="Message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <img src="{{ asset('assets/img/placeholder.png') }}"
                                alt="image" class="img-fluid d-block rounded my-2"
                                style="object-fit: contain; width: 100px; height: 100px;" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="image"
                                    class="btn @error('image')
                                btn-danger
                                @else
                                btn-primary
                                @enderror me-2 mb-2"
                                    tabindex="0">
                                    <span class="d-none d-sm-block">Upload Image</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" name="image" id="image" class="account-file-input" hidden
                                        accept="image/png, image/jpeg, image/jpg" onchange="previewImage()" />
                                </label>
                            </div>
                            <div class="form-text">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @else
                                    JPG, JPEG or PNG. Maksimal 2Mb
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="status">Status</label>
                        <div class="col-sm-10">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="status" id="status" value="1" {{ old('status') ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('review.index') }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#uploadedAvatar');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endpush
