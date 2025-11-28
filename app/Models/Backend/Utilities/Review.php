<?php

namespace App\Models\Backend\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'message',
        'image',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
