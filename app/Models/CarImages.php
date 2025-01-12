<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarImages extends Model
{
    public $timestamps = null;

    protected $fillable = [
        'image_path',
        'position'
    ];
}
