@extends('adminlte::page')

@section('title', 'Create Vehicle')

@section('content_header')
    <div class="row mb-2">
      <div class="col-sm-6">
        <h2>Create New Vehicle</h2>
        <x-adminlte-button class="btn-sm mb-2" label="Back" theme="primary" icon="fa fa-arrow-left" onclick="window.location='{{ route('vehicles.index') }}'"/>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Project Add</li>
        </ol>
      </div>
    </div>
@stop

@section('content')

<form method="POST" action="{{ route('vehicles.store') }}" enctype="multipart/form-data">
    @csrf
    <x-adminlte-card title="Create New Vehicle" theme="primary">
        
                <x-adminlte-input name="VehiclesTitle" label="Title:" placeholder="Vehicle Title" enable-old-support/>
        
                <x-adminlte-textarea name="VehiclesOverview" label="Description:" placeholder="Vehicle Description" enable-old-support/>
        
                <div class="row">
                    <x-adminlte-select2 name="brand_id" label="Brand:" fgroup-class="col-xs-6 col-sm-6 col-md-6" data-placeholder="Select an option..." enable-old-support>   
                        @foreach($brands as $brand)
                            <x-adminlte-options :options="[$brand->id => $brand->name]" empty-option />
                        @endforeach
                    </x-adminlte-select2>

                    <x-adminlte-select2 name="FuelType" label="Fuel Type:" fgroup-class="col-xs-6 col-sm-6 col-md-6" data-placeholder="Select an option..." enable-old-support>
                        <x-adminlte-options :options="['Gasoline' => 'Gasoline', 'Diesel' => 'Diesel', 'Electric' => 'Electric', 'Hybrid' => 'Hybrid']" empty-option/>
                    </x-adminlte-select2>
                </div>
                
                <div class="row">
                    <x-adminlte-input name="PricePerDay" type="number" label="Price:" placeholder="Vehicle Price" enable-old-support
                fgroup-class="col-xs-4 col-sm-4 col-md-4"/>
        
                <x-adminlte-select2 name="ModelYear" label="Year:" fgroup-class="col-xs-4 col-sm-4 col-md-4" data-placeholder="Select an option..." enable-old-support>
                    <x-adminlte-options :options="['2024' => '2024', '2023' => '2023', '2022' => '2022', '2021' => '2021']" empty-option/>
                </x-adminlte-select2>

                <x-adminlte-input name="SeatingCapacity" type="number" label="Seats:" placeholder="Number of seats" enable-old-support
                fgroup-class="col-xs-4 col-sm-4 col-md-4"/>
                </div>
        
            <div class="row">
                    <x-adminlte-input-switch name="AirConditioner" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Air Conditioner:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>

                    <x-adminlte-input-switch name="PowerDoorLocks" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Power Door Locks:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                            
                    <x-adminlte-input-switch name="AntiLockBrakingSystem" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="AntiLock Braking System:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>

                    <x-adminlte-input-switch name="BrakeAssist" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Brake Assist:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
            </div>
        
                <div class="row">
                    <x-adminlte-input-switch name="PowerSteering" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Power Steering:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
            
                    <x-adminlte-input-switch name="DriverAirbag" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Driver Airbag:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
            
                    <x-adminlte-input-switch name="PassengerAirbag" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Passenger Airbag:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
            
                    <x-adminlte-input-switch name="PowerWindows" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Power Windows:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                </div>
        
                <div class="row">
                    <x-adminlte-input-switch name="CDPlayer" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="CD Player:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
            
                    <x-adminlte-input-switch name="CentralLocking" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Central Locking:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
            
                    <x-adminlte-input-switch name="CrashSensor" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Crash Sensor:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
            
                    <x-adminlte-input-switch name="LeatherSeats" data-on-text="YES" data-off-text="NO"
                    data-on-color="teal" label="Leather Seats:" fgroup-class="col-xs-3 col-sm-3 col-md-3"/>
                </div>

                <x-adminlte-input-file-krajee id="kifPholder" name="images[]"
                igroup-size="sm" data-msg-placeholder="Choose multiple files..."
                data-show-cancel="false" data-show-close="false" data-show-upload="false" multiple/>
            
            <x-slot name="footerSlot">
                <x-adminlte-button class="btn-sm float-right" theme="primary" type="submit" label="Submit" icon="fas fa-lg fa-save"/>
            </x-slot>

    </x-adminlte-card>
</form>


@endsection
