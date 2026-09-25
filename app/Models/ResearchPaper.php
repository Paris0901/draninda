<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchPaper extends Model
{
    protected $fillable = [
        'title',
        'journal',
        'year',
        'category',
        'authors',
        'description',
        'url',
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
