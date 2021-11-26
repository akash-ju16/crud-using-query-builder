@extends('admin.layout')
@section('title', 'Entry Form')
@section('main-content')
<form action="" method="post" class="mt-3">
    @csrf
    <div class="form-group">
        <label for="fname">Full Name</label>
        <input type="text" class="form-control" name="fname" id="fname" placeholder="enter your full name">
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter your mobile">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="enter your email">
    </div>
    <input type="submit" name="save" value="Save" class="btn btn-info">

</form>
@endsection