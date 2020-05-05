
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

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('pokemons-component', require('./components/PokemonsComponent.vue'));
Vue.component('spinner-component', require('./components/Spinner.vue'));

const app = new Vue({
    el: '#app'
});


/* Notas:
    | --------------------
    | *Vue.component('pokemons-component', require('./components/PokemonsComponent.vue'));
    |   *Vue es una nueva instancia de vuejs
    |   *component() Es la función que recibe el nombre del componente y su referencia de ruta
    |   *pokemons-component es el nombre que tenemos que poner en la etiqueta para poder usar el componente <pokemons-component></pokemons-component> 
    |   *require() Es la función para indicar la ruta del componente
    | *spinner-component Es el componente que tendrá el spinner loader y se mostrará al cargas los pokémon
    | --------------------
*/
