
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Lógica para guardar un pokémon desde el controlador__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Writing Vue Components`](https://laravel.com/docs/5.6/frontend#writing-vue-components)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación del modelo `app\Pokemon.php` junto a su migración `database\migrations\2020_05_05_102756_create_pokemon_table.php`
   > php artisan make:model Pokemon -m
   - Edición de la migración `database\migrations\2020_05_05_102756_create_pokemon_table.php`
2. Implementar la migración
   > php artisan migrate
3. Edición del controlador `app\Http\Controllers\PokemonController.php`
   - Creación y edición de la función `store(Request $request)`
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `database\migrations\2020_05_05_102756_create_pokemon_table.php`

- Más información en `app\Http\Controllers\PokemonController.php`
<!-- end information -->