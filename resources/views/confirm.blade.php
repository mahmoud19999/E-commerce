@extends('layout2')
@section('content')

@include('error')
<form method="post" action="{{route('confirm')}}" class="container">
@csrf	
	  <div class=" form-group ">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>
  <div class=" form-group ">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
<div class=" form-group ">
    <label for="exampleInputEmail1">Phone</label>
    <input max="10" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone" name="phone">
    <small id="emailHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
  <div class="form-check">

  </div>
	<button type="submit" class="btn btn-primary mt-2">Done</button>
</form>

@endsection