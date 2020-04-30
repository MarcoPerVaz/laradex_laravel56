
@extends('layouts.app')

@section('title', 'Trainers')
@section('content')
<div class="row">
  @foreach ($trainers as $trainer)
      <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top:70px;">

          <img class="card-img-top rounded-circle mx-auto d-block" style="height:100px; width:100px; background-color:#efefef; margin:20px;"
               src="images/{{ $trainer->avatar }}" alt="{{ $trainer->name }}">

          <div class="card-body">
            <h5 class="card-title">{{ $trainer->name }}</h5>
            <p class="card-text">{{ $trainer->description }}</p>
            <a href="/trainers/{{ $trainer->id }}" class="btn btn-primary">Ver más...</a>
          </div>
        </div>
      </div>
  @endforeach
</div>
  <p>Listado de trainers</p>
@endsection

{{-- Notas: 
      | -------------------------------------------------------------------------------------
      | *$trainers es la variable pasada desde el controlador
      | *Se usa la directiva @foreach para recorrer todos los trainers
      | *No se recomienda incluir CSS dentro de la vista
      | *Se usa la librería Bootstrap 4.1.3
      |   *Más información en https://getbootstrap.com/docs/4.1/getting-started/introduction/
      | -------------------------------------------------------------------------------------
--}}