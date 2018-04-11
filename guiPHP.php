<?php

//Logout method
if(isset($_POST['logout'])){
    logout();
}
//Session for user
if (!isset($_SESSION['idUser'])){ 
    loginError();
}

function loginError(){
    echo '<script type="text/javascript">
    alert("Favor de iniciar sesion")
    location="index.php"
    </script>';
}


function logout(){
    $user = '';
    $pwd = '';
    deleteSession();
    header("Location: /clientmanager/index.php");
    exit();
    
}


//Create sideNavBar menu
function sideNavBar(){
    print '
        <title>Mea Lorem</title>
        <div id="sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="home.php">Home</a>
            <a href="clientes.php">Clientes</a>
            <a href="contratos.php">Contratos</a>
            <a href="historial.php">Historial</a>
            <a href="ayuda.php">Ayuda</a>
            <a href="perfil.php">Perfil</a>
            <form action="guiPHP.php" method="post" class="logoutForm">
                <input type="submit" value="Logout" name="logout" class="logoutButton"/>
            </form>
        </div>

        <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="menuOpenButton">&#9776;</span>
        ';
}

function deleteSession(){
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
}
?>
