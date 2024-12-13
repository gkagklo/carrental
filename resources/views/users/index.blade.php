@extends('adminlte::page')

@section('title', 'Users')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success mb-2" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> Create New User</a>
        </div>
    </div>
</div>

@session('success')
    <div class="alert alert-success" role="alert"> 
        {{ $value }}
    </div>
@endsession

{{-- <table class="table table-bordered">
   <tr>
       <th>No</th>
       <th>Name</th>
       <th>Email</th>
       <th>Roles</th>
       <th width="280px">Action</th>
   </tr>
   @foreach ($data as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
               <label class="badge bg-success">{{ $v }}</label>
            @endforeach
          @endif
        </td>
        <td>
             <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fas fa-list"></i> Show</a>
             <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-pen"></i> Edit</a>
             <x-adminlte-button label="Edit" class="btn-sm" theme="primary" icon="fas fa-pen" onclick="window.location='{{ route('users.edit',$user->id) }}'" />
              <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
              </form>
        </td>
    </tr>
 @endforeach
</table> --}}

@php
$heads = [
    'No',
    'Name',
    'Email',
    'Roles',
    ['label' => 'Action', 'no-export' => true, 'width' => 40],
];
@endphp

<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach ($data as $key => $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                   <label class="badge bg-success">{{ $v }}</label>
                @endforeach
              @endif
            </td>
            <td>
                 <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fas fa-list"></i> Show</a>
                 {{-- <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-pen"></i> Edit</a> --}}
                 <x-adminlte-button label="Edit" class="btn-sm" theme="primary" icon="fas fa-pen" onclick="window.location='{{ route('users.edit',$user->id) }}'" />
                  <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline">
                      @csrf
                      @method('DELETE')
    
                      <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
            </td>
        </tr>
    @endforeach
</x-adminlte-datatable>


{{-- {!! $data->links('pagination::bootstrap-5') !!} --}}

@endsection
