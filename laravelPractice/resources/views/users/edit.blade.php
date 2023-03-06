@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title> Bootstrap 4 Registration Form Example </title>
<style>
  body {
    color: green;
  }
</style>
</head>

<form action="{{route('update.user')}}" method="post">
  @csrf
  <div class="container">
    <h1>Edit</h1>
    <p>Please fill in this form to create an account</p>
    <hr>
    <input type="hidden" name="user_id" value="{{$user->user_id}}">
    <label for="name"><b>Name</b></label>
    <input type="text" value="{{$user->name}}" placeholder="Enter Name" name="name" id="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" value="{{$user->email}}" placeholder="Enter Email" name="email" id="email" required>
    <label for="dob"><b>Date od Birth</b></label>
    <input type="text" value="{{$user->dob}}" placeholder="Enter DOB" name="dob" id="dob" required>
      <select class="form-control" name="status">
        <option value="1" @if($user->status == 1) selected="selected" @endif>Active</option>
        <option value="0" @if($user->status == 0) selected="selected" @endif>InActive</option>
      </select>
    <button type="submit" class="registerbtn">Register</button>
    <a href="{{route('create.address',$user->user_id)}}" class="btn btn-primary">Add Address</a>
  </div>
  </form>
@endsection