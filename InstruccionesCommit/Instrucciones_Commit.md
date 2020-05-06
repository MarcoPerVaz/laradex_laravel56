
<!-- title -->
<h1 align="center">Curso - Laradex con Laravel 5.6</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Reorganizando componentes__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Vue.js 2`](https://vuejs.org/v2/guide/)

[Documentación | `Writing Vue Components`](https://laravel.com/docs/5.6/frontend#writing-vue-components)
<!-- end official documentation -->

<!-- commit instructions -->
#### Instrucciones Commit
1. Creación del directorio `resources\assets\js\components\pokemons`
2. Creación del directorio `resources\assets\js\components\widgets`
3. Mover el componente `resources\assets\js\components\Spinner.vue` a `resources\assets\js\components\widgets\Spinner.vue`
4. Mover el componente `resources\assets\js\components\CreatePokemonComponent.vue` a `resources\assets\js\components\pokemons\CreatePokemonComponent.vue`
5. Renombrar del componente `resources\assets\js\components\pokemons\CreatePokemonComponent.vue` por `resources\assets\js\components\pokemons\addPokemon.vue`
6. Eliminación del componente `resources\assets\js\components\ExampleComponent.vue`
7. Mover el componente `resources\assets\js\components\PokemonsComponent.vue` a `resources\assets\js\components\pokemons\PokemonsComponent.vue`
8. Renombrar del componente `resources\assets\js\components\pokemons\PokemonsComponent.vue` por `resources\assets\js\components\pokemons\listPokemons.vue`
9. Mover el componente `resources\assets\js\components\AddPokemonComponent.vue` a `resources\assets\js\components\pokemons\AddPokemonComponent.vue`
10. Renombrar el componente `resources\assets\js\components\pokemons\AddPokemonComponent.vue` por `resources\assets\js\components\pokemons\modal-button-createPokemon.vue`
11. Edición del archivo `resources\assets\js\app.js`
12. Edición del componente `resources\assets\js\components\pokemons\addPokemon.vue`
13. Edición del componente `resources\assets\js\components\pokemons\listPokemons.vue`
14. Edición de la vista `resources\views\pokemons\index.blade.php`
15. Compilar archivos de Javascript
   > npm run dev

   **`npm run dev` compila los archivos cada que se usa el comando*

   > npm run watch

   **`npm run watch` compila los archivos cada que haya cambios de forma automática*
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
- [Documentación oficial | `Laravel 5.6`](https://laravel.com/docs/5.6)
- [Documentación oficial | `Vue.js 2`](https://vuejs.org/v2/guide/)
- [Documentación oficial | `Bootstrap 4.0.0`](https://getbootstrap.com/docs/4.0/getting-started/introduction/)
<!-- end notes -->
===
<!-- information -->
#### Información:
- Más información en `resources\assets\js\components\pokemons\addPokemon.vue`

- Más información en `resources\assets\js\components\pokemons\listPokemons.vue`

- Más información en `resources\assets\js\app.js`

- Más información en `resources\views\pokemons\index.blade.php`
<!-- end information -->