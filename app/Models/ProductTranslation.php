<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    protected $fillable = [
        'name',
        'detail',
        'locale',
        'product_id',
        'short_detail',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
