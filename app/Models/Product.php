<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name', 'detail', 'short_detail'];

    protected $fillable = [
        'slug',
        'image',
        'star',
        'public',
        'show_home',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function medias()
    {
        return $this->morphMany(Media::class, 'mediaable');
    }

    public function productTranslations()
    {
        return $this->hasMany(ProductTranslation::class);
    }

    public function productTranslation()
    {
        return $this->hasOne(ProductTranslation::class);
    }

    public function vi()
    {
        return $this->productTranslation()->where('locale', 'vi');
    }

    public function en()
    {
        return $this->productTranslation()->where('locale', 'en');
    }

    public function cn()
    {
        return $this->productTranslation()->where('locale', 'cn');
    }
}
