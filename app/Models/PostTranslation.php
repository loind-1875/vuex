<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    protected $fillable = [
        'title',
        'short_detail',
        'detail',
        'post_id',
        'locale',
    ];
}
