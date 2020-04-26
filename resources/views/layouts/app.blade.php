
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laradex - @yield('title')</title>
  {{-- CSS Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  {{-- menu --}}
    <nav class="navbar navbar-dark bg-primary">
      <a href="Laradex" class="navbar-brand">Laradex</a>
    </nav>
  {{-- end menu --}}
  <div class="container">
    @yield('content')
  </div>
</body>

</html>


{{--  Notas: 
      | -----------------------------------------------------------------------------------------------------------------------
      | *Blade permite reutilizar HTML
      | *Blade incluye muchas directivas que simplifican el uso de PHP en las vistas
      | -----------------------------------------------------------------------------------------------------------------------
      | *La directiva @yield('title') sirve para enlazar subvistas que tengan la directiva section('title') con el mismo nombre
      |   *Dónde ('title') es el nombre que se le asigna para identificar y poderlo referenciar
      |   *El contenido de section('title') se incluirá en yield('title')
      | *Se usa la librería Bootstrap 4.1.3
      |   *Más información en https://getbootstrap.com/docs/4.1/getting-started/introduction/
      | -----------------------------------------------------------------------------------------------------------------------
--}}