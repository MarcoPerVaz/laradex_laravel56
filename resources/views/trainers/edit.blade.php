

@extends('layouts.app')

@section('title', "Trainers Edit")

@section('content')
<form class="form-group" action="/trainers/{{ $trainer->slug }}" method="POST" enctype="multipart/form-data">
  
  @method('PUT')
  
  @csrf

  {{-- image --}}
    <img style="height:200px; width:200px; background-color:#efefef; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" 
         src="/images/{{ $trainer->avatar }}">
  {{-- end image --}}
   
  {{-- name --}}
    <div class="form-group">
      <label for="">Nombre</label>
      <input type="text" name="name" id="" value="{{ $trainer->name }}" class="form-control">
    </div>
  {{-- end name --}}

  {{-- description --}}
    <div class="form-group">
      <label for="">Descripción</label>
      <input type="text" name="description" id="" value="{{ $trainer->description }}" class="form-control">
    </div>
  {{-- end description --}}

  {{-- avatar --}}
    <div class="form-group">
      <label for="">Avatar</label>
      <input type="file" name="avatar">
    </div>
  {{-- avatar --}}

  <button type="submit" class="btn btn-primary">Actualizar</button>

</form>
@endsection


{{-- Notas:
      | --------------------------------------------------------------------------------------------------------------------------------------
      | *@csrf Directiva que protege contra ataques de tipo csrf (cross-site-request-forgery)
      | *@method('PUT') Directiva que agrega el método Http PUT que no incluyen los navegadores pero Laravel permite su uso y adaptación
      | *$trainer es la variable que viene desde la función edit(Trainer $trainer) del controlador app\Http\Controllers\TrainerController.php
      | *enctype="multipart/form-data" Permite incluir archivos dentro del formulario
      | *No es recomendable incluir CSS en la vista
      | *Se usa la librería Bootstrap 4.1.3
      |   *Más información en https://getbootstrap.com/docs/4.1/getting-started/introduction/
      | --------------------------------------------------------------------------------------------------------------------------------------  
--}}
