<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimelineMilestone extends Model
{
    protected $fillable = [
        'period',
        'title',
        'organization',
        'location',
        'category',
        'description',
        'badge',
        'order_index',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order_index' => 'integer',
    ];
}
