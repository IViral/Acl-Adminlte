@extends('adminlte::page')

@section('title', 'AdminLTE - Roles')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
<a class="btn btn-success" href="{{route('role.create')}}"> Create Role</a>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Display Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    @forelse($roles as $role)
        <tr>
            <td>{{$role->name}}</td>
            <td>{{$role->display_name}}</td>
            <td>{{$role->description}}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{route('role.edit',$role->id)}}" style="width: 45px;position: relative;">Edit</a>
                <form action="{{route('role.destroy',$role->id)}}"  method="POST" style="width: 55px;position: relative;float: left;">
                   {{csrf_field()}}
                   {{method_field('DELETE')}}
                   <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                 </form>
            </td>
        </tr>
        @empty
        <tr>
            <td>No roles</td>
        </tr>
        @endforelse

</table>

@stop