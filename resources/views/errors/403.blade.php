@extends('layouts.admin')

@section('title', 'Unauthorized')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="display-1 text-danger">403</h1>
    <h3>Anda tidak mempunyai akses untuk mengubah isi content ini.</h3>
    <p>Silakan hubungi administrator jika Anda memerlukan akses ini.</p>
    <a href="/dashboard" class="btn btn-primary mt-3">Kembali ke Dashboard</a>
</div>
@endsection
