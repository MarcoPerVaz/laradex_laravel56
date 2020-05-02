
@extends('layouts.app')

@section('title', 'Create Trainer')

@section('content')
  {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

    {{-- name --}}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
      </div>
    {{-- end name --}}

    {{-- description --}}
      <div class="form-group">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
      </div>
    {{-- end description --}}

    {{-- avatar --}}
      <div class="form-group">
        {!! Form::label('avatar', 'Avatar') !!}
        {!! Form::file('avatar') !!}
      </div>
    {{-- end avatar --}}
    
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
</form>
@endsection


{{-- Notas:
      | ---------------------------------------------------------------------------------------------------------
      | *Para más información sobre Laravel Collective versión 5.4.0
      |   *https://laravelcollective.com/docs/5.4/html
      | *Se cambió la forma en que se guarda el campos 'slug'
      |   *En el curso se hace:
      |     *Modificar la migración para que el campo 'slug' acepte valores nulos
      |     *Agregar un input a la vista resources\views\trainers\create.blade.php para guardar el slug
      |   *Lo que se hizo fue creando el slug a partir del nombre del trainer usando la función str_slug() de php
      |     *Función store(Request $request) del controlador app\Http\Controllers\TrainerController.php
      | --------------------------------------------------------------------------------------------------------- 
--}}
