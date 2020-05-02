
@extends('layouts.app')

@section('title', 'Create Trainer')

@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
      
  @endif

  {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

    @include('trainers.form')
    
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
</form>
@endsection


{{-- Notas:
      | -------------------------------------------------------------------------------------------------
      | *Laravel incluye la variable $errors que permite imprimir en la vista los errores de validación
      | *@if ($errors->any()) Verifica si hay errores
      | *@foreach ($errors->all() as $error) Recorre todos los errores y los guarda en la variable $error
      | *{{ $error }} Muestra el o los errores en la vista
      | ------------------------------------------------------------------------------------------------- 
--}}
