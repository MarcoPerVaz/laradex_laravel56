
/* Notas:
    | ---------------
    | *v-for="pokemon in pokemons" Es un recorrido de un array que viene del código de vue data(): pokemons: []
    | *pokemon.name Es para mostrar el nombre del pokémon usando la propiedad name del array pokemons del foreach y 
    |  del array en vue en la propiedad data: pokemons[]
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
      pokemons: []
    }
  },
  mounted() {
    axios.get('/pokemons').then(response => (this.pokemons = response.data))
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
    | *Axios es una librería de javascript similiar a ajax sirve para hacer peticiones asíncronas es decir sin necesidad de recargar el navegador
    | *axios.get('/pokemons').then(response => (this.pokemons = response.data))
    |   *axios es la instancia de axios
    |   *get() es el método Http get
    |   *'/pokemons' es la ruta de donde se obtiene la respuesta json y es enviada desde el controlador app\Http\Controllers\PokemonController.php que a su vez
    |    es obtenido a tráves de la ruta Route::resource('pokemons', 'PokemonController'); en routes\web.php
    |   *response es el nombre que se le asigna a la respues de axios (puede ser cualquier nombre)
    |   *this.pokemons = response.data Se le asigna a información de la respuesta de axios en el array pokemons en data del componente
    | -------------------------------------------------------------------------------
 */


