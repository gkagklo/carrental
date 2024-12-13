<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('VehiclesTitle');
            $table->foreignId('brand_id')->constrained('brands');
            $table->longText('VehiclesOverview');
            $table->integer('PricePerDay');
            $table->string('FuelType');
            $table->integer('ModelYear');
            $table->integer('SeatingCapacity');
            $table->integer('AirConditioner');
            $table->integer('PowerDoorLocks');
            $table->integer('AntiLockBrakingSystem');
            $table->integer('BrakeAssist');
            $table->integer('PowerSteering');
            $table->integer('DriverAirbag');
            $table->integer('PassengerAirbag');
            $table->integer('PowerWindows');
            $table->integer('CDPlayer');
            $table->integer('CentralLocking');
            $table->integer('CrashSensor');
            $table->integer('LeatherSeats'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
