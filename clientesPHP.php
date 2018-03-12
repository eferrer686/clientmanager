<?php
include 'sqlPHP.php';
include 'guiPHP.php';

if(isset($_POST['search'])){
    searchClientes();
}

if(isset($_POST['add'])){
    addCliente();
}
function addCliente(){
    header("Location: /clientmanager/agregarCliente.php");
}
function searchClientes(){
    global $searchText;
    $_SESSION['searchText'] = $_POST['searchText'];
    $_SESSION['searchMethod'] = $_POST['searchMethod'];
    header("Location: /clientmanager/clientes.php");
}
?>
