@extends('layouts.master')
@section('content')
<form action="{{route('save.user')}}" method="post">
  @csrf
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <label for="dob"><b>Date od Birth</b></label>
    <input type="text" placeholder="Enter DOB" name="dob" id="dob" required>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  </form>
@endsection