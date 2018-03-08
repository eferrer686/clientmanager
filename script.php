<?php
if(array_key_exists('Login',$_POST)){
   Login();
}
function Login() {
    $servername = "localhost";
    $username = "webserveracces";
    $password = "eugenia39*/";
    $dbname = "kflow";
    
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT tipo,idusuario FROM usuario WHERE user = '" . $user . "' and password = '" . $pwd ."'";
    $result = mysqli_query($conn, $sql);
    //Encontrar usuarios
    if (mysqli_num_rows($result) > 0) {
        
        $row = $result->fetch_assoc();
        
        
        
        
        if($row["tipo"]=="admin"){
            session_start();
            $_SESSION['id'] = $row["idusuario"];
            header("Location: /kflow/admin.php");
            exit();
        }
        else if($row["tipo"]=="empleado"){
            session_start();
            $_SESSION['id'] = $row["idusuario"];
            header("Location: /kflow/empleado.php");
            exit();
        }
        else if($row["tipo"]=="usuario"){
            session_start();
            $_SESSION['id'] = $row["idusuario"];
            header("Location: /kflow/usuario.php");
            exit();
        }      
        
        
    } 
    //Encontrar clientes
    else{
        loginCliente();
    }
    
    mysqli_close($conn);
 }
//Login exclusivo de cliente
function loginCliente(){
    $servername = "localhost";
    $username = "webserveracces";
    $password = "eugenia39*/";
    $dbname = "kflow";
    
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT idcliente FROM cliente WHERE user = '" . $user . "' and password = '" . $pwd ."'";
    $result = mysqli_query($conn, $sql);
    
    //Encontrar usuarios
    if (mysqli_num_rows($result) > 0) {
        
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row["idcliente"];
        header("Location: /kflow/cliente.php");
        exit();
        
    }      
    else{
        echo "<script type='text/javascript'>alert('No se encontro usuario');</script>";
    }
    mysqli_close($conn);
    
}


    function sideNavBar(){
        print '
                <a href="index.php">Home</a>
                <a href="clientes.php">Clientes</a>
                <a href="contratos.php">Contratos</a>
                <a href="historial.php">Historial</a>
                <a href="ayuda.php">Ayuda</a>
                <a href="#Ayuda">Logout</a>';
    }
?> 