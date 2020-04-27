
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Guardar trainer con su imagen__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Inserting & Updating Models`](https://laravel.com/docs/5.6/eloquent#inserting-and-updating-models)

[Documentación | `Database: Migrations`](https://laravel.com/docs/5.6/migrations)

[Documentación | `Available Methods`](https://laravel.com/docs/5.6/collections#available-methods)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación y edición de la migración `database\migrations\2020_04_26_123043_add_avatar_to_trainer_table.php`
   > php artisan make:migration add_avatar_to_trainer_table --table=trainers

   **--table=trainers Sirve para indicarle a Laravel en que tabla se va a agregar el campo nuevo y Laravel nos ayuda con código*

   - Edición de la función `up()`
   - Edición de la función `down()`
2. Edición de la vista `resources\views\trainers\create.blade.php`

   **Para subir imágenes o archivo se debe saur la propiedad enctype del elemento HTML*
3. Edición del controlador `app\Http\Controllers\TrainerController.php`
   - Edición de la función `store(Request $request)`
4. Edición de la vista `resources\views\trainers\index.blade.php`
5. Implementar migraciones
   - Correr la migración sin borrar las anteriores
     > php artisan migrate
   - Correr las migraciones borrando las tablas y su información
     > php artisan migrate:refresh
6. Creación del directorio `public\images`
   - Creación del directorio `public\images\trainers`
      - Se agregaron imágenes de trainers para pruebas
   - Creación del directorio `public\images\pokemons`
      - Se agregaron imágenes de pokémons para pruebas
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- El campo 'description' de la tabla 'trainers' se agregó como ejercicio del instructor ya que en el curso solo se agrega el campo 'avatar'
- [ Más información sobre `enctype`](https://www.aprenderaprogramar.com/index.php?option=com_content&view=article&id=541:enctype-multipartform-data-html-seleccionar-archivo-type-file-en-formularios-ejemplo-basico-cu00725b&catid=69&Itemid=192)
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `database\migrations\2020_04_26_123043_add_avatar_to_trainer_table.php`

- Más información en `resources\views\trainers\create.blade.php`

- Más información en `app\Http\Controllers\TrainerController.php`

- Más información en `resources\views\trainers\index.blade.php`
<!-- end information -->