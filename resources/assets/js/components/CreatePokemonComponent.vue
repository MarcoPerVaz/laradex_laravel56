
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
          <form>
            <!-- name -->
              <div class="form-group">
                <label>Pokemon</label>
                <input type="text" class="form-control" placeholder="Ingresa el nombre del pokemon">
              </div>
            <!-- end name -->

            <!-- picture -->
              <div class="form-group">
                <label>Picture</label>
                <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" >
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
  
}
</script>

<style>

</style>


/* Notas:
    | ------------------------------------------------------------------
    | *La versión de Bootstrap es la 4.0.0
    |   *https://getbootstrap.com/docs/4.0/getting-started/introduction/
    | ------------------------------------------------------------------
*/