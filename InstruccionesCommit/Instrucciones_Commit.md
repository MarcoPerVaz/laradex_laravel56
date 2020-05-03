
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Seeders__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Database: Seeding`](https://laravel.com/docs/5.6/seeding)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación y edición del Seeder `database\seeds\RoleTableSeeder.php`
   > php artisan make:seeder RoleTableSeeder

   **No olvidar importar el modelo `use laradex\Role;`*
2. Creación y edición del Seeder `database\seeds\UserTableSeeder.php`
   > php artisan make:seeder UserTableSeeder

   **No olvidar importar el modelo `use laradex\Role;`*

   **No olvidar importar el modelo `use laradex\User;`*
3. Edición del archivo `database\seeds\DatabaseSeeder.php`
4. Se implementan las migraciones borrando y creando las migraciones y los seeds
   > php artisan migrate:fresh --seed
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- `Seeds` sirven para generar información predefinida para pruebas en la base de datos
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `database\seeds\RoleTableSeeder.php`

- Más información en `database\seeds\UserTableSeeder.php`

- Más información en `database\seeds\DatabaseSeeder.php`
<!-- end information -->