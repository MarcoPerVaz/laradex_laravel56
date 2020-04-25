
@extends('layouts.app')

@section('title', 'Create Trainer')

@section('content')
<form action="/trainers" method="POST">

  @csrf
  
  <div class="row">
    <div class="col-6 offset-2 mt-3">
      <div class="form-group">
        <label for="">Nombre Entrenador</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</form>
@endsection


 {{-- Notas:
      | ---------------------------------------------------------------------------------------------------------------------------------------------------
      | *La directiva @csrf protege de ataques csrf (cross site request forgery)
      |   *Más información en https://laravel.com/docs/5.6/csrf
      | --------------------------------------------------------------------------------------------------------------------------------------------------- 
--}}
