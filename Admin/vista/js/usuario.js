$(".TablaUsuario").on("click", ".EditRegistroUsuario", function() {
    alert("hola, este es el evento de jquery");
})

$(".TablaUsuario").on("click", ".DesactivarRegistroUsuario", function() {
    let codValor = $(this).attr("codValor");

    window.location = "index.php?ruta=catusuarios&codValor="+codValor;

})