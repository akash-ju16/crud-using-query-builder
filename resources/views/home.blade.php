@extends('admin.layout')
@section('title','CRUD using query builder')
@section('main-content')
<h1>hello crud</h1>
@if(session()->has('status'))
{{session('status')}}
@endif
@endsection