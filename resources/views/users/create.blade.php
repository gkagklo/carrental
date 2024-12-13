@extends('adminlte::page')

@section('title', 'Create User')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
        </div>
        <div class="pull-right">
            <x-adminlte-button class="btn-sm mb-2" type="submit" label="Back" theme="primary" icon="fa fa-arrow-left" onclick="window.location='{{ route('users.index') }}'"/>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="row">
        <x-adminlte-input name="name" label="Name:" placeholder="Name"
        fgroup-class="col-xs-12 col-sm-12 col-md-12"/>
        <x-adminlte-input type="email" name="email" label="Email:" placeholder="Email"
        fgroup-class="col-xs-12 col-sm-12 col-md-12"/>
        <x-adminlte-input type="password" name="password" label="Password:" placeholder="Password"
        fgroup-class="col-xs-12 col-sm-12 col-md-12"/>
        <x-adminlte-input type="password" name="confirm-password" label="Confirm Password:" placeholder="Confirm Password"
        fgroup-class="col-xs-12 col-sm-12 col-md-12"/>
        <x-adminlte-select name="roles[]" label="Role:" fgroup-class="col-xs-12 col-sm-12 col-md-12" multiple>
            @foreach ($roles as $value => $label)
                <option value="{{ $value }}">
                    {{ $label }}
                </option>
            @endforeach
        </x-adminlte-select>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <x-adminlte-button class="btn-sm mt-2 mb-3" type="submit" label="Submit" theme="primary" icon="fas fa-lg fa-save"/>
        </div>
    </div>
</form>

@endsection
