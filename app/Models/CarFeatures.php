<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarFeatures extends Model
{
    public $timestamps = null;

    protected $fillable = [
        'car_id',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_door_locks',
        'cruise_control',
        'bluetooth_connectivity',
        'remote_start',
        'gps_navigation',
        'heated_seats',
        'climate_controls',
        'rear_parking_sensors',
        'leather_seats'
    ];
}
