<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\VehicleImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Vehicle::orderBy('created_at', 'desc')->get();
        return view('vehicles.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('vehicles.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'VehiclesTitle' => 'required',
            'brand_id' => 'required',
            'VehiclesOverview' => 'nullable',
            'PricePerDay' => 'required',
            'FuelType' => 'required',
            'ModelYear' => 'required',
            'SeatingCapacity' => 'required',
            'AirConditioner' => 'nullable',
            'PowerDoorLocks' => 'nullable',
            'AntiLockBrakingSystem' => 'nullable',
            'BrakeAssist' => 'nullable',
            'PowerSteering' => 'nullable',
            'DriverAirbag' => 'nullable',
            'PassengerAirbag' => 'nullable',
            'PowerWindows' => 'nullable',
            'CDPlayer' => 'nullable',
            'CentralLocking' => 'nullable',
            'CrashSensor' => 'nullable',
            'LeatherSeats' => 'nullable',
        ]);
        

        // $input = $request->all();
        $vehicle = Vehicle::create([
            'VehiclesTitle'=> $request->VehiclesTitle,
            'brand_id'=> $request->brand_id,
            'VehiclesOverview'=> $request->VehiclesOverview,
            'PricePerDay'=> $request->PricePerDay,
            'FuelType'=> $request->FuelType,
            'ModelYear'=> $request->ModelYear,
            'SeatingCapacity'=> $request->SeatingCapacity,
            'AirConditioner'=> $request->AirConditioner == true ? 1 : 0,
            'PowerDoorLocks'=> $request->PowerDoorLocks == true ? 1 : 0,
            'AntiLockBrakingSystem'=> $request->AntiLockBrakingSystem == true ? 1 : 0,
            'BrakeAssist'=> $request->BrakeAssist == true ? 1 : 0,
            'PowerSteering'=> $request->PowerSteering == true ? 1 : 0,
            'DriverAirbag'=> $request->DriverAirbag == true ? 1 : 0,
            'PassengerAirbag'=> $request->PassengerAirbag == true ? 1 : 0,
            'PowerWindows'=> $request->PowerWindows == true ? 1 : 0,
            'CDPlayer'=> $request->CDPlayer == true ? 1 : 0,
            'CentralLocking'=> $request->CentralLocking == true ? 1 : 0,
            'CrashSensor'=> $request->CrashSensor == true ? 1 : 0,
            'LeatherSeats'=> $request->LeatherSeats == true ? 1 : 0
        ]);

        $images = [];
        $position = 0;
        // Process each uploaded image
        foreach($request->file('images') as $image) {
            $position++;
            // Generate a unique name for the image
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
              
            // Move the image to the desired location
            $image->move(public_path('images'), $imageName);
  
            // Add image information to the array
            $images[] = ['name' => $imageName, 'vehicle_id' => $vehicle->id, 'position' => $position];
        }
  
        // Store images in the database using create method
        foreach ($images as $imageData) {
            VehicleImages::create($imageData);
        }

        return redirect()->route('vehicles.index')->with('success','Vehicle created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicle = Vehicle::find($id);
        $brands = Brand::all(); 
        return view('vehicles.edit', compact('vehicle', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'VehiclesTitle' => 'required',
            'brand_id' => 'required',
            'VehiclesOverview' => 'nullable',
            'PricePerDay' => 'required',
            'FuelType' => 'required',
            'ModelYear' => 'required',
            'SeatingCapacity' => 'required',
            'AirConditioner' => 'nullable',
            'PowerDoorLocks' => 'nullable',
            'AntiLockBrakingSystem' => 'nullable',
            'BrakeAssist' => 'nullable',
            'PowerSteering' => 'nullable',
            'DriverAirbag' => 'nullable',
            'PassengerAirbag' => 'nullable',
            'PowerWindows' => 'nullable',
            'CDPlayer' => 'nullable',
            'CentralLocking' => 'nullable',
            'CrashSensor' => 'nullable',
            'LeatherSeats' => 'nullable',
        ]);

        
        $vehicle = Vehicle::find($id);
        $vehicle->update([
            'VehiclesTitle'=> $request->VehiclesTitle,
            'brand_id'=> $request->brand_id,
            'VehiclesOverview'=> $request->VehiclesOverview,
            'PricePerDay'=> $request->PricePerDay,
            'FuelType'=> $request->FuelType,
            'ModelYear'=> $request->ModelYear,
            'SeatingCapacity'=> $request->SeatingCapacity,
            'AirConditioner'=> $request->AirConditioner == true ? 1 : 0,
            'PowerDoorLocks'=> $request->PowerDoorLocks == true ? 1 : 0,
            'AntiLockBrakingSystem'=> $request->AntiLockBrakingSystem == true ? 1 : 0,
            'BrakeAssist'=> $request->BrakeAssist == true ? 1 : 0,
            'PowerSteering'=> $request->PowerSteering == true ? 1 : 0,
            'DriverAirbag'=> $request->DriverAirbag == true ? 1 : 0,
            'PassengerAirbag'=> $request->PassengerAirbag == true ? 1 : 0,
            'PowerWindows'=> $request->PowerWindows == true ? 1 : 0,
            'CDPlayer'=> $request->CDPlayer == true ? 1 : 0,
            'CentralLocking'=> $request->CentralLocking == true ? 1 : 0,
            'CrashSensor'=> $request->CrashSensor == true ? 1 : 0,
            'LeatherSeats'=> $request->LeatherSeats == true ? 1 : 0
        ]);
        return redirect()->route('vehicles.index')->with('success','Vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle = Vehicle::find($id);
        $images = $vehicle->images;
        foreach($images as $image){
            $file_path = public_path().'/images/'.$image->name;
            File::delete($file_path);
        }
        $vehicle->images()->delete();
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success','Vehicle deleted successfully');
    }

    public function editVehicleImages(Vehicle $vehicle){
        $vehicle_images = VehicleImages::where("vehicle_id", $vehicle->id)->orderBy("position")->get();
        return view('vehicles.vehicle_images', compact('vehicle_images','vehicle'));
    }

    public function updateVehicleImages(Request $request, Vehicle $vehicle)
    {
        $index = 0;
        $vehicle_images = VehicleImages::where("vehicle_id", $vehicle->id)->orderBy("position")->get();
        foreach($vehicle_images as $vehicle_image){
            $vehicle_image->update([
                'position' => $request->positions[$index]
            ]);
            $index++;
        }
       
        //Delete images on table
        if($request->delete_images){
            $deletedImagesIds = $request->delete_images;
            foreach($deletedImagesIds as $imageId){
                $image_name = VehicleImages::where('id', $imageId)->first()->name;
                //Delete image from public folder
                $file_path = public_path().'/images/'.$image_name;
                File::delete($file_path);
                VehicleImages::find($imageId)->delete();
            }
        }

        return redirect()->back()->with('success','Vehicle images updated successfully');
    }

    public function vehicleImageCreate(Request $request, Vehicle $vehicle)
    {

        $latestPosition = $vehicle->latestImage->position;
        
        // Validate incoming request data
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Initialize an array to store image information
        $images = [];

        // Process each uploaded image
        foreach($request->file('images') as $image) {
            $latestPosition++;
            // Generate a unique name for the image
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
              
            // Move the image to the desired location
            $image->move(public_path('images'), $imageName);
  
            // Add image information to the array
            $images[] = ['name' => $imageName, 'vehicle_id' => $vehicle->id, 'position' => $latestPosition];
        }
  
        // Store images in the database using create method
        foreach ($images as $imageData) {
            VehicleImages::create($imageData);
        }

        return redirect()->back()->with('success','Vehicle images added successfully');
    }


}
