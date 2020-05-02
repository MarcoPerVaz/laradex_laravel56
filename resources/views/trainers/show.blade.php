
@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
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
@endsection


{{-- Notas:
      | -----------------------------------------------------------------------------------------------------------------------
      | *Más información sobre Laravel Collectiva https://laravelcollective.com/docs/5.4/html
      | -----------------------------------------------------------------------------------------------------------------------  
--}}