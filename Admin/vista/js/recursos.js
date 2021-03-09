$(".TablaRecursos").on("click",".EditRegistroRecurso",function(){
    let codigoRecurso = $(this).attr("codValor");
    let datosRecurso = new FormData();

    datosRecurso.append("idRecurso",codigoRecurso);

    $.ajax({
        method: "POST",
        url: "Ajax/recursosA.php",
        data: datosRecurso,
        cache:false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (response) {
            $("#idEdit").val(response["id"]);
            $("#titulosEdit").val(response["titulo"]);
            $("#detallesEdit").val(response["descripcion"]);
            $("#autorEdit").val(response["autor"]);
            $("#recursoActual").val(response["ruta"]);
            console.log(response);
        }
    });
})