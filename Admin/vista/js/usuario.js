$(".TablaUsuario").on("click", ".EditRegistroUsuario", function() {
    alert("hola, este es el evento de jquery");
})

$(".TablaUsuario").on("click", ".DesactivarRegistroUsuario", function() {
    let codigoUsuario = $(this).attr("codValor");

})