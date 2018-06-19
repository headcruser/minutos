/**
 * ============================================================================
 * @fileoverview  Carga los componentes esenciales para el proyecto.
 *
 * @version       1.0
 *
 * @author        Daniel Martinez Sierra <headcruser@gmail.com>
 * @copyright     Aranza y Cervantes
 * ============================================================================
 */


/**
 * ============================================================================
 * @fileoverview  Carga las inicializaciones de los componentes MaterializeCSS.
 *
 * @version       1.0
 *
 * @author        Julio Cesar Valle Rodríguez <jvalle@appsamx.com>
 * @copyright     APPSA México
 * ============================================================================
 */

$(document).ready(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

});

