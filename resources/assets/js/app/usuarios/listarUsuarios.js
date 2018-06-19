/**
 * ============================================================================
 * @fileoverview Carga el datatables para listar los usuarios.
 *
 * @version       1.0
 *
 * @author        Daniel Martinez Sierra <headcruser@gmail.com>
 * @copyright     Aranza y Cervantes
 * ============================================================================
 */

$(document).ready(() => {
  cargarUsuarios();
});


/**
 * Carga una lista de elementos en el databables.
 *
 * @function cargarUsuarios
 * @return {null}
 */
function cargarUsuarios() {

  let table = $('#tb_usuarios').DataTable({
    "language": {
      lengthMenu: "Mostrar _MENU_ registros por página",
      zeroRecords: "No se encontraron resultados en su busqueda",
      info: "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
      infoEmpty: "No existen registros",
      infoFiltered: "(filtrado de un total de _MAX_ registros)",
      search: "Buscar",
      paginate: {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }
  });
}
