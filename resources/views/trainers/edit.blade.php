

@extends('layouts.app')

@section('title', "Trainers Edit")

@section('content')
  {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}

    <img style="height:200px; width:200px; background-color:#efefef; margin:20px;" class="card-img-top rounded-circle mx-auto d-block"  
         src="/images/{{ $trainer->avatar }}">

    @include('trainers.form')

    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
@endsection


{{-- Notas:
      | ---------------------------------------------------------------------------------------------------------
      | *La directiva @include de Blade permite reutilizar una vista
      |   *@include('trainers.form') - resources\views\trainers\form.blade.php
      | --------------------------------------------------------------------------------------------------------- 
--}}
