
// funcion para obtener registros por ajax
$(".TablaUsuario").on("click", ".EditRegistroUsuario", function() {
    let codValor = $(this).attr("codValor");

    let datos = new FormData();

    datos.append("id", codValor);

    $.ajax({
        method: "POST",
        url: "Ajax/usuarioA.php",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (response) {
            $("#idEdit").val(response["id"]);
            $("#usuarioEdit").val(response["usuario"]);
            $("#claveEdit").val(response["clave"]);
            $("#rolEdit").html(response["catRolesDescripcion"]);
            $("#rolEdit").val(response["rolid"]);
            $("#fotoActual").val(response["foto"]);

            if (response["foto"] != "") {
                $(".visor").attr("src",response["foto"]);
            }else{
                $(".visor").attr("src","vista/img/usuario/defecto.png")
            }
        }
    });
})

// funcion para desactivar registro por GET
$(".TablaUsuario").on("click", ".DesactivarRegistroUsuario", function() {
    let codValor = $(this).attr("codValor");
    window.location = "index.php?ruta=catusuarios&CodValor="+codValor;
    console.log("valor en js " + codValor);
})