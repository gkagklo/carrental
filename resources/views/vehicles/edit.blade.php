@extends('adminlte::page')

@section('title', 'Edit Vehicle')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Vehicle</h2>
        </div>
        <div class="pull-right">
            <x-adminlte-button class="btn-sm mb-2" label="Back" theme="primary" icon="fa fa-arrow-left" onclick="window.location='{{ route('vehicles.index') }}'"/>
        </div>
    </div>
</div>

{{-- <form method="POST" action="{{ route('vehicles.update', $vehicle->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <x-adminlte-input name="name" label="Name:" placeholder="Name"
        fgroup-class="col-xs-12 col-sm-12 col-md-12" value="{{ $brand->name }}"/>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <x-adminlte-button class="btn-sm mt-2 mb-3" type="submit" label="Submit" theme="primary" icon="fas fa-lg fa-save"/>
        </div>
    </div>
</form> --}}

<form method="POST" action="{{ route('vehicles.update', $vehicle->id) }}">
    @csrf
    @method('PUT')
    <x-adminlte-card title="Edit Vehicle" theme="primary">
        
                <x-adminlte-input name="VehiclesTitle" label="Title:" placeholder="Vehicle Title" value="{{ $vehicle->VehiclesTitle }}"/>
        
                <x-adminlte-textarea name="VehiclesOverview" label="Description:" placeholder="Insert description...">
                    {{ $vehicle->VehiclesOverview }}
                </x-adminlte-textarea>

                <div class="row">
                    <x-adminlte-select name="brand_id" label="Brand:" fgroup-class="col-xs-6 col-sm-6 col-md-6">
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" @if($brand->id == $vehicle->brand_id) selected @endif>{{ $brand->name }}</option>
                        @endforeach
                    </x-adminlte-select>

                    <x-adminlte-select name="FuelType" label="Fuel Type:" fgroup-class="col-xs-6 col-sm-6 col-md-6">
                        <option value="Gasoline" @if($vehicle->FuelType == "Gasoline") selected @endif>Gasoline</option>
                        <option value="Diesel" @if($vehicle->FuelType == "Diesel") selected @endif>Diesel</option>
                        <option value="Electric" @if($vehicle->FuelType == "Electric") selected @endif>Electric</option>
                        <option value="Hybrid" @if($vehicle->FuelType == "Hybrid") selected @endif>Hybrid</option>
                    </x-adminlte-select>
                </div>
                
                <div class="row">
                    <x-adminlte-input name="PricePerDay" type="number" label="Price:" placeholder="Vehicle Price" value="{{ $vehicle->PricePerDay }}"
                fgroup-class="col-xs-4 col-sm-4 col-md-4"/>
        
                <x-adminlte-select name="ModelYear" label="Year:" fgroup-class="col-xs-4 col-sm-4 col-md-4">
                    <option value="2024" @if($vehicle->ModelYear == "2024") selected @endif>2024</option>
                    <option value="2023" @if($vehicle->ModelYear == "2023") selected @endif>2023</option>
                    <option value="2022" @if($vehicle->ModelYear == "2022") selected @endif>2022</option>
                    <option value="2021" @if($vehicle->ModelYear == "2021") selected @endif>2021</option>
                </x-adminlte-select>

                <x-adminlte-input name="SeatingCapacity" type="number" label="Seats:" placeholder="Number of seats" value="{{ $vehicle->SeatingCapacity }}"
                fgroup-class="col-xs-4 col-sm-4 col-md-4"/>
                </div>
        
            <div class="row">
                @if($vehicle->AirConditioner == 1)
                    <x-adminlte-input-switch name="AirConditioner" data-on-text="YES" data-off-text="NO" 
                    data-on-color="teal" label="Air Conditioner:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                @else
                    <x-adminlte-input-switch name="AirConditioner" data-on-text="YES" data-off-text="NO" 
                    data-on-color="teal" label="Air Conditioner:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                @endif

                @if($vehicle->PowerDoorLocks == 1)
                    <x-adminlte-input-switch name="PowerDoorLocks" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Power Door Locks:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                @else
                    <x-adminlte-input-switch name="PowerDoorLocks" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Power Door Locks:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/> 
                @endif

                @if($vehicle->AntiLockBrakingSystem == 1)
                    <x-adminlte-input-switch name="AntiLockBrakingSystem" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="AntiLock Braking System:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                @else
                    <x-adminlte-input-switch name="AntiLockBrakingSystem" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="AntiLock Braking System:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                @endif

                @if($vehicle->BrakeAssist == 1)
                    <x-adminlte-input-switch name="BrakeAssist" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Brake Assist:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                @else
                    <x-adminlte-input-switch name="BrakeAssist" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Brake Assist:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                @endif

                </div>
        
                <div class="row">

                    @if($vehicle->PowerSteering == 1)
                        <x-adminlte-input-switch name="PowerSteering" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Power Steering:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                    @else
                        <x-adminlte-input-switch name="PowerSteering" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Power Steering:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                    @endif

                    @if($vehicle->DriverAirbag == 1)
                        <x-adminlte-input-switch name="DriverAirbag" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Driver Airbag:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                    @else
                        <x-adminlte-input-switch name="DriverAirbag" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Driver Airbag:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                    @endif
                    
                    @if($vehicle->PassengerAirbag == 1)
                        <x-adminlte-input-switch name="PassengerAirbag" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Passenger Airbag:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                    @else
                        <x-adminlte-input-switch name="PassengerAirbag" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Passenger Airbag:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                    @endif

                    @if($vehicle->PowerWindows == 1)
                        <x-adminlte-input-switch name="PowerWindows" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Power Windows:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                    @else
                        <x-adminlte-input-switch name="PowerWindows" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Power Windows:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                    @endif

                </div>
        
                <div class="row">
                    @if($vehicle->CDPlayer == 1)
                        <x-adminlte-input-switch name="CDPlayer" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="CD Player:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                    @else
                        <x-adminlte-input-switch name="CDPlayer" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="CD Player:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                    @endif
                    
                    @if($vehicle->CentralLocking == 1)
                        <x-adminlte-input-switch name="CentralLocking" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Central Locking:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                    @else
                        <x-adminlte-input-switch name="CentralLocking" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Central Locking:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                    @endif

                    @if($vehicle->CrashSensor == 1)
                        <x-adminlte-input-switch name="CrashSensor" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Crash Sensor:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                    @else
                        <x-adminlte-input-switch name="CrashSensor" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Crash Sensor:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                    @endif

                    @if($vehicle->LeatherSeats == 1)
                        <x-adminlte-input-switch name="LeatherSeats" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Leather Seats:" fgroup-class="col-xs-3 col-sm-3 col-md-3" is-checked/>
                    @else
                        <x-adminlte-input-switch name="LeatherSeats" data-on-text="YES" data-off-text="NO"
                        data-on-color="teal" label="Leather Seats:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                    @endif
                    
                </div>
            
            <x-slot name="footerSlot">
                <x-adminlte-button class="btn-sm float-right" theme="primary" type="submit" label="Submit" icon="fas fa-lg fa-save"/>
            </x-slot>

    </x-adminlte-card>
</form>

@endsection
