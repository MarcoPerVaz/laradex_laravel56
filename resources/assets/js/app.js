
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('list-of-pokemons', require('./components/pokemons/listPokemons.vue'));
Vue.component('spinner-component', require('./components/widgets/Spinner.vue'));
Vue.component('modal-button-create-pokemon', require('./components/pokemons/modal-button-createPokemon.vue'));
Vue.component('create-form-pokemon', require('./components/pokemons/addPokemon.vue'));

const app = new Vue({
    el: '#app'
});


/* Notas:
    | -----------------------------------------------------------------------------------------------------------------------------------------------
    | *Vue.component('list-of-pokemons', require('./components/pokemons/listPokemons.vue'));
    |   *Vue es una nueva instancia de vuejs
    |   *component() Es la función que recibe el nombre del componente y su referencia de ruta
    |   *list-of-pokemons es el nombre que tenemos que poner en la etiqueta para poder usar el componente <list-of-pokemons></list-of-pokemons>
    |   *require() Es la función para indicar la ruta del componente
    | *spinner-component Es el componente que tendrá el spinner loader y se mostrará al cargas los pokémon
    | *modal-button-create-pokemon Es el componente que incluye un botón para mostrar el formulario de creación de un pokémon
    | *create-form-pokemon Es el componente para crear un pokémon
    | -----------------------------------------------------------------------------------------------------------------------------------------------
*/
