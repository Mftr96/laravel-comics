{{-- utilizzo il layout appena creato per snellire il codice --}}
@extends('layouts.app')
{{-- il secondo argomento della section è una stringa
 che va a prendere il posto assegnato evitando così di scrivere più codice  --}}
@section('title','About')
{{-- questa sezione non ha il secondo argomento perchè inserisco tag HTML --}}
@section('content')

    <h1>ciao! sei giunto nella sezione about</h1>
    <p>e niente, questo è tutto </p>
@endsection