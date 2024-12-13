@extends('adminlte::page')

@section('title', 'Show Vehicle')

@section('content_header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Show Vehicle</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">E-commerce</li>
      </ol>
    </div>
</div>
@stop

@section('content')
<div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
          <div class="col-12">
            <img src="/images/{{ $vehicle->primaryImage->name }}" class="product-image" alt="Vehicle Image">
          </div>
          <div class="col-12 product-image-thumbs">
            @foreach($vehicle->images as $image)
                <div class="product-image-thumb" ><img src="/images/{{$image->name}}" alt="Vehicle Image"></div>
            @endforeach
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">{{ $vehicle->VehiclesTitle }}</h3>
          <p>{{ $vehicle->VehiclesOverview }}</p>

        <hr>

        <table class="table">
            <tbody>
              <tr>
                <td>Brand</td>
                <td>{{ $vehicle->brand->name }}</td>
              </tr>
              <tr>
                <td>Fuel Type</td>
                <td>{{ $vehicle->FuelType }}</td>
              </tr>
              <tr>
                <td>Price Per Day</td>
                <td>{{ $vehicle->PricePerDay }}&euro;</td>
              </tr>
              <tr>
                <td>Seating Capacity</td>
                <td>{{ $vehicle->SeatingCapacity }}</td>
              </tr>
            </tbody>
          </table>

        <h4>Features</h4>
        <div class="row">
            <div class="col">
                <ul>
                    <li>
                        @if($vehicle->AirConditioner == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Air Conditioner
                    </li>
                    <li>
                        @if($vehicle->PowerDoorLocks == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Power Door Locks
                    </li>
                    <li>
                        @if($vehicle->AntiLockBrakingSystem == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Anti Lock Braking System
                    </li>
                    <li>
                        @if($vehicle->BrakeAssist == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Brake Assist
                    </li>
                    <li>
                        @if($vehicle->PowerSteering == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Power Steering
                    </li>
                    <li>
                        @if($vehicle->DriverAirbag == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Driver Airbag
                    </li>
                </ul>
            </div>

            <div class="col">
                <ul>
                    <li>
                        @if($vehicle->PassengerAirbag == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Passenger Airbag
                    </li>
                    <li>
                        @if($vehicle->PowerWindows == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Power Windows
                    </li>
                    <li>
                        @if($vehicle->CDPlayer == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        CD Player
                    </li>
                    <li>
                        @if($vehicle->CentralLocking == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Central Locking
                    </li>
                    <li>
                        @if($vehicle->CrashSensor == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Crash Sensor
                    </li>
                    <li>
                        @if($vehicle->LeatherSeats == 1)
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @else
                        <i class="fas fa-minus-circle" style="color: red;"></i> 
                        @endif
                        Leather Seats
                    </li>
                </ul>
            </div>
        </div>

          <div class="bg-blue py-2 px-3 mt-4">
            <h2 class="mb-0">
              {{ $vehicle->PricePerDay }}&euro;
            </h2>
          </div>

        </div>
      </div>
      {{-- <div class="row mt-4">
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
          <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
          <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
        </div>
      </div> --}}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@stop

@section('js')
<script>
    $(document).ready(function() {
      $('.product-image-thumb').on('click', function () {
        var $image_element = $(this).find('img')
        $('.product-image').prop('src', $image_element.attr('src'))
        $('.product-image-thumb.active').removeClass('active')
        $(this).addClass('active')
      })
    })
</script>
@stop