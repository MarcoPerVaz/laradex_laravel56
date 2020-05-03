
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Modelo Role y su migración__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Eloquent: Relationships`](https://laravel.com/docs/5.6/eloquent-relationships)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación del modelo `app\Role.php` con su migración `database\migrations\2020_05_02_232653_create_roles_table.php`
   > php artisan make:model Role -m

   **Crea un modelo y para el nombre de la migración se basa en el nombre del modelo*
   - Edición de la migración `database\migrations\2020_05_02_232653_create_roles_table.php`
   - Edición del modelo `app\Role.php`
2. Creación de la migración `database\migrations\2020_05_02_233057_create_role_user_table.php`
   > php artisan make:migration create_role_user_table

   **Esta migración servirá de tabla pivote(almacenará el id del role y el id del usuario)*
   - Edición de la migración `database\migrations\2020_05_02_233057_create_role_user_table.php`
3. Edición del modelo `app\User.php`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `database\migrations\2020_05_02_232653_create_roles_table.php`

- Más información en `database\migrations\2020_05_02_233057_create_role_user_table.php`

- Más información en `app\Role.php`

- Más información en `app\User.php`
<!-- end information -->