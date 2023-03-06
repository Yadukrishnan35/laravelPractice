    @extends('layouts.master')
    @section('content')
    <h1>This is About Page</h1>
    <h3>Hai..im {{$newName}}</h3>
    @if($age=26)
    <h2>Yo are allowed</h2>
    @else
    <h2>Not Allowed</h2>
    @endif

    <!-- @unless($age=26)
        <h3>Not Allowed</h3> -->
    @endunless
    @endsection