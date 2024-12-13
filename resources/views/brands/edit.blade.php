@extends('adminlte::page')

@section('title', 'Edit Brand')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Brand</h2>
        </div>
        <div class="pull-right">
            <x-adminlte-button class="btn-sm mb-2" label="Back" theme="primary" icon="fa fa-arrow-left" onclick="window.location='{{ route('brands.index') }}'"/>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('brands.update', $brand->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <x-adminlte-input name="name" label="Name:" placeholder="Name"
        fgroup-class="col-xs-12 col-sm-12 col-md-12" value="{{ $brand->name }}"/>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <x-adminlte-button class="btn-sm mt-2 mb-3" type="submit" label="Submit" theme="primary" icon="fas fa-lg fa-save"/>
        </div>
    </div>
</form>

@endsection
