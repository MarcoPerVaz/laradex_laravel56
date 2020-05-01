
@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
  <img style="height:200px; width:200px; background-color:#efefef; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" 
          src="/images/{{ $trainer->avatar }}" alt="">
  <div class="text-center">
    <h5 class="card-title">{{ $trainer->name }}</h5>
    <p>{{ $trainer->description }}</p>
    
    <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>
  </div>
@endsection


{{-- Notas:
      | -----------------------------------------------------------------------------------------------------------------------
      | *$trainer es la variable pasada desde la función show($id) en el controlador app\Http\Controllers\TrainerController.php
      | *No se recomienda incluir CSS dentro de la vista
      | *Se usa la librería Bootstrap 4.1.3
      |   *Más información en https://getbootstrap.com/docs/4.1/getting-started/introduction/
      | -----------------------------------------------------------------------------------------------------------------------  
--}}