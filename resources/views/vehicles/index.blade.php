@extends('adminlte::page')

@section('title', 'Vehicles')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Vehicles Management</h2>
        </div>
        <div class="pull-right">
            <x-adminlte-button label="Create New Vehicle" class="mb-2" theme="success" icon="fa fa-plus" onclick="window.location='{{ route('vehicles.create') }}'" />
        </div>
    </div>
</div>

@session('success')
    <div class="alert alert-success" role="alert"> 
        {{ $value }}
    </div>
@endsession

@php
$heads = [
    'No',
    'Brand',
    'Title',
    'Price',
    'Image',
    ['label' => 'Action', 'no-export' => true, 'width' => 40],
];
@endphp

<x-adminlte-datatable id="vehicles" :heads="$heads">
    @foreach ($data as $key => $vehicle)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $vehicle->brand->name }}</td>
            <td>{{ $vehicle->VehiclesTitle }}</td>
            <td>{{ $vehicle->PricePerDay }}</td>
            <td><img src="/images/{{$vehicle->primaryImage->name}}" alt="" class="img-thumbnail" width="150" height="100"></td>
            <td>
                <x-adminlte-button label="Images" class="btn-sm" theme="warning" icon="fas fa-images" onclick="window.location='{{ route('vehicle_images',$vehicle->id) }}'"/>
                <x-adminlte-button label="Show" class="btn-sm" theme="info" icon="fas fa-list" onclick="window.location='{{ route('vehicles.show',$vehicle->id) }}'" />
                <x-adminlte-button label="Edit" class="btn-sm" theme="primary" icon="fas fa-pen" onclick="window.location='{{ route('vehicles.edit',$vehicle->id) }}'" />
                  <form method="POST" action="{{ route('vehicles.destroy', $vehicle->id) }}" style="display:inline">
                      @csrf
                      @method('DELETE')
                      <x-adminlte-button type="submit" label="Delete" class="btn-delete btn-sm" theme="danger" icon="fas fa-trash" />
                  </form>
            </td>
        </tr>
    @endforeach
</x-adminlte-datatable>

@endsection

@section('js')
<script>
    $(".btn-delete").click(function(e){
        e.preventDefault();
        var form = $(this).parents("form");
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.value){
                form.submit();
            }
        });
    });
</script>
@stop