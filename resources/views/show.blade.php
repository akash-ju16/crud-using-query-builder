@extends('admin.layout')
@section('title','DisplayPage')
@section('main-content')
<h1>Data Display</h1>
@if(session()->has('ustatus'))
{{session('ustatus')}}
@endif
<table class="table border border-info">
    <tr>
        <th>Name</th>
        <th>PhoneNumber</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach($d as $v)
    <tr>
        <td>{{ $v->name }}</td>
        <td>{{ $v->mobile }}</td>
        <td>{{ $v->email }}</td>
        <td>
            <a href="edit/{{ $v->id }}" class="btn btn-primary btn-sm">Edit</a> 
            <a href="delete/{{ $v->id }}" class="btn btn-danger btn-sm">delete</a>
        </td>
    </tr>
    @endforeach
</table>

   
@endsection