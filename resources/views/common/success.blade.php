
@if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif


{{-- Notas:
      | -------------------------------------------------------------------------------------------------------------------------------
      | *session('status') Es una variable de sesión que viene de la función update(Request $request, Trainer $trainer) del controlador 
      |  app\Http\Controllers\TrainerController.php
      | -------------------------------------------------------------------------------------------------------------------------------  
--}}