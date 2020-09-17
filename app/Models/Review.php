<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Review extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = [
        'name',
        'info',
        'image',
    ];

    public $translatedAttributes = ['content'];

    public function reviewTranslations()
    {
        return $this->hasMany(ReviewTranslation::class);
    }

    public function reviewTranslation()
    {
        return $this->hasOne(ReviewTranslation::class);
    }

    public function vi()
    {
        return $this->reviewTranslation()->where('locale', 'vi');
    }

    public function en()
    {
        return $this->reviewTranslation()->where('locale', 'en');
    }

    public function cn()
    {
        return $this->reviewTranslation()->where('locale', 'cn');
    }
}
