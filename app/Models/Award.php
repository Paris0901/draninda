<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = [
        'title',
        'bestowing_organization',
        'year',
        'category',
        'icon',
        'image_path',
        'field_of_recognition',
        'description',
        'badge',
        'order_index',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'order_index' => 'integer',
    ];
}
