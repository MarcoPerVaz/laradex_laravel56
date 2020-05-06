
window.Vue = require('vue');
const bus = new Vue();

export default bus


/* Notas:
    | ------------------------------------------------------------------------------------------
    | *window.Vue = require('vue'); Incorpora Vue
    | *const bus = new Vue(); La nueva instancia de vue se guarda en la constante bus
    | *export default bus Se exporta la constante bus para poderla usar en los demás componentes
    | ------------------------------------------------------------------------------------------
*/