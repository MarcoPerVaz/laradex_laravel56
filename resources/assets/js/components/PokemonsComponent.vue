
/* Notas:
    | ---------------
    | *v-for="pokemon in pokemons" Es un recorrido de un array que viene del código de vue data(): pokemons: []
    | *pokemon.name Es para mostrar el nombre del pokémon usando la propiedad name del array pokemons del foreach y 
    |  del array en vue en la propiedad data: pokemons: [{id: 1, name: "Pikachu"},]
    | ---------------
*/
<template>
  <div class="row">
    <div class="col-sm" v-for="pokemon in pokemons" :key="pokemon.id">
      <div class="card text-center" style="width: 18rem; margin-top:70px;">
        <img style="height:100px; width:100px; background-color:#efefef; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" 
        src="images/" alt="">
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
export default {
  data(){
    return {
      pokemons: [
        {id: 1, name: "Pikachu"},
        {id: 2, name: "Squirtle"},
        {id: 3, name: "Charizard"},
      ]
    }
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>


/* Notas:
    | -------------------------------------------------------------------------
    | *La estructura de los componentes es la siguiente:
    |   *Etiqueta: template Dónde va el html del componente
    |   *Etiqueta: script Dónde va el código de Vue del componente
    |   *Etiqueta style: Dónde van los estilos del componente
    | *No es recomendable usar css en el Html pero en esta caso es demostrativo
    | -------------------------------------------------------------------------
 */


