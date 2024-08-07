
// funcion para obtener registros por ajax
$(".TablaUsuario").on("click", ".EditRegistroUsuario", function() {
    let codValor = $(this).attr("codValor");
    let datos = new FormData();
    datos.append("id", codValor);
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "Ajax/usuarioA.php", false);
    xhr.onload = () => {
        if (xhr.status != 200) { // analiza el estado HTTP de la respuesta
            alert(`Error ${xhr.status}: ${xhr.statusText}`); // ej. 404: No encontrado
        } else { // muestra el resultado
            const usuarioDatos = JSON.parse(xhr.response);
            $("#idEdit").val(usuarioDatos["id"]);
            $("#usuarioEdit").val(usuarioDatos["usuario"]);
            $("#claveEdit").val(usuarioDatos["clave"]);
            $("#emailEdit").val(usuarioDatos["email"]);
            $("#organizacionEdit").val(usuarioDatos["organizacion"]);
            $("#cargoEdit").val(usuarioDatos["cargo"]);
            $("#telefonoEdit").val(usuarioDatos["telefono"]);
            $("#rolEdit").html(usuarioDatos["catRolesDescripcion"]);
            $("#rolEdit").val(usuarioDatos["rolid"]);
            $("#fotoActual").val(usuarioDatos["foto"]);

                if (usuarioDatos["foto"] != "") {
                    $(".visor").attr("src",usuarioDatos["foto"]);
                }else{
                    $(".visor").attr("src","vista/img/usuario/defecto.png");
                }
            console.log(usuarioDatos);
        }
     };
     xhr.send(datos);

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
});

// funcion para desactivar registro por GET
$(".TablaUsuario").on("click", ".DesactivarRegistroUsuario", function() {
    let codValor = $(this).attr("codValor");
    window.location = "index.php?ruta=catusuarios&CodValor="+codValor;
    console.log("valor en js " + codValor);
})