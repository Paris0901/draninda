<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaAppearance extends Model
{
    protected $fillable = [
        'title',
        'show_name',
        'host',
        'media_type',
        'description',
        'spotify_url',
        'apple_url',
        'youtube_url',
        'badge_color',
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
