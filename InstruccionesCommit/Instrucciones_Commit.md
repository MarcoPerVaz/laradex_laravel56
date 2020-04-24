
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Configuración de nombre, zona horaria y lenguaje de la app__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Laravel 5.6`](https://laravel.com/docs/5.6)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Cambiar nombre a la aplicación
    > php artisan app:name laradex
2. Edición del archivo de configuración `config\app.php`
    - Esto: `'timezone' => 'UTC',` por esto: `'timezone' => 'America/Mexico_City',`
    - Esto: `'locale' => 'en',` por esto: `'locale' => 'es',`
3. Creación del directorio `resources\lang\es`
    - Creación y edición del archivo `resources\lang\es\auth.php`
    - Creación y edición del archivo `resources\lang\es\pagination.php`
    - Creación y edición del archivo `resources\lang\es\passwords.php`
    - Creación y edición del archivo `resources\lang\es\validation.php`

      **La información de los 4 archivos fue tomada de [Laravel lang Español](https://github.com/caouecs/Laravel-lang/tree/master/src/es)*

    - Para instalar el paquete de idiomas `Laravel Lang`
        > composer require caouecs/laravel-lang:~3.0

        **Ir a `vendor/caouecs/laravel-lang` elegir el lenguaje, copiar la carpeta con el idioma que desee y pegarla en `resources\lang`*
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- [Zonas horarias](https://www.php.net/manual/es/timezones.php)
- [Laravel lang](https://github.com/caouecs/Laravel-lang)
<!-- end notes -->
===
<!-- information -->
#### Información:
<!-- end information -->