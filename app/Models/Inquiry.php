<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'organization',
        'inquiry_type',
        'message',
        'status',
    ];
}
