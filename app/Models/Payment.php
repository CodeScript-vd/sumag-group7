<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function details()
    {
        return $this->hasOne('App\Models\Detail');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
