# TODO: Redesign Backend Dashboard

## Tugas Utama
- Redesain dashboard backend untuk fokus pada manajemen konten PT ALIANSI PRIMA ENERGI
- Ganti konten generic penjualan/profit dengan konten yang relevan untuk perusahaan

## Langkah-langkah

### 1. Update Dashboard Controller
- [ ] Tambahkan data statistik untuk semua entitas (HomeContent, SbuImage, ContactForm, Highlight, Review, Regulation)
- [ ] Hitung total records untuk setiap model
- [ ] Tambahkan data untuk recent activities

### 2. Redesain Dashboard View
- [ ] Buat welcome section dengan brand PT ALIANSI PRIMA ENERGI
- [ ] Update kartu statistik dengan data yang relevan:
   - Total Home Contents
   - Total SBU Images
   - Total Contact Forms
   - Total Highlights
   - Total Reviews
   - Total Regulations
- [ ] Tambahkan Quick Actions section dengan link ke menu sidebar
- [ ] Buat System Overview dengan informasi sistem
- [ ] Tambahkan Recent Activities untuk tracking perubahan

### 3. Testing dan Verifikasi
- [ ] Pastikan semua data statistik ditampilkan dengan benar
- [ ] Verifikasi link Quick Actions berfungsi
- [ ] Test tampilan responsif

## File yang Akan Dimodifikasi
- app/Http/Controllers/Backend/DashboardController.php (untuk menambahkan data)
- resources/views/backend/dashbord/index.blade.php (redesain tampilan)
