<?php

namespace Database\Seeders;

use App\Models\Backend\Home\HomeContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'section' => 'hero_title',
                'content' => 'Selamat Datang di Aliansi Profile',
            ],
            [
                'section' => 'hero_subtitle',
                'content' => 'STEP INTO THE FUTURE SAFELY.',
            ],
            [
                'section' => 'about_title',
                'content' => 'PT ALIANSI PRIMA ENERGI',
            ],
            [
                'section' => 'about_description',
                'content' => 'Kami adalah Perusahaan Jasa Inspeksi Teknik di Bidang Ketenagalistrikan yang didirikan pada 12 November 2024, dihadapan Notaris RAMADHAN MUAWAD S.H., M.KN., yang berkedudukan di Kabupaten Bandung. Sebagai salah satu penyedia Jasa Inspeksi Teknik Ketenagalistrikan terpercaya, kami berkomitmen untuk memberikan layanan berkualitas tinggi yang memenuhi standar keamanan dan keandalan tertinggi.',
            ],
            [
                'section' => 'commitment_title',
                'content' => 'Komitmen Kami',
            ],
            [
                'section' => 'commitment_description',
                'content' => 'PT ALIANSI PRIMA ENERGI berkomitmen untuk terus memberikan pelayanan terbaik untuk para pelanggan demi terwujudnya Instalasi Tenaga Listrik yang:',
            ],
            [
                'section' => 'services_title',
                'content' => 'Layanan Utama Kami',
            ],
            [
                'section' => 'services_list',
                'content' => 'Inspeksi Instalasi Tenaga Listrik|Handal, inovatif, dan ramah lingkungan.|Komitmen solusi ketenagalistrikan yang berkualitas.|Mendukung pembangunan nasional yang berkelanjutan.',
            ],
            [
                'section' => 'certificate_title',
                'content' => 'Sertifikat Badan Usaha',
            ],
            [
                'section' => 'commitment_items',
                'content' => 'AMAN|ANDAL|AKRAB RAMAH LINGKUNGAN',
            ],
        ];

        foreach ($contents as $content) {
            HomeContent::create($content);
        }
    }
}
