
@extends('layouts.app')

@section('title', 'Create Trainer')

@section('content')
  {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

    @include('trainers.form')
    
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
</form>
@endsection


{{-- Notas:
      | ------------------------------------------------------------
      | *La directiva @include de Blade permite reutilizar una vista
      |   *@include('trainers.form') - resources\views\trainers\form.blade.php
      | ------------------------------------------------------------ 
--}}
