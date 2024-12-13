@extends('adminlte::page')

@section('title', 'Show Brand')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Brand</h2>
        </div>
        <div class="pull-right">
            <x-adminlte-button class="btn-sm mb-2" label="Back" theme="primary" icon="fa fa-arrow-left" onclick="window.location='{{ route('brands.index') }}'"/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $brand->name }}
        </div>
    </div>
</div>
@endsection
