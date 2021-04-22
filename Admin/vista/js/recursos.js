$(".TablaRecursos").on("click", ".EditRegistroRecurso", function () {
  let codigoRecurso = $(this).attr("codValor");
  let datosRecurso = new FormData();

  datosRecurso.append("idRecurso", codigoRecurso);

  $.ajax({
    method: "POST",
    url: "Ajax/recursosA.php",
    data: datosRecurso,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (response) {
      $("#idEdit").val(response["id"]);
      $("#titulosEdit").val(response["titulo"]);
      $("#detallesEdit").val(response["descripcion"]);
      $("#autorEdit").val(response["autor"]);
      $("#recursoActual").val(response["ruta"]);
      $("#eleccionTipo").val(response["tipo"]);
      $("#eleccionTipo").html(response["tipo"]);
      $("#resumenEditado").val(response["resumen"]);
      console.log(response);
    },
  });

  $.ajax({
    method: "POST",
    url: "Ajax/EtiquetaA.php",
    data: datosRecurso,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (response) {
      console.log(response);
      for (let i = 0; i <= Object.keys(response).length; i++) {
        $("#eleccion" + i).val(response[i]["etiquetaId"]);
        $("#eleccion" + i).html(response[i]["etiquetaDescripcion"]);
      }
    },
  });
});
