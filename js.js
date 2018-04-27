$(document).ready(function() {
    $(".trTableClientes").click(function(){
       var idPersona = $(this).find(".idPersona").text();
        $("#trFormHiddenID").val(idPersona);
        $("#trFormHidden").submit();
     });

    $(".trTableResidencias").click(function(){
       var idResidencia = $(this).find(".idResidencia").text();
        $("#trFormHiddenResidenciasID").val(idResidencia);
        $("#trFormHiddenResidencias").submit();
     });
    $(".trTableRelaciones").click(function(){
       var idRelativo = $(this).find(".idRelativo").text();
        $("#trFormHiddenRelativo").val(idRelativo);
        $("#trFormHiddenClientes").submit();
     });
});

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("sidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
} 


