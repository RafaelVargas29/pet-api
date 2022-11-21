@extends('layouts.main')

@section('title', 'Raças')

@section('content')
    <h1>Raças</h1><br>
    
    @foreach($data_breed as $d)

        <img src="{{ $img[$loop->index] }}" alt="" width="200px" height="200px"> <br>
        <p>Nome: {{ $d->name ?? ''}}</p>
        <p>Raça para procriar: {{ $d->bred_for ?? ''}}</p>
        <p>Grupo de raça: {{ $d->breed_group ?? '' }}</p>
        <p>Vida útil: {{ $d->life_span  ?? ''}}</p>
        <p>Temperamento: {{ $d->temperament ?? '' }}</p>
        <p>Origem: {{ $d->origin ?? '' }}</p><br>   

    @endforeach

@endsection