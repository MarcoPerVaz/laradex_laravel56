
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Implementación de lógica de validación de roles__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Authorization`](https://laravel.com/docs/5.6/authorization)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Edición del controlador `app\Http\Controllers\TrainerController.php`
   - Edición de la función `index()`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- La mejor forma para bloquear acceso dependiendo el role es ver la documentación
  - [Authorization](https://laravel.com/docs/5.6/authorization)
- Tuve que hacer un cambio referente al curso porque si el usuario no había iniciado sesión y al querer ir a la ruta 'trainers' mostraba un error 
  `Call to a member function authorizeRoles() on null`, más información en la función `index()` del controlador `app\Http\Controllers\TrainerController.php`
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `app\Http\Controllers\TrainerController.php`
<!-- end information -->