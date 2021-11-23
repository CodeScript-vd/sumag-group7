<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    public function categories()
    {
        return $this->hasOne('App\Models\Category');
    }

    public function images()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
