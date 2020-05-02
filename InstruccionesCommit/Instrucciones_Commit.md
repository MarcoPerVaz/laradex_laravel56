
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Validando formularios__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Writing The Validation Logic`](https://laravel.com/docs/5.6/validation#quick-writing-the-validation-logic)

[Documentación | `Displaying The Validation Errors`](https://laravel.com/docs/5.6/validation#quick-displaying-the-validation-errors)

[Documentación | `Available Validation Rules`](https://laravel.com/docs/5.6/validation#available-validation-rules)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Edición del controlador `app\Http\Controllers\TrainerController.php`
   - Edición de la función `store(Request $request)`
2. Edición de la vista `resources\views\trainers\create.blade.php`
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
- Más información en `app\Http\Controllers\TrainerController.php`

- Más información en `resources\views\trainers\create.blade.php`
<!-- end information -->