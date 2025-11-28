<?php

namespace App\Models\Backend\Home;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SbuImage extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'image_path',
        'alt_text',
        'sort_order',
        'status',
    ];
}
