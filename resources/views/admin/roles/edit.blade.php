@extends('layouts.admin')

@section('title', 'Edit Role')

@section('content')
<div class="container mt-4">
    <h1>Edit Role</h1>

    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Role Name</label>
            <input type="text" 
                   name="name" 
                   id="name" 
                   value="{{ old('name', $role->name) }}" 
                   class="form-control @error('name') is-invalid @enderror" 
                   required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="permissions" class="form-label">Permissions</label>
            <select name="permissions[]" id="permissions" class="form-control" multiple required>
                @foreach ($permissions as $permission)
                    <option value="{{ $permission->name }}" {{ in_array($permission->name, $rolePermissions) ? 'selected' : '' }}>
                        {{ $permission->translated_name ?? $permission->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Role</button>
    </form>
</div>
@endsection
