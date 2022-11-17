@extends('layouts.main')

@section('title', 'Dog aleatório')

@section('content')
    <section class="main-content-show">
        <h1>Seu pet!</h1>
        
        <section class="content-img-show">
        <img class="image" src="{{ $data->url }}" alt="Imagem aleatória de um cachorro"><br>
        </section>
        
       <a class="btn-updater-show" href="/show">Atualizar pet</a><br>
    </section>
@endsection

    