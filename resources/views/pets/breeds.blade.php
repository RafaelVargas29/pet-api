@extends('layouts.main')

@section('title', 'Raças')

@section('content')
    <h1>Raças</h1>
    
    @foreach($data_breed as $d)
            
        <p>Nome: {{ $d->name ?? ''}}</p>
        <p>Raça para procriar: {{ $d->bred_for ?? ''}}</p>
        <p>Grupo de raça: {{ $d->breed_group ?? '' }}</p>
        <p>Vida útil: {{ $d->life_span  ?? ''}}</p>
        <p>Temperamento: {{ $d->temperament ?? '' }}</p>
        <p>Origem: {{ $d->origin ?? '' }}</p><br><br>

    @endforeach

@endsection