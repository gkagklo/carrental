@extends('adminlte::page')

@section('title', 'Brands')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Brands Management</h2>
        </div>
        <div class="pull-right">
            <x-adminlte-button label="Create New Brand" class="mb-2" theme="success" icon="fa fa-plus" onclick="window.location='{{ route('brands.create') }}'" />
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
    'Name',
    ['label' => 'Action', 'no-export' => true, 'width' => 40],
];
@endphp

<x-adminlte-datatable id="brands" :heads="$heads">
    @foreach ($data as $key => $brand)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $brand->name }}</td>
            <td>
                 <x-adminlte-button label="Show" class="btn-sm" theme="info" icon="fas fa-list" onclick="window.location='{{ route('brands.show',$brand->id) }}'" />
                 <x-adminlte-button label="Edit" class="btn-sm" theme="primary" icon="fas fa-pen" onclick="window.location='{{ route('brands.edit',$brand->id) }}'" />
                  <form method="POST" action="{{ route('brands.destroy', $brand->id) }}" style="display:inline">
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