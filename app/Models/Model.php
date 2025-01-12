<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    public $timestamps = null;

    protected $fillable = [
        'name',
        'maker_id',
    ];
}
