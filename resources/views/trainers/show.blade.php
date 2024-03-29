
@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

  @include('common.success')

  <img style="height:200px; width:200px; background-color:#efefef; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" 
          src="/images/{{ $trainer->avatar }}" alt="">
  <div class="text-center">
    <h5 class="card-title">{{ $trainer->name }}</h5>
    <p>{{ $trainer->description }}</p>
    
    <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>

    {!! Form::open(['route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE']) !!}
      {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
  </div>

  <modal-button-create-pokemon></modal-button-create-pokemon>
  
  <create-form-pokemon></create-form-pokemon>

  <list-of-pokemons></list-of-pokemons>

@endsection


{{-- Notas:
      | -----------------------------------------------------------------------------------------------------------------------------------------------
      | *La etiqueta <modal-button-create-pokemon> hace referencia al componente resources\assets\js\components\pokemons\modal-button-createPokemon.vue
      | *La etiqueta <create-form-pokemon> hace referencia al componente resources\assets\js\components\pokemons\addPokemon.vue
      | *La etiqueta <list-of-pokemons> hace referencia al componente resources\assets\js\components\pokemons\listPokemons.vue
      | -----------------------------------------------------------------------------------------------------------------------------------------------  
--}}