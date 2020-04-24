
@extends('layouts.app')

@section('title', 'Create Trainer')

@section('content')
  <div class="row">
    <div class="col-6 offset-2 mt-3">
      <div class="form-group">
        <label for="">Nombre Entrenador</label>
        <input class="form-control" type="text">
      </div>
      <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
@endsection


 {{-- Notas:
      | ---------------------------------------------------------------------------------------------------------------------------------------------------
      | *Blade permite reutilizar HTML
      | *Blade incluye muchas directivas que simplifican el uso de PHP en las vistas
      | ---------------------------------------------------------------------------------------------------------------------------------------------------
      | *La directiva @extends('layouts.app') permite que esta vista extienda de otra vista, en este caso de la vista resources\views\layouts\app.blade.php
      | *La directiva @section('title') permite insertar HTML dentro de la directiva @yield('title')
      |   *Dónde ('title') es el nombre que debe tener en la directiva @yield('title')
      |   *El contenido de section('title') se incluirá en yield('title')
      | --------------------------------------------------------------------------------------------------------------------------------------------------- 
--}}
