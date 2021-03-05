
// funcion para obtener registros por ajax
$(".TablaUsuario").on("click", ".EditRegistroUsuario", function() {
    alert("hola, este es el evento de jquery");
})

// funcion para desactivar registro por GET
$(".TablaUsuario").on("click", ".DesactivarRegistroUsuario", function() {
    var codValor = $(this).attr("codValor");
    window.location = "index.php?ruta=catusuarios&CodValor="+codValor;

})