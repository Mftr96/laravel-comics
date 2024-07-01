{{-- richiamo il layout --}}
@extends('layouts.app')
{{-- metto il titolo tramite section --}}
@section('title','COMIC-HOME')
{{-- inserisco il contenuto principale tramite section --}}
@section('content')
    <div class="container">
        @foreach ($supereroi as $item)
            <div class="card">
                <h2>{{$item['title']}}</h2>
                <img src="{{$item['thumb']}}" alt="">
                <p>{{$item['description']}}</p>
            </div>
        @endforeach
    </div>
@endsection
  

