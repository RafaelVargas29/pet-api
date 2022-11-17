@extends('layouts.main')

@section('title', 'Raças')

@section('content')
    <h1>Raças</h1>
    
    @foreach($data_breed as $d)
            
        <p>Nome: {{ $d->name }}</p>
        <p>Vida útil: {{ $d->life_span }}</p><br>

    @endforeach

@endsection