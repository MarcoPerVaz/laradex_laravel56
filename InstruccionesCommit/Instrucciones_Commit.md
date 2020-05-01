
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Personalizando la función getRouteKeyName()__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Customizing The Key Name`](https://laravel.com/docs/5.6/routing#implicit-binding)

[Documentación | `Not Found Exceptions`](https://laravel.com/docs/5.6/eloquent#retrieving-single-models)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación y edición de la migración `database\migrations\2020_04_30_144155_add_slug_to_trainers_table.php`
   > php artisan make:migration add_slug_to_trainers_table --table=trainers

   **`--table=trainers` se le indica que agregué la migración agregará campos a la tabla `trainers`*
2. Ejecutar la migración
   > php artisan migrate:fresh
3. Edición de la vista `resources\views\trainers\index.blade.php`
4. Edición del controlador `app\Http\Controllers\TrainerController.php`
   - Edición de la función `show($id)`
   - Edición de la función `store(Request $request)`
5. Edición del modelo `app\Trainer.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- `firstOrFail()` Devuelve el primer registro que encuentre, pero si se busca uno que no existe regresa un error `404`
   - Más información en [`Not Found Exceptions Laravel 5.6`](https://laravel.com/docs/5.6/eloquent#retrieving-single-models)
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `app\Http\Controllers\TrainerController.php`

- Más información en `database\migrations\2020_04_30_144155_add_slug_to_trainers_table.php`

- Más información en `app\Trainer.php`
<!-- end information -->