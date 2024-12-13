@extends('adminlte::page')

@section('title', 'Vehicle Images')

@section('content')
    <div class="row">
        <div class="col-md-6 mt-4">
            <form action="{{ route('updateVehicleImages', $vehicle->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Vehicle Images</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Delete</th>
                                    <th>Image</th>
                                    <th>Position</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicle_images as $vehicle_image)
                                    <tr>
                                        <td>
                                            <x-adminlte-input name="iBasic" type="checkbox" name="delete_images[]"
                                                value="{{ $vehicle_image->id }}" />
                                        </td>
                                        <td><img src="/images/{{ $vehicle_image->name }}" alt=""
                                                class="img-thumbnail"></td>
                                        <td>
                                            <x-adminlte-input name="positions[]" type="number" placeholder="Image Position"
                                                value="{{ $vehicle_image->position }}" enable-old-support />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div class="card-footer">
                        <x-adminlte-button label="Update" type="submit" theme="primary" />
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-6 mt-4">
            <form action="{{ route('vehicleImageCreate', $vehicle->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Images</h3>
                    </div>
                    <div class="card-body">

                        <x-adminlte-input-file-krajee id="kifPholder" name="images[]" igroup-size="sm"
                            data-msg-placeholder="Choose multiple files..." data-show-cancel="false" data-show-close="false"
                            data-show-upload="false" multiple />


                    </div>
                    <div class="card-footer">
                        <x-adminlte-button label="Add Images" type="submit" theme="primary" />
                    </div>
                </div>
            </form>
        </div>
    @stop

    @section('css')
    @stop

    @section('js')
    @stop
