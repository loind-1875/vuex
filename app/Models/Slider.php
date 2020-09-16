<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Slider extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = [
        'image',
        'url',
        'order',
    ];

    public $translatedAttributes = [
        'text1',
        'text2',
        'text3',
    ];

    public function sliderTranslations()
    {
        return $this->hasMany(SliderTranslation::class);
    }

    public function sliderTranslation()
    {
        return $this->hasOne(SliderTranslation::class);
    }

    public function vi()
    {
        return $this->sliderTranslation()->where('locale', 'vi');
    }

    public function en()
    {
        return $this->sliderTranslation()->where('locale', 'en');
    }

    public function cn()
    {
        return $this->sliderTranslation()->where('locale', 'cn');
    }
}
