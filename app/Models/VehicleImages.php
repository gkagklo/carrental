<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleImages extends Model
{
    protected $fillable = [
        'vehicle_id',
        'name',
        'position'
    ];
}
