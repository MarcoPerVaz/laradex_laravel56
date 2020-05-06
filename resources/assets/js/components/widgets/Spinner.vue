
<template>
  <div class="loader">Loading...</div>
</template>

<script>
export default {
  name: 'spinner'
}
</script>

<style>
  .loader,
  .loader:after {
    border-radius: 50%;
    width: 10em;
    height: 10em;
  }
  .loader {
    margin: 60px auto;
    font-size: 10px;
    position: relative;
    /* text-indent: -9999em; */
    border-top: 1.1em solid rgba(65,184,131, 0.2);
    border-right: 1.1em solid rgba(65,184,131, 0.2);
    border-bottom: 1.1em solid rgba(65,184,131, 0.2);
    border-left: 1.1em solid #41b883;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-animation: load8 1.1s infinite linear;
    animation: load8 1.1s infinite linear;
  }
  @-webkit-keyframes load8 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  @keyframes load8 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
</style>


/* Notas:
    | --------------------
    | *<div class="loader">Loading...</div Muestra un comportamiento raro (se hace grande y pequeña la página todo el tiempo) por el texto Loading...
    |  se arregla quitando el texto, lo deje porque así está en el curso
    |   *El problema se puede ver al comentar text-indent: -9999em;
    |   *En resources\assets\js\components\PokemonsComponent.vue cambiar en mounted: this.loading = true; para ver el spinner
    |   *La solución es quitar el texto Loading...
    | --------------------
*/