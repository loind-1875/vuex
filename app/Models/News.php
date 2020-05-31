<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'detail',
        'view',
        'slug',
        'image',
        'short_detail',
        'is_recruitment',
    ];
}
