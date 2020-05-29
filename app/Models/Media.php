<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'name',
        'mediaable_id',
        'mediaable_type',
        'is_default',
    ];

    public function product()
    {
        return $this->morphTo();
    }
}
