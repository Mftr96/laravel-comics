<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-comics-Home</title>
</head>

<body>
    {{-- creo ciclo su array "heroes" --}}
    @foreach ($heroes as $hero)
        <li>{{$hero}}</li>
    @endforeach
  
</body>

</html>
