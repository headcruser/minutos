/**
 * ============================================================================
 * @fileoverview Carga las reuniones disponibles del sistema.
 *
 * @version       1.0
 *
 * @author        Daniel Martinez Sierra <headcruser@gmail.com>
 * @copyright     Aranza y Cervantes
 * ============================================================================
 */

 cargarReuniones();

/**
 * Carga una lista de elementos en el databables.
 *
 * @function cargarReuniones
 * @return {null}
 */
function cargarReuniones()
{
  let table = $('#tb_reuniones').DataTable({
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
