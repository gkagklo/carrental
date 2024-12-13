<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('vehicles', VehicleController::class);
    Route::get('/vehicles/{vehicle}/edit/vehicle_images', [VehicleController::class,'editVehicleImages'])->name('vehicle_images');
    Route::put('/vehicles/{vehicle}/edit/vehicle_images/update', [VehicleController::class, 'updateVehicleImages'])->name('updateVehicleImages');
    Route::post('/vehicles/{vehicle}/create/vehicle_images', [VehicleController::class,'vehicleImageCreate'])->name('vehicleImageCreate');
});
