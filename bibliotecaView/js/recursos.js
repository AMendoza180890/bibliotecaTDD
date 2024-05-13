$(".tbl").on("click", ".btnVer", function () {
  let codigoRecurso = $(this).attr("id");
  let frmRecurso = new FormData();

  frmRecurso.append("codRecurso", codigoRecurso);
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "Ajax/recursosA.php", FALSE);
  xhr.send(frmRecurso);
  xhr.onload = function(response) {
        if (xhr.status != 200) { // analiza el estado HTTP de la respuesta
            alert(`Error ${xhr.status}: ${xhr.statusText}`); // ej. 404: No encontrado
        } else { // muestra el resultado
          $("#tituloVer").val(response["titulo"]);
          $("#detalleVer").val(response["descripcion"]);
          $("#autorVer").val(response["autor"]);
          $("#tipoVer").val(response["tipo"]);
          $("#resumenVer").val(response["resumen"]);
          $("#nombreVer").val(response["nombre"]);
          console.log(response);
        }
     };

  // $.ajax({
  //   method: "POST",
  //   url: "Ajax/recursosA.php",
  //   data: frmRecurso,
  //   cache: false,
  //   contentType: false,
  //   processData: false,
  //   dataType: "json",
  //   success: function (response) {
  //     $("#tituloVer").val(response[0]["titulo"]);
  //     $("#detalleVer").val(response[0]["descripcion"]);
  //     $("#autorVer").val(response[0]["autor"]);
  //     $("#tipoVer").val(response[0]["tipo"]);
  //     $("#resumenVer").val(response[0]["resumen"]);
  //     $("#nombreVer").val(response[0]["nombre"]);
  //     console.log(response);
  //   },
  // });
});
