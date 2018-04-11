<?php
include 'sqlPHP.php';
include 'guiPHP.php';

$idCliente = '';
$nombreCliente = '';
$estadoCivil = '';
$edad = '';
$fNacimiento= '';
$potencial = '';
$genero = '';
$visita = '';


if(isset($_POST['search'])){
    searchClientes();
}
if(isset($_POST['add'])){
    addCliente();
}
if(isset($_POST['idPersona'])){
    modCliente();
}
if(isset($_POST['modificarClienteButton'])){
    updateAllCliente();
}

function addCliente(){
    $_SESSION['idPersona']='n';
    header("Location: /clientmanager/modificarCliente.php");
}
function modCliente(){
    $_SESSION['idPersona']=$_POST['idPersona'];
    header("Location: /clientmanager/modificarCliente.php");
}
function searchClientes(){
    global $searchText;
    $_SESSION['searchText'] = $_POST['searchText'];
    $_SESSION['searchMethod'] = $_POST['searchMethod'];
    header("Location: /clientmanager/clientes.php");
}
function searchClienteByID(){
    global $servername, $username, $password, $dbname, $user, $pwd, $searchMethod, $searchText, $sqlFrom, $result,$con,$row,
    
    $idCliente,
    $nombreCliente,
    $estadoCivil,
    $edad,
    $fNacimiento,
    $potencial,
    $genero,
    $visita;
    
    $sqlFrom = 'personas';
    $searchMethod = 'idPersona';
    $searchText = $_SESSION['idPersona'];
    
    sqlSearch();
    
    if($result != null){
        while($row = mysqli_fetch_array($result))
          {
            $idCliente = $row['idPersona'];
            $nombreCliente = $row['nombre'];
            $estadoCivil = $row['estadoCivil'];
            $edad = $row['edad'];
            $fNacimiento= $row['fNacimiento'];
            $potencial = $row['potencial'];
            $genero = $row['genero'];
            $visita = $row['visita'];
          }
        
    } else{
        unset($_SESSION['searchMethod']);
    }
    
    
}
function printNombreCliente(){
    searchClienteByID();
    global $nombreCliente; 
    echo $nombreCliente;
}

function printEstadoCivil(){
    searchClienteByID();
    global $estadoCivil; 
    echo $estadoCivil;
}
function printEdad(){
    searchClienteByID();
    global $edad; 
    echo $edad;
}
function printfNacimiento(){
    searchClienteByID();
    global $fNacimiento; 
    echo $fNacimiento;
}
function printPotencial(){
    searchClienteByID();
    global $potencial; 
    echo $potencial;
}
function printGenero(){
    searchClienteByID();
    global $genero; 
    echo $genero;
}
function printVisita(){
    searchClienteByID();
    global $visita; 
    echo $visita;
}
function updateAllCliente(){
    global
    $idCliente,
    $nombreCliente,
    $estadoCivil,
    $edad,
    $fNacimiento,
    $potencial,
    $genero,
    $visita;
    
    $nombreCliente=$_POST['nombre'];
    $estadoCivil=$_POST['estadoCivil'];
    $edad=$_POST['edad'];
    $fNacimiento=$_POST['fNacimiento'];
    $potencial=$_POST['potencial'];
    $genero=$_POST['genero'];
    $visita=$_POST['visita'];
    
    updateNombre();
    updateEstadoCivil();
    updateEdad();
    updatefNacimiento();
    updatePotencial();
    updateGenero();
    updateVisita();
}

function updateNombre(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple;
    global $nombreCliente, $idCliente, $tableID;
    $tableID= 'idPersona';
    $idTuple= $_SESSION['idPersona'];
    $sqlFrom= 'persona';
    
    $updateName= 'nombre';
    $updateValue= $nombreCliente;
    
    sqlUpdate();
}
function updateEstadoCivil(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple;
    global $estadoCivil, $idCliente, $tableID;
    $tableID= 'idPersona';
    $idTuple= $_SESSION['idPersona'];
    $sqlFrom= 'persona';
    
    $updateName= 'estadoCivil';
    $updateValue= $estadoCivil;
    
    sqlUpdate();
}
function updateEdad(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple;
    global $edad, $idCliente, $tableID;
    $tableID= 'idPersona';
    $idTuple= $_SESSION['idPersona'];
    $sqlFrom= 'persona';
    
    $updateName= 'edad';
    $updateValue= $edad;
    
    sqlUpdate();
}
function updatefNacimiento(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple;
    global $fNacimiento, $idCliente, $tableID;
    $tableID= 'idPersona';
    $idTuple= $_SESSION['idPersona'];
    $sqlFrom= 'persona';
    
    $updateName= 'fNacimiento';
    $updateValue= $fNacimiento;
    
    sqlUpdate();
}
function updatePotencial(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple;
    global $potencial, $idCliente, $tableID;
    $tableID= 'idPersona';
    $idTuple= $_SESSION['idPersona'];
    $sqlFrom= 'persona';
    
    $updateName= 'potencial';
    $updateValue= $potencial;
    
    sqlUpdate();
}
function updateGenero(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple;
    global $genero, $idCliente, $tableID;
    $tableID= 'idPersona';
    $idTuple= $_SESSION['idPersona'];
    $sqlFrom= 'persona';
    
    $updateName= 'genero';
    $updateValue= $genero;
    
    sqlUpdate();
}

function updateVisita(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple;
    global $visita, $idCliente, $tableID;
    $tableID= 'idPersona';
    $idTuple= $_SESSION['idPersona'];
    $sqlFrom= 'persona';
    
    $updateName= 'visita';
    $updateValue= $visita;
    
    sqlUpdate();
}

function relacionesCliente(){
    global $servername, $username, $password, $dbname, $user, $pwd, $searchMethod, $searchText, $sqlFrom, $result,$con,$row,
    
    $idCliente;
    
    $sqlFrom = 'relaciones';
    $searchMethod = 'idPersona';
    $searchText = $idCliente;
    
    echo '<table class="sqlTable">';
    echo      
        "<tr class='trTableTop'><td>Nombre
        </td><td>Relación
        </td></tr>    
         "; 
    
    sqlSearch(); //Query into $Result variable
    
    if($result != null){
        while($row = mysqli_fetch_array($result))
          {
            echo      
             "<tr class='trTable'><td>" . $row['Relativo'] . 
             "</td><td>" . $row['tipo'] .
             "</td></tr> ";  //$row['index'] the index here is a field name 

          }
    }
    else{
        unset($_SESSION['searchMethod']);
    }
    echo"</table>";
    
}
function residenciasCliente(){
    global $servername, $username, $password, $dbname, $user, $pwd, $searchMethod, $searchText, $sqlFrom, $result,$con,$row,
    
    $idCliente;
    
    $sqlFrom = 'residencias';
    $searchMethod = 'idPersona';
    $searchText = $idCliente;
    
    echo '<table class="sqlTable">';
    echo      
        "<tr class='trTableTop'><td>Calle
        </td><td>Interior
        </td><td>Exterior
        </td><td>Colonia
        </td><td>Pais
        </td><td>Especificaciones
        </td></tr>    
         "; 
    
    sqlSearch(); //Query into $Result variable
    
    if($result != null){
        while($row = mysqli_fetch_array($result))
          {
            echo      
             "<tr class='trTable'><td>" . $row['calle'] .
                "</td><td>" . $row['numeroInterior'] .
                "</td><td>" . $row['numeroExterior'] .
                "</td><td>" . $row['colonia'] .
                "</td><td>" . $row['pais'] .
                "</td><td>" . $row['especificaciones'] .
             "</td></tr> ";  //$row['index'] the index here is a field name 

          }
    }
    else{
        unset($_SESSION['searchMethod']);
    }
    echo"</table>";
    
}


?>
