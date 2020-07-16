<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = [
        'image',
        'parent_id',
        'slug',
    ];

    public $translatedAttributes = ['name', 'description'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function categoryTranslations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function categoryTranslation()
    {
        return $this->hasOne(CategoryTranslation::class);
    }

    public function vi()
    {
        return $this->categoryTranslation()->where('locale', 'vi');
    }

    public function en()
    {
        return $this->categoryTranslation()->where('locale', 'en');
    }

    public function cn()
    {
        return $this->categoryTranslation()->where('locale', 'cn');
    }

    public function publicProducts()
    {
        return $this->products()->where('public', 1);
    }

    public function homeproducts()
    {
        return $this->products()->where('public', 1)->where('show_home', 1);
    }
}
