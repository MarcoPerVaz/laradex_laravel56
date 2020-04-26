
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Arreglando un error con MariaDB__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Ir a Index Lengths & MySQL / MariaDB`](https://laravel.com/docs/5.6/migrations#indexes)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Opción 1 - Edición del archivo de proveedor `app\Providers\AppServiceProvider.php`
   - Edición de la función `boot()`
2. Opción 2 - Edición de la migración `database\migrations\2014_10_12_000000_create_users_table.php`
   - Edición de la función `up()`

3. Ejecutar las migraciones
   > php artisan migrate:fresh

   **De ser necesario tendrán que borrarse las tablas de la base de datos manualmente*
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- El error es porque Laravel implementa caracteres utf8mb4 y se debe corregir manualmente en MariaDB (versión 10.2.2 o anteriores)
- Al tener MariaDB como gestor de base de datos y ejecutar las migraciones `php artisan migrate` muestra el siguiente error en consola
  > SQLState Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes

  para solucinarlo existen 2 opciones (editar app\Providers\AppServiceProvider.php) o (editar database\migrations\2014_10_12_000000_create_users_table.php)
- Al usar Laragon este error no aparece ya que el gestor de base de datos (HeidiSql) soporta emojis
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `app\Providers\AppServiceProvider.php`

- Más información en `database\migrations\2014_10_12_000000_create_users_table.php`
<!-- end information -->