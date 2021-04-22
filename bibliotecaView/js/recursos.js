$(".tbl").on("click", ".btnVer", function () {
  let codigoRecurso = $(this).attr("id");
  let frmRecurso = new FormData();

  frmRecurso.append("codRecurso", codigoRecurso);

  $.ajax({
    method: "POST",
    url: "Ajax/recursosA.php",
    data: frmRecurso,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (response) {
      $("#tituloVer").val(response[0]["titulo"]);
      $("#detalleVer").val(response[0]["descripcion"]);
      $("#autorVer").val(response[0]["autor"]);
      $("#tipoVer").val(response[0]["tipo"]);
      $("#resumenVer").val(response[0]["resumen"]);
      console.log(response);
      debugger;
    },
  });
});
