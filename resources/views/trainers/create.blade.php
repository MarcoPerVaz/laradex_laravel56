<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crear Entrenador Pokémon</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div class="container">
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
  </div>
</body>

</html>


<!-- Notas:
      | ---------------------------------------------------------------------------------------------------
      | *Se recomienda hacer uso de las directivas de Blade para evitar repetir lenguaje HTML en cada vista
      |   *Más información en https://laravel.com/docs/5.6/blade#defining-a-layout
      | *Nota: Se modifica la vista porque en el curso el diseño era extremadamente simple
      | ---------------------------------------------------------------------------------------------------
-->