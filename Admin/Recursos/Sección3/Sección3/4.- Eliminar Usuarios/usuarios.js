

//Borrar Usuarios
$(".TB").on("click", ".BorrarU", function(){

	var Uid = $(this).attr("Uid");
	var Ufoto = $(this).attr("Ufoto");

	window.location = "index.php?url=usuarios&Uid="+Uid+"&Ufoto="+Ufoto;

})