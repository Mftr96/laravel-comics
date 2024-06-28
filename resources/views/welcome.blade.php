<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- se metti style nel public, il percorso è quello da public, 
    non il percorso per arrivare da questo file allo style --}}
    <link rel="stylesheet" href="/style.css">
    <title>Laravel-comics-Home</title>
</head>

<body>
    <div class="container">
        :@foreach ($supereroi as $item)
            <div class="card">
                <h2>{{$item['title']}}</h2>
                <img src="{{$item['thumb']}}" alt="">
                <p>{{$item['description']}}</p>
            </div>
        @endforeach
    </div>
  
</body>

</html>
