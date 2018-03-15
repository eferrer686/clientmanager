<?php
include 'sqlPHP.php';
include 'guiPHP.php';

if(isset($_POST['search'])){
    searchClientes();
}
if(isset($_POST['add'])){
    addCliente();
}
if(isset($_POST['idPersona'])){
    addCliente();
}

function addCliente(){
    header("Location: /clientmanager/modificarCliente.php");
}
function searchClientes(){
    global $searchText;
    $_SESSION['searchText'] = $_POST['searchText'];
    $_SESSION['searchMethod'] = $_POST['searchMethod'];
    header("Location: /clientmanager/clientes.php");
}
?>
