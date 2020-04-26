
@extends('layouts.app')

@section('title', 'Trainers')
@section('content')
<div class="row">
  @foreach ($trainers as $trainer)
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $trainer->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
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