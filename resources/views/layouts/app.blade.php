{{-- creazione layout  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- per ora metto un css generale che usano tutti --}}
    <link rel="stylesheet" href="/style.css">
    {{-- con lo yield metto segnaposto per essere poi 
    scritto nel file che implementerà il layout --}}
    {{-- nel file con layout usero @section('title')
    per andare a sovrascrivere il nome del layout --}}
    <title> @yield('title', 'stringa titolo(template Laravel)') </title>
</head>

<body>
    {{-- nel layout includo  i partial  --}}
    @include('partials.header')
    <div class="contenuto">
        {{-- nel file con layout usero @section('content')
            per andare a sovrascrivere il nome del layout --}}

        @yield('content', 'attualmente,questa pagina è vuota')
    </div>
</body>

</html>
