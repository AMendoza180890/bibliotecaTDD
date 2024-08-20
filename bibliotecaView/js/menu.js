// $("#menuOpciones li a").on("click", function () {
//   $("li a.activo").removeClass("activo");
//   $(this).addClass("activo");
// });

let btnSearch = document.getElementById("btn-search");

if (btnSearch){
  btnSearch.addEventListener("click", function () {
    window.location = "buscar";
  });
}