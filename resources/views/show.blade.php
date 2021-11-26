@extends('admin.layout')
@section('title','DisplayPage')
@section('main-content')
<h1>Data Display</h1>
<table class="border border-info">
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
        <td>Edit</td>
    </tr>
    @endforeach
</table>

   
@endsection