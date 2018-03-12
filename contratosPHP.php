<?php
    include 'sqlPHP.php';
    include 'guiPHP.php';

if(isset($_POST['search'])){
    searchContratos();
}

if(isset($_POST['add'])){
    addContratos();
}
function addCliente(){
    header("Location: /clientmanager/agregarContrato.php");
}
function searchContratos(){
    global $searchText;
    $_SESSION['searchText'] = $_POST['searchText'];
    $_SESSION['searchMethod'] = $_POST['searchMethod'];
    header("Location: /clientmanager/contratos.php");
}

?>