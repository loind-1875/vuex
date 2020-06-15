<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Post extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = [
        'view',
        'slug',
        'image',
        'is_recruitment',
    ];

    public $translatedAttributes = ['title', 'short_detail', 'detail'];
}
