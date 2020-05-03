
@extends('layouts.app')

@section('title', 'Create Trainer')

@section('content')

  @include('common.errors')

  {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

    @include('trainers.form')
    
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
</form>
@endsection


{{-- Notas:
      | ---------------------------------------------------------------------
      | *La directiva @include permite incluir una vista dentro de otra vista  
      | ---------------------------------------------------------------------  
--}}
