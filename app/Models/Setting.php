<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{
    use Translatable;

    protected $fillable = [
        'key',
        'value',
    ];

    public $translatedAttributes = ['value'];

    public function settingTranslations()
    {
        return $this->hasMany(SettingTranslation::class);
    }

    public function settingTranslation()
    {
        return $this->hasOne(SettingTranslation::class);
    }

    public function vi()
    {
        return $this->settingTranslation()->where('locale', 'vi');
    }

    public function en()
    {
        return $this->settingTranslation()->where('locale', 'en');
    }

    public function cn()
    {
        return $this->settingTranslation()->where('locale', 'cn');
    }
}
