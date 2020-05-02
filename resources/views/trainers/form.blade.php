
{{-- name --}}
  <div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
{{-- end name --}}

{{-- description --}}
  <div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
  </div>
{{-- end description --}}

{{-- avatar --}}
  <div class="form-group">
    {!! Form::label('avatar', 'Avatar') !!}
    {!! Form::file('avatar') !!}
  </div>
{{-- end avatar --}}


{{-- Notas:
      | ---------------------------------------------------------------------------------------------------------
      | *Subvista que permite reutilizar el formulario tanto para crear un trainer como para actualizar un trainer  
      | ---------------------------------------------------------------------------------------------------------  
--}}