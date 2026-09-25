<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Protocol extends Model
{
    protected $fillable = [
        'protocol_number',
        'title',
        'slug',
        'subtitle',
        'category',
        'icon',
        'summary',
        'theoretical_foundation',
        'pillars',
        'clinical_guidelines',
        'co_architect',
        'licensing_scope',
        'order_index',
        'is_active',
    ];

    protected $casts = [
        'pillars' => 'array',
        'is_active' => 'boolean',
        'order_index' => 'integer',
    ];
}
