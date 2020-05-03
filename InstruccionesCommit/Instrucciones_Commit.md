
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Autenticación y registro de usuarios usando Auth__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Authentication Quickstart`](https://laravel.com/docs/5.6/authentication#authentication-quickstart)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación del scaffolding y rutas para Auth
   > php artisan make:auth

   **Laravel pedirá confirmaciones si al crear sus vistas ya hay una con el mismo nombre*

   **The [layouts/app.blade.php] view already exists. Do you want to replace it? (yes/no) [no]:*

   > yes
   - El comando genera lo siguiente:
      - Creación del controlador `app\Http\Controllers\HomeController.php`
      - Creación del directorio `resources\views\auth`
      - Creación del directorio `resources\views\auth\passwords`
         - Creación de la vista `resources\views\auth\passwords\email.blade.php`
         - Creación de la vista `resources\views\auth\passwords\reset.blade.php`
      - Creación de la vista `resources\views\auth\login.blade.php`
      - Creación de la vista `resources\views\auth\register.blade.php`
      - Creación del directorio `resources\views\layouts`
         - Creación de la vista `resources\views\layouts\app.blade.php`
      - Creación de la vista `resources\views\home.blade.php`

      **Ya existía el directorio `resources\views\layouts` y la vista `resources\views\layouts\app.blade.php` pero el comando reemplazo la vista, GIT interpretá que el archivo fue modificado pero en realidad se reemplazo*
      - Edición del archivo de rutas `routes\web.php`
        - El comando genera una ruta para todas las rutas necesarias para Auth
          - `Auth::routes();`
        - El comando genera una ruta asociada al controlador `app\Http\Controllers\HomeController.php`
          - `Route::get('/home', 'HomeController@index')->name('home');`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- `php artisan make:auth` genera vistas y rutas para la autenticación 
<!-- end notes -->
===
<!-- information -->
<!-- #### Información: -->
<!-- end information -->