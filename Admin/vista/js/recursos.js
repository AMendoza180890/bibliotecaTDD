$(".TablaRecursos").on("click", ".EditRegistroRecurso", function () {
  let codigoRecurso = $(this).attr("codValor");
  let datosRecurso = new FormData();

  datosRecurso.append("idRecurso", codigoRecurso);


  let xhr = new XMLHttpRequest();
    xhr.open("POST", "Ajax/recursosA.php");
    xhr.onload = () => {
        if (xhr.status != 200) { // analiza el estado HTTP de la respuesta
            alert(`Error ${xhr.status}: ${xhr.statusText}`); // ej. 404: No encontrado
        } else { // muestra el resultado
            let obtenerRecursos = JSON.parse(xhr.response);
            $("#idEdit").val(obtenerRecursos["id"]);
            $("#titulosEdit").val(obtenerRecursos["titulo"]);
            $("#detallesEdit").val(obtenerRecursos["descripcion"]);
            $("#autorEdit").val(obtenerRecursos["autor"]);
            $("#recursoActual").val(obtenerRecursos["ruta"]);
            $("#eleccionTipo").val(obtenerRecursos["tipo"]);
            $("#eleccionTipo").html(obtenerRecursos["tipo"]);
            $("#resumenEditado").val(obtenerRecursos["resumen"]);
        }
     };

    xhr.send(datosRecurso);

    
     let xhrEtiqueta = new XMLHttpRequest();
     xhrEtiqueta.open("POST", "Ajax/EtiquetaA.php");
     xhrEtiqueta.onload = () => {
         if (xhrEtiqueta.status != 200) { // analiza el estado HTTP de la respuesta
             alert(`Error ${xhrEtiqueta.status}: ${xhrEtiqueta.statusText}`); // ej. 404: No encontrado
         } else { // muestra el resultado
            let obtenerValorEtiquetas = JSON.parse(xhrEtiqueta.response);
             for (let i = 0; i <= Object.keys(obtenerValorEtiquetas).length; i++) {
               $("#eleccion" + i).val(obtenerValorEtiquetas[i]["etiquetaId"]);
               $("#eleccion" + i).html(obtenerValorEtiquetas[i]["etiquetaDescripcion"]);
             }
             console.log(obtenerValorEtiquetas);
         }
      };
      xhrEtiqueta.send(datosRecurso);
});
  // $.ajax({
  //   method: "POST",
  //   url: "Ajax/recursosA.php",
  //   data: datosRecurso,
  //   cache: false,
  //   contentType: false,
  //   processData: false,
  //   dataType: "json",
  //   success: function (response) {
  //     $("#idEdit").val(response["id"]);
  //     $("#titulosEdit").val(response["titulo"]);
  //     $("#detallesEdit").val(response["descripcion"]);
  //     $("#autorEdit").val(response["autor"]);
  //     $("#recursoActual").val(response["ruta"]);
  //     $("#eleccionTipo").val(response["tipo"]);
  //     $("#eleccionTipo").html(response["tipo"]);
  //     $("#resumenEditado").val(response["resumen"]);
  //     console.log(response);
  //   },
  // });


//   $.ajax({
//     method: "POST",
//     url: "Ajax/EtiquetaA.php",
//     data: datosRecurso,
//     cache: false,
//     contentType: false,
//     processData: false,
//     dataType: "json",
//     success: function (response) {
//       console.log(response);
//       for (let i = 0; i <= Object.keys(response).length; i++) {
//         $("#eleccion" + i).val(response[i]["etiquetaId"]);
//         $("#eleccion" + i).html(response[i]["etiquetaDescripcion"]);
//       }
//     },
//   });
// });

//proceso para poder revisar documentos ante virus, para poder almacenarlos.
// const options = {
//   method: 'POST',
//   headers: {
//     accept: 'application/json',
//     'x-apikey': '231c1810edd3c20173029964fb79ab84c2c0a37cd03495a6ff6122bef36fab58'
//   }
// };

// options.body = form;
// fetch('https://www.virustotal.com/api/v3/files', options)
//   .then(response => response.json())
//   .then(response => console.log(response))
//   .catch(err => console.error(err));


// Proceso para agregar nuevas cajas y seleccionar otras etiquetas
// document.getElementById("addTag").addEventListener("click", () => {
//   let contenedor = document.getElementById("tagFormGroup");
//   let segundoElemento = document.getElementById("nuevoElemento");
//   let elementoDuplicar = document.getElementById("tagResource");
//   contenedor.insertBefore(segundoElemento, elementoDuplicar)

//   console.log(contenedor, elementoDuplicar );