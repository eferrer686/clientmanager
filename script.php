<?php

$servername = "localhost";
$username = "clientmanager";
$password = "5513876161*";
$dbname = "smcmanager";
$user = '';
$pwd = '';
$clienteSrchText='';
$clienteSrchMethod='nombre';

//Logout method
if(isset($_POST['logout'])){
    logout();
}
//Session for user
if (isset($_SESSION['user']) and isset($_SESSION['user'])){
    login();
    if($_SESSION['login']==false){
        loginError();
    }
    
}
else{
     loginError();
}

function loginError(){
    echo 'alert("Favor de iniciar sesion")';
   logout();
}
//Test DBB
function testDB(){
    
    global $servername,$username,$password,$dbname,$user,$pwd;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo '<p>DB funcionando</p>' ;
    }
}


//Set global variable for user and pwd
function setUser(){
    global $user,$pwd;    
    $user = $_POST['user'];
    $pwd = $_POST['pwd']; 
}
    
    mysqli_close($conn);
 }
function logout(){
    $user = '';
    $pwd = '';
    session_destroy();
    header("Location: /clientmanager/index.php");
    exit();
    
}


function getUserName(){
    session_start();
    echo $_SESSION['nombre'];
}

//Pagina de clientes


?> 