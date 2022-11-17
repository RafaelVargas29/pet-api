@extends('layouts.main')

@section('title', 'Dog aleatório')

@section('content')
    <h1>Seu pet!</h1>
    
    <section>
        <img class="image" src="{{ $data->url }}" alt="Imagem aleatória de um cachorro"><br>
    </section>
        
    <button class="btn-updater-show"><a href="/show">Atualizar pet</a></button><br>
@endsection

    