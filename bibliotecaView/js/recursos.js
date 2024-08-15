$(".tbl").on("click", ".btnVer", function () {
  let codigoRecurso = $(this).attr("id");
  let frmRecurso = new FormData();

  frmRecurso.append("codRecurso", codigoRecurso);

  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'Ajax/recursosA.php', false);
  // xhr.setRequestHeader('Content-Type', 'application/json');
  
  xhr.onload = () => {
        if (xhr.status != 200) { // analiza el estado HTTP de la respuesta
            console.log(`Error ${xhr.status}: ${xhr.statusText}`); // ej. 404: No encontrado
        } else { // muestra el resultado
          //  document.getElementById("tituloVer").innerHTML = "hola";
          const datos = JSON.parse(xhr.response);
            $("#tituloVer").val(datos[0]["titulo"]);
            $("#detalleVer").val(datos[0]["descripcion"]);
            $("#autorVer").val(datos[0]["autor"]);
            $("#tipoVer").val(datos[0]["tipo"]);
            $("#resumenVer").val(datos[0]["resumen"]);
            $("#nombreVer").val(datos[0]["nombre"]);
          console.log(datos);
        }
     };
     xhr.send(frmRecurso);
});
