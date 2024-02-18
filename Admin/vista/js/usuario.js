
// funcion para obtener registros por ajax
$(".TablaUsuario").on("click", ".EditRegistroUsuario", function() {
    let codValor = $(this).attr("codValor");
    let datos = new FormData();
    datos.append("id", codValor);


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "Ajax/usuarioA.php", FALSE);
    xhr.send();
    xhr.onload = function(response) {
        if (xhr.status != 200) { // analiza el estado HTTP de la respuesta
            alert(`Error ${xhr.status}: ${xhr.statusText}`); // ej. 404: No encontrado
        } else { // muestra el resultado
            $("#idEdit").val(response["id"]);
            $("#usuarioEdit").val(response["usuario"]);
            $("#claveEdit").val(response["clave"]);
            $("#emailEdit").val(response["email"]);
            $("#organizacionEdit").val(response["organizacion"]);
            $("#cargoEdit").val(response["cargo"]);
            $("#telefonoEdit").val(response["telefono"]);
            $("#rolEdit").html(response["catRolesDescripcion"]);
            $("#rolEdit").val(response["rolid"]);
            $("#fotoActual").val(response["foto"]);

            if (response["foto"] != "") {
                $(".visor").attr("src",response["foto"]);
            }else{
                $(".visor").attr("src","vista/img/usuario/defecto.png")
            }
        }
     };


    // $.ajax({
    //     method: "POST",
    //     url: "Ajax/usuarioA.php",
    //     data: datos,
    //     cache: false,
    //     contentType: false,
    //     processData: false,
    //     dataType: "json",
    //     success: function (response) {
    //         $("#idEdit").val(response["id"]);
    //         $("#usuarioEdit").val(response["usuario"]);
    //         $("#claveEdit").val(response["clave"]);
    //         $("#emailEdit").val(response["email"]);
    //         $("#organizacionEdit").val(response["organizacion"]);
    //         $("#cargoEdit").val(response["cargo"]);
    //         $("#telefonoEdit").val(response["telefono"]);
    //         $("#rolEdit").html(response["catRolesDescripcion"]);
    //         $("#rolEdit").val(response["rolid"]);
    //         $("#fotoActual").val(response["foto"]);

    //         if (response["foto"] != "") {
    //             $(".visor").attr("src",response["foto"]);
    //         }else{
    //             $(".visor").attr("src","vista/img/usuario/defecto.png")
    //         }
    //     }
    // });
})

// funcion para desactivar registro por GET
$(".TablaUsuario").on("click", ".DesactivarRegistroUsuario", function() {
    let codValor = $(this).attr("codValor");
    window.location = "index.php?ruta=catusuarios&CodValor="+codValor;
    console.log("valor en js " + codValor);
})