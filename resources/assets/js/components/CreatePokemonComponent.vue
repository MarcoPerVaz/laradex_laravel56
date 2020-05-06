
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
import EventBus from '../event-bus';
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

        // console.log(res.data.pokemon);
        EventBus.$emit('pokemon-added', res.data.pokemon)
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
    | *import EventBus from '../event-bus'; Se importa resources\assets\js\event-bus.js
    | *EventBus.$emit('pokemon-added', res.data.pokemon)
    |   *EventBus es la instancia de resources\assets\js\event-bus.js
    |   *$emit Significa emitir un evento
    |   *'pokemon-added' Nombre del evento (puede ser cualquier nombre)
    |   *res.data.pokemon La información del nuevo pokémon
    | *console.log(res.data.pokemon); Mostrar en consola del navegador la información del nuevo pokémon
    | -----------------------------------------------------------------------------------------------------------------------------------------
*/