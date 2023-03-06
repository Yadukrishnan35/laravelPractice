    @extends('layouts.master')
    @section('content')
    <h1>Users Data</h1>
     <a href="{{route('create.user')}}" class="btn btn-primary">Add a new user</a>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">Si.no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">DOB</th>
      <th scope="col">status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->dob}}</td>
        <td>{{$user->status_text}}</td>
        <td>
            <a href="{{route('edit.user',$user->user_id)}}" class="btn btn-primary">Edit</a>
            <!-- <a href="{{route('user.userFullDetail',$user->user_id)}}" class="btn btn-warning">View User</a> -->
            <a href="{{route('user.userFullDetail',$user->user_id)}}" class="btn btn-warning">View User</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
        </tr>
    @endforeach
  </thead>
    </tbody>
</table>
    @foreach($colours as $colour)
    <h3>{{$colour}}</h3>
    @endforeach
    @endsection
    