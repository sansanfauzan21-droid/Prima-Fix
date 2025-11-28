<?php

namespace App\Models\Backend\Home;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'section',
        'content',
        'status',
    ];
}
