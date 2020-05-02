
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Validando formularios usando FormRequest__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Form Request Validation`](https://laravel.com/docs/5.6/validation#form-request-validation)

[Documentación | `Displaying The Validation Errors`](https://laravel.com/docs/5.6/validation#quick-displaying-the-validation-errors)

[Documentación | `Available Validation Rules`](https://laravel.com/docs/5.6/validation#available-validation-rules)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación y edición del FormRequest `app\Http\Requests\StoreTrainerRequest.php`
   > php artisan make:request StoreTrainerRequest
2. Edición del controlador `app\Http\Controllers\TrainerController.php`
   - Edición de la función `store(Request $request)`

   **No olvidar importar `use laradex\Http\Requests\StoreTrainerRequest;`*
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)

- [Available Validation Rules](https://laravel.com/docs/5.6/validation#available-validation-rules)
- Si la aplicación es pequeña las validaciones se pueden hacer en el controlador
- Si la aplicación es grande entonces deben crearse FormRequest para almacenar las validaciones
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `app\Http\Requests\StoreTrainerRequest.php`

- Más información en `app\Http\Controllers\TrainerController.php`
<!-- end information -->