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
                    <a href="{{ route('home.sbu-image.index') }}">SBU Images</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
        <!-- Basic Breadcrumb -->
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="col-lg-12 mb-1">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endforeach
        @endif

        <div class="card">
            <h3 class="card-head my-2 mx-2 mt-3">Edit SBU Image</h3>
            <div class="card-body mx-2">
                <form action="{{ route('home.sbu-image.update', $sbuImage->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Current Image</label>
                            <div>
                                <img src="{{ str_starts_with($sbuImage->image_path, 'assets/') ? asset($sbuImage->image_path) : asset('storage/' . $sbuImage->image_path) }}" alt="{{ $sbuImage->alt_text }}" style="width: 200px; height: 200px; object-fit: cover; border: 1px solid #ddd;">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">New Image (Optional)</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                            <div class="form-text">Leave empty to keep current image. Max file size: 2MB. Supported formats: JPG, PNG, GIF</div>
                            <!-- Preview Image -->
                            <div class="mt-3">
                                <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 200px; max-height: 200px; display: none; border: 1px solid #ddd; padding: 5px;">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="alt_text" class="form-label">Alt Text</label>
                            <input type="text" class="form-control" id="alt_text" name="alt_text" value="{{ $sbuImage->alt_text }}" placeholder="Enter alt text">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ $sbuImage->sort_order }}" placeholder="Enter sort order" min="0">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="status" name="status" {{ $sbuImage->status ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Active</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('home.sbu-image.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
function previewImage(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('imagePreview');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        preview.src = '#';
        preview.style.display = 'none';
    }
}
</script>
@endpush
