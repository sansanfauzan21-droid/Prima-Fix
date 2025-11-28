@extends('backend.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Home Content Sections</li>
            </ol>
        </nav>
        <div class="card">
            <h5 class="card-header">{{ $title }}</h5>
            
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-left" style="width: 30%;">
                                Nama Bagian (Section)
                            </th>
                            <th class="text-left" style="width: 40%;">
                                Pratinjau Konten
                            </th>
                            <th class="text-left" style="width: 15%;">
                                Status
                            </th>
                            <th class="text-center" style="width: 15%;">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sections as $section)
                            @php
                                $contentData = $contents[$section] ?? null;
                                $humanReadableTitle = Str::title(str_replace('_', ' ', $section)); 
                                
                                $statusActive = $contentData && $contentData->status;
                                $statusText = $statusActive ? 'Aktif' : 'Non-aktif';
                                $statusClass = $statusActive ? 'bg-label-success' : 'bg-label-secondary';

                                // Mengambil isi konten, menghapus tag HTML, dan memotongnya
                                $contentValue = $contentData ? $contentData->content : null;
                                $fullContent = $contentValue ? strip_tags($contentValue) : null; 
                                $contentPreview = $fullContent ? Str::limit($fullContent, 50) : null; 
                            @endphp
                            <tr>
                                <td>
                                    <strong>{{ $humanReadableTitle }}</strong>
                                    <br>
                                    <small class="text-muted">{{ $section }}</small>
                                </td>
                                
                                {{-- KOLOM Pratinjau Konten --}}
                                <td>
                                    @if ($fullContent)
                                    <span 
                                        data-bs-toggle="tooltip" 
                                        data-bs-placement="top" 
                                        title="{{ $fullContent }}"
                                        style="cursor: help;"
                                    >
                                        {{ $contentPreview }}
                                        @if (strlen($fullContent) > 50)
                                            ...
                                        @endif
                                    </span>
                                    @else
                                        <em class="text-warning">Konten belum diisi.</em>
                                    @endif
                                </td>
                                
                                <td>
                                    @if($contentData)
                                    <span class="badge {{ $statusClass }}">{{ $statusText }}</span>
                                    @else
                                    <span class="badge bg-label-info">N/A</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('home-content.edit.section', $section) }}"
                                       class="btn btn-sm btn-icon btn-outline-primary"
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Edit Konten">
                                        <i class="bx bx-edit-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    {{-- Wajib: Script untuk mengaktifkan Tooltip Bootstrap --}}
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Inisialisasi Tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
    @endpush
@endsection