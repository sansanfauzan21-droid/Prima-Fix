<?php

namespace Database\Seeders;

use App\Models\Backend\Home\SbuImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SbuImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'image_path' => 'assets/img/legal.png',
                'alt_text' => 'Sertifikat 1',
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'image_path' => 'assets/img/legal.png',
                'alt_text' => 'Sertifikat 2',
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'image_path' => 'assets/img/legal.png',
                'alt_text' => 'Sertifikat 3',
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'image_path' => 'assets/img/legal.png',
                'alt_text' => 'Sertifikat 4',
                'sort_order' => 4,
                'status' => true,
            ],
            [
                'image_path' => 'assets/img/legal.png',
                'alt_text' => 'Sertifikat 5',
                'sort_order' => 5,
                'status' => true,
            ],
        ];

        foreach ($images as $image) {
            SbuImage::create($image);
        }
    }
}
