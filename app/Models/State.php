<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = null;

    protected $fillable = [
        'name',
    ];
}
