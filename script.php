<?php

$servername = "localhost";
$username = "clientmanager";
$password = "5513876161*";
$dbname = "smcmanager";
$user = '';
$pwd = '';

//Login method for formLogin
if(isset($_POST['login'])){
    setUser();
    Login();
}
//Logout method
if(isset($_POST['logout'])){
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

function login() {
    global $servername,$username,$password,$dbname,$user,$pwd;
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM user WHERE username = '" . $user . "' and password = '" . $pwd ."'";
    $result = mysqli_query($conn, $sql);
    //Encontrar usuarios
    if (mysqli_num_rows($result) > 0) {
        
        $row = $result->fetch_assoc();        
        
        if($row["activo"]=="1"){
            session_start();
            $_SESSION['idUser'] = $row["idUser"];
            $_SESSION['nombre'] = $row["nombre"];
            header("Location: /clientmanager/home.php");
            exit();
        }      
        
        
    } 
    else{
        echo '<script language="javascript">';
        echo 'alert("Usuario o contraseña incorrecta")';
        echo '</script>';
        
    }
    
    mysqli_close($conn);
 }
function logout(){
    $user = '';
    $pwd = '';
    
    header("Location: /clientmanager/index.php");
    exit();
    
}

//Create sideNavBar menu

    function sideNavBar(){
        print '
            <div id="sidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.php">Home</a>
                <a href="clientes.php">Clientes</a>
                <a href="contratos.php">Contratos</a>
                <a href="historial.php">Historial</a>
                <a href="ayuda.php">Ayuda</a>
                <form action="script.php" method="post" class="logoutForm">
                    <input type="submit" value="Logout" name="logout" class="logoutButton"/>
                </form>
            </div>
            
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            ';
    }

function getUserName(){
    session_start();
    echo $_SESSION['nombre'];
}

//Pagina de clientes
function tableClientes(){
    
    global $servername,$username,$password,$dbname,$user,$pwd;
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM user WHERE username = '" . $user . "' and password = '" . $pwd ."'";
    $result = mysqli_query($conn, $sql);
    //Encontrar usuarios
    if (mysqli_num_rows($result) > 0) {
        
        $row = $result->fetch_assoc();        
        
        
        echo "<table>"; // start a table tag in the HTML

        while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
        echo 
            "<tr><td>" . $row['name'] . 
            "</td><td>" . $row['age'] . 
            "</td></tr>";  //$row['index'] the index here is a field name
        }

        echo "</table>";
            
    }
    mysqli_close($conn);

}

?> 