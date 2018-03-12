<?php
    include 'sqlPHP.php';
    include 'guiPHP.php';

function getUserName(){
    echo $_SESSION['nombre'];
}
?>