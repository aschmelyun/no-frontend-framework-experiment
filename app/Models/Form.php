<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'part-1' => 'array',
        'part-2' => 'array',
        'part-3' => 'array',
    ];
}
