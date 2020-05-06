
/* Notas:
    | -------------------------------------------------------------------------------------------------------------
    | *v-for="pokemon in pokemons" Es un recorrido de un array que viene del código de vue data(): pokemons: []
    | *pokemon.name Es para mostrar el nombre del pokémon usando la propiedad name del array pokemons del foreach y 
    |  del array en vue en la propiedad data: pokemons[]
    | *v-bind:src="pokemon.picture" Obtiene el nombre de la imagen para mostrarla 
    | -------------------------------------------------------------------------------------------------------------
*/
<template>
  <div class="row">

    <div class="col-12">
      <spinner-component v-show="loading"></spinner-component>
    </div>

    <div class="col-sm" v-for="pokemon in pokemons" :key="pokemon.id">
      <div class="card text-center" style="width: 18rem; margin-top:70px;">
        <img style="height:100px; width:100px; background-color:#efefef; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" 
         v-bind:src="pokemon.picture">
        <div class="card-body">
          <h5 class="card-title">{{ pokemon.name }}</h5>
          <p class="card-text">PokémonDescription</p>
        <a href="/trainers/" class="btn btn-primary">Ver más...</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import EventBus from '../../event-bus';
export default {
  data(){
    return {
      pokemons: [],
      loading: true,
    }
  },
  /* 
    | -------------------------------------------------------------------------------------------------------------------------------------
    | *EventBus Es la instancia de resources\assets\js\event-bus.js
    | *$on Es para escuchar el evento
    | *'pokemon-added' Nombre del evento que hay que escuchar
    | *data Es la información del pokémon nuevo
    | *this.pokemons.push(data) Accede a la variable data: pokemons: [] y se usa el método push() para agregar la información a la variable
    | -------------------------------------------------------------------------------------------------------------------------------------
  */
  created(){
    EventBus.$on('pokemon-added', data => {
      this.pokemons.push(data)
    })
  },
  mounted() {
    axios.get('/pokemons').then(response => 
      (
        this.pokemons = response.data,
        this.loading = false
      )
    );
  }
}
</script>


/* Notas:
    | -------------------------------------------------------------------------------
    | *La estructura de los componentes es la siguiente:
    |   *Etiqueta: template Dónde va el html del componente
    |   *Etiqueta: script Dónde va el código de Vue del componente
    |   *Etiqueta style: Dónde van los estilos del componente
    | *No es recomendable usar css en el Html pero en esta caso es demostrativo
    | *La propiedad mounted() es para cargar código tan pronto se monte el componente
    | *import EventBus from '../../event-bus'; Se importa resources\assets\js\event-bus.js
    | *created() es parte del ciclo de vida de un componente Vue
    |   *Más información en https://vuejs.org/v2/guide/instance.html#Lifecycle-Diagram  (IMPORTANTE)
    |   *Más información en https://vuejs.org/v2/api/#created
    | -------------------------------------------------------------------------------
 */


