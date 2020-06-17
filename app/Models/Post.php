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

    public function postTranslations()
    {
        return $this->hasMany(PostTranslation::class);
    }

    public function postTranslation()
    {
        return $this->hasOne(PostTranslation::class);
    }

    public function vi()
    {
        return $this->postTranslation()->where('locale', 'vi');
    }
    public function en()
    {
        return $this->postTranslation()->where('locale', 'en');
    }
    public function cn()
    {
        return $this->postTranslation()->where('locale', 'cn');
    }
}
