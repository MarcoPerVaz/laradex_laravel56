
@extends('layouts.app')

@section('title', 'Create Trainer')

@section('content')
<form action="/trainers" method="POST" enctype="multipart/form-data">

  @csrf
  
  <div class="row">
    <div class="col-6 offset-2 mt-3">
      <div class="form-group">
        <label for="">Nombre Entrenador</label>
        <input class="form-control" type="text" name="name">
      <div class="form-group">
        <label for="">Descripción del Entrenador</label>
        <input class="form-control" type="text" name="description">
      <div class="form-group">
        <label for="">Avatar</label>
        <input type="file" name="avatar">
      </div>
      <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</form>
@endsection


 {{-- Notas:
      | -------------------------------------------------------------------------
      | *enctype="multipart/form-data" Permite subir archivos desde el formulario
      | ------------------------------------------------------------------------- 
--}}
