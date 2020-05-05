
@extends('layouts.app')

@section('content')

    <add-pokemon-btn></add-pokemon-btn>

    <pokemons-component></pokemons-component>

    <create-form-pokemon></create-form-pokemon>

@endsection


{{-- Notas:
      | ------------------------------------------------------------------------------------------------------------------------------
      | *La etiqueta pokemons-comonent es un componente de Vue y se encuentra en: resources\assets\js\components\PokemonsComponent.vue
      | *El nombre del componente se asigna al momento de registrarlo en resources\assets\js\app.js
      | *La etiqueta add-pokemon-btn es el componente que contiene el botón para mostrar el formulario de creación de un pokémon
      | *La etiqueta create-form-pokemon es el componente para crear un pokémon
      | ------------------------------------------------------------------------------------------------------------------------------  
--}}