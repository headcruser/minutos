/**
 * ============================================================================
 * @fileoverview Se encarga de manejar todas las operaciones para las reuniones
 *
 * @version       1.0
 *
 * @author        Daniel Martinez Sierra <headcruser@gmail.com>
 * @copyright     Aranza y Cervantes
 * ============================================================================
 */


$(document).ready( () => {
  form_theme()
  loadThemes()
  btnListarAccionesDisabled(true)
  changeSelected()
})

/**
 * Theme select change event
 */
function changeSelected(){
  $("#temaSelect").change(() => {
    loadTableActions()
    btnListarAccionesDisabled(false);
  });
}
/**
 * Insert data Ajax
*/
function form_theme(){
  $("#btn_tema").click((event) => {
    event.preventDefault()

    var formulario = $("#__formTema")
    var route = formulario.attr("action")

    $.ajax({
      url: route,
      type: 'POST',
      data: formulario.serialize(),
      dataType: 'json',
      success: (data) => {
        formulario[0].reset();
        loadTableThemes()
        loadComboTheme()
        $('#success').modal('show')
      },
      error: (data) => {
        $.each(data.responseJSON.errors, function (i, item) {
          console.log(item)
        })
        console.log(data)
      }
    })
  })
}
/**
 * Disable or enable button Listar Acciones
 */
function btnListarAccionesDisabled(status){
  $('#btn-listar-acciones').attr("disabled", status);
  if(status) {
      $('#btn-listar-acciones').hide()
  }else{
      $('#btn-listar-acciones').show('slow')
  }
}

/**
 * Read Themes from database
 */
function loadThemes() {
  var route = $("#url_table_themes").val()
  $.get(route, (response) => {
    renderComboTheme(response)
    renderTableThemes(response)
  })
}

/**
 * Render Table themes
 * @param {*} response
 */
function renderTableThemes(response)
{
  let tablaTemas = $("#datosTemas");
  tablaTemas.empty()
  let html =``
  $(response).each((key, value) => {
    html += `<tr>`
    html += `<td>${value.tema}</td>`
    html += `<td>${value.tiempo}</td>`
    html += `<td>${value.debate}</td>`
    html += `</tr>`
  })
  tablaTemas.append(html)
}

/**
 * Render Combo Theme
 * @param {*} response
 */
function renderComboTheme(response)
{
  var select = $("#temaSelect");

  select.empty()
  let html = `<option value='0'> Selecciona un tema </option>`

  $(response).each((key, value) => {
          html += `<option value='${value.id}'> ${value.tema} </option>`
  })
  select.append(html)
}

/**
* render Items for table themes
*
* @return void
*/
function loadTableActions() {
  var tablaTemas = $("#datosAcciones");
  var opcion_seleccionada = $("#temaSelect option:selected")
  var route = window.location.origin + '/acciones/' + opcion_seleccionada.val()

  tablaTemas.empty()
  $.get(route, (response) => {
    let html =``
    $(response).each((key, value) => {
      html += `<tr>`
      html += `<td> ${value.elementos}</td>`
      html += `<td> ${value.responsable}</td>`
      html += `<td> ${value.plazo}</td>`
      html += `</tr>`
    })
    tablaTemas.append(html)
  })
}
