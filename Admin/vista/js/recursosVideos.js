$(".TablaRecursos").on("click", ".EditRegistroRecursoVideo", function() {
    let codigoRecurso = $(this).attr("codValor");
    let datosRecurso = new FormData();

    datosRecurso.append("idRecurso", codigoRecurso);

    $.ajax({
        method: "POST",
        url: "Ajax/recursosVideosA.php",
        data: datosRecurso,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            $("#idEdit").val(response["id"]);
            $("#titulosEdit").val(response["titulo"]);
            $("#detallesEdit").val(response["nombre"]);
            $("#autorEdit").val(response["autor"]);
            $("#linkEdit").val(response["link"]);
            $("#resumenEditado").val(response["descripcion"]);
            console.log(response);
        },
    });


    $.ajax({
        method: "POST",
        url: "Ajax/EtiquetaVideoA.php",
        data: datosRecurso,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            console.log(response);
            for (let i = 0; i <= Object.keys(response).length; i++) {
                $("#eleccion" + i).val(response[i]["etiquetaId"]);
                $("#eleccion" + i).html(response[i]["etiquetaDescripcion"]);
            }
        },
    });
});