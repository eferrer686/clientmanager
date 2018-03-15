$(document).ready(function() {
    $(".trTable").click(function(){
       var id = $(this).find(".idPersona").text();
        $("#trFormHiddenID").val(id);
        $("#trFormHidden").submit();
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


