
<template>
  <div class="modal fade" id="addPokemon" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Pokemon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="savePokemon">
            <!-- name -->
              <div class="form-group">
                <label>Pokemon</label>
                <input type="text" class="form-control" placeholder="Ingresa el nombre del pokemon" v-model="name">
              </div>
            <!-- end name -->
            
            <!-- picture -->
              <div class="form-group">
                <label>Picture</label>
                <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" v-model="picture">
                <small><em>Ejemplo: /images/Pokemons/charizard.png</em></small>
              </div>
            <!-- end picture -->

            <!-- button -->
              <button type="submit" class="btn btn-primary">Save</button>
            <!-- end button -->
        </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      name: null,
      picture: null,
    }
  },
  /* 
    | ----------------------------------------------------------------------------------
    | *Función para guardar un pokémon
    | *Ruta: axios.post('https://laradexlaravel56.it/pokemons') o axios.post('http://laradexlaravel56.it/pokemons')
    |   *axios.post es la petición Http de tipo POST para guardar un pokémon
    | *Más información sobre axios https://github.com/axios/axios
    | *this.name, Es para obtener el valor del elemento Html enlazado con v-model="name"
    | *this.picture, Es para obtener el valor del elemento Html enlazado con v-model="picture"
    | *name: Es para asignar valor a la variable data: name
    | *picture: Es para asignar valor a la variable data: picture
    | *console.log(res); Muestra en consola la respuesta
    | *$('#addPokemon').modal('hide') Esconde el modal si la respuesta es correcta
    | *console.log(err); Muestra en consola ls errores de la respuesta si es que los hay
    | ----------------------------------------------------------------------------------
  */
  methods: {
    savePokemon: function(){
      axios.post('/pokemons', {
        name: this.name,
        picture: this.picture
      })
      .then(function(res){
        console.log(res);
        $('#addPokemon').modal('hide')
      })
      .catch(function(err){
        console.log(err);
      })
    }
  }
}
</script>

<style>

</style>


/* Notas:
    | -----------------------------------------------------------------------------------------------------------------------------------------
    | *La versión de Bootstrap es la 4.0.0
    |   *https://getbootstrap.com/docs/4.0/getting-started/introduction/
    | *@submit.prevent="savePokemon" Previene la recarga del navegador y usar la función savePokemon del componente
    | *v-model="name" Sirve para pasar o enlazar una variable declarada en el Html (En Laravel se usar request) a el componente data:name
    | *v-model="picture" Sirve para pasar o enlazar una variable declarada en el Html (En Laravel se usar request) a el componente data:picture
    | -----------------------------------------------------------------------------------------------------------------------------------------
*/