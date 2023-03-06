<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    @include('menu.menu')
    @foreach($colours as $colour)
    <!-- <h3>{{$loop->index}}-{{strtoupper($colour)}}     -->
    <h3>{{$loop->iteration}}-{{strtoupper($colour)}}
    @endforeach
</body>
</html>