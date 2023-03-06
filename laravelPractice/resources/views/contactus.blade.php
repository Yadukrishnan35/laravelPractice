<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is contactus page</h1>
    @include('menu.menu')
    @isset($colour)
        <h3>colour getting...</h3>
    @endisset

    @switch($status)
        @case(1) 
            <h2>hello yadu</h2>
            @break
        @case(2)
            <h3>Hai h3</h3>
            @break
        @default
            <p>Default case</p>
    @endswitch
</body>
</html>