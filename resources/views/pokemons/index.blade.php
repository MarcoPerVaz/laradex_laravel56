
@extends('layouts.app')

@section('content')

    <modal-button-create-pokemon></modal-button-create-pokemon>

    <list-of-pokemons></list-of-pokemons>

    <create-form-pokemon></create-form-pokemon>

@endsection


{{-- Notas:
      | -------------------------------------------------------------------------------------------------------------------------------------------------
      | *La etiqueta list-of-pokemons es un componente de Vue y se encuentra en: resources\assets\js\components\pokemons\listPokemons.vue
      | *El nombre del componente se asigna al momento de registrarlo en resources\assets\js\app.js
      | *La etiqueta modal-button-create-pokemon es el componente que contiene el botón para mostrar el formulario de creación de un pokémon
      |     *Se encuentra en: resources\assets\js\components\pokemons\modal-button-createPokemon.vue
      | *La etiqueta create-form-pokemon es el componente para crear un pokémon y se encuentra en: resources\assets\js\components\pokemons\addPokemon.vue
      | -------------------------------------------------------------------------------------------------------------------------------------------------  
--}}