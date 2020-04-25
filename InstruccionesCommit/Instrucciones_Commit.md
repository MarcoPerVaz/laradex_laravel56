
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Migraciones y Modelos__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Database: Migrations`](https://laravel.com/docs/5.6/migrations)

[Documentación | `Defining Models`](https://laravel.com/docs/5.6/eloquent#defining-models)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación del modelo `app\Trainer.php` junto con su migración `database\migrations\2020_04_24_215137_create_trainers_table.php`
   > php artisan make:model Trainer -m
   - Edición de la migración `database\migrations\2020_04_24_215137_create_trainers_table.php`
   - El modelo no se edita de momento
2. Edición del controlador `app\Http\Controllers\TrainerController.php`
   - Edición de la función `store(Request $request)`

     **No olvidar importar el modelo `use laradex\Trainer;`*
3. Edición del archivo `.env`
   - DB_DATABASE=laradex_laravel56
   - DB_USERNAME=root
   - DB_PASSWORD=
4. Edición del archivo `.env.example` por si se clona el proyecto tener consistencia
   - DB_DATABASE=laradex_laravel56
   - DB_USERNAME=root
   - DB_PASSWORD=
5. Implementar las migraciones
   > php artisan migrate

   > php artisan migrate:fresh

   > php artisan migrate:refresh
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- Para crear un modelo con Artisan
  > php artisan make:model nombreModelo
- Para crear un modelo y su migración con Artisan
  > php artisan make:model nombreModelo -m
- Las migraciones son el control de versiones de la base de datos
- Los modelos son la representación de las tablas, cada modelo equivale a una tabla en la base de datos
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `database\migrations\2020_04_24_215137_create_trainers_table.php`
- Más información en `app\Http\Controllers\TrainerController.php`
<!-- end information -->