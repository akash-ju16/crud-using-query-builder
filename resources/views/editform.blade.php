@extends('admin.layout')
@section('title', 'Edit Form')
@section('main-content')
<h1>Edit Form</h1>
<form action="" method="post" class="mt-3">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="fname">Full Name</label>
        <input type="text" class="form-control" name="fname" id="fname" value="{{$ed->name}}">
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" class="form-control" name="mobile" id="mobile" value="{{$ed->mobile}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{$ed->email}}">
    </div>
    <input type="submit" name="edit" value="edit" class="btn btn-info">

</form>
@endsection