<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'VehiclesTitle',
        'brand_id',
        'VehiclesOverview',
        'PricePerDay',
        'FuelType',
        'ModelYear',
        'SeatingCapacity',
        'AirConditioner',
        'PowerDoorLocks',
        'AntiLockBrakingSystem',
        'BrakeAssist',
        'PowerSteering',
        'DriverAirbag',
        'PassengerAirbag',
        'PowerWindows',
        'CDPlayer',
        'CentralLocking',
        'CrashSensor',
        'LeatherSeats',
    ];

    public function images()
    {
        return $this->hasMany(VehicleImages::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(VehicleImages::class)->oldestOfMany('position');
    }

    public function latestImage()
    {
        return $this->hasOne(VehicleImages::class)->latestOfMany('position');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}
