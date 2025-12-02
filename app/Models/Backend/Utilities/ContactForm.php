<?php

namespace App\Models\Backend\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'is_read',
        'category',
        'priority',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
