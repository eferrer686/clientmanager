<?php
include 'sqlPHP.php';
include 'guiPHP.php';

$idResidencia='';
$calle='';
$numeroInt='';
$numeroExt='';
$colonia='';
$pais='';
$especificaciones='';

if(isset($_POST['agregarResidencia'])){
    addResidencia();
}
if(isset($_POST['modificarResidencia'])){
    modificarResidencia();
}
if(isset($_POST['eliminarResidencia'])){
    eliminarResidencia();
}

function printCalleResidencia(){
    searchResidenciaByID();
    global $calle; 
    echo $calle;
}
function printNumeroInteriorResidencia(){
    searchResidenciaByID();
    global $numeroInt; 
    echo $numeroInt;
}
function printNumeroExteriorResidencia(){
    searchResidenciaByID();
    global $numeroExt; 
    echo $numeroExt;
}
function printColonia(){
    searchResidenciaByID();
    global $colonia; 
    echo $colonia;
}
function printPais(){
    searchResidenciaByID();
    global $pais; 
    echo $pais;
}
function printEspecificacionesResidencia(){
    searchResidenciaByID();
    global $especificaciones; 
    echo $especificaciones;
}
function searchResidenciaByID(){
    global $servername, $username, $password, $dbname, $user, $pwd, $searchMethod, $searchText, $sqlFrom, $result,$con,$row,
    
    $idResidencia,
    $calle,
    $numeroInt,
    $numeroExt,
    $colonia,
    $pais,
    $especificaciones;
    
    $sqlFrom = 'residencias';
    $searchMethod = 'idResidencia';
    $searchText = "".$_SESSION['idResidencia'] ."%' and idPersona like'". $_SESSION['idPersona'];
    
    sqlSearch();
    
    if($result != null){
        while($row = mysqli_fetch_array($result))
          {
            $idResidencia = $row['idResidencia'];
            $calle = $row['calle'];
            $numeroInt = $row['numeroInterior'];
            $numeroExt = $row['numeroExterior'];
            $colonia = $row['colonia'];
            $pais = $row['pais'];
            $especificaciones = $row['especificaciones'];
          }
        
    } else{
        unset($_SESSION['searchMethod']);
    }
    
    
}
function addResidencia(){
    global $servername, $username, $password, $dbname, $user, $pwd, $searchMethod, $searchText, $sqlFrom, $result,$con,$row,$updateName,$updateValue,$tableID,$idTuple,
    $idResidencia,
    $calle,
    $numeroInt,
    $numeroExt,
    $colonia,
    $pais,
    $especificaciones;
    
    $calle =$_POST['calle'];
    $numeroInt=$_POST['numeroInterior'];
    $numeroExt=$_POST['numeroExterior'];
    $colonia=$_POST['colonia'];
    $pais=$_POST['pais'];
    $especificaciones=$_POST['especificaciones'];
    
    $con = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    $sql = "INSERT INTO `smcmanager`.`residencia` (`calle`, `numeroInterior`, `numeroExterior`, `colonia`, `pais`, `especificaciones`) VALUES ('".$calle."', '".$numeroInt."', '".$numeroExt."', '".$colonia."', '".$pais."', '".$especificaciones."')";
    $result = mysqli_query($con,$sql);
    
    //SQLSearch para idResidencia
    $last_id = mysqli_insert_id($con);
    
    
    //Fin de SQLSearch
    $sql = "INSERT INTO `smcmanager`.`persona_has_residencia` (`Persona_idPersona`, `Residencia_idResidencia`) VALUES ('".$_SESSION['idPersona']."', '".$last_id."')";
    $result = mysqli_query($con,$sql);

}
function modificarResidencia(){
    global
    $idResidencia,
    $calle,
    $numeroInt,
    $numeroExt,
    $colonia,
    $pais,
    $especificaciones;
    
    $calle =$_POST['calle'];
    $numeroInt=$_POST['numeroInterior'];
    $numeroExt=$_POST['numeroExterior'];
    $colonia=$_POST['colonia'];
    $pais=$_POST['pais'];
    $especificaciones=$_POST['especificaciones'];
    
    updateCalle();
    updateNumeroInt();
    updateNumeroExt();
    updateColonia();
    updatePais();
    updateEspecificaciones();
}

function updateCalle(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple,$tableID,
    $idResidencia,
    $calle;
    
    $tableID= 'idResidencia';
    $idTuple= $_SESSION['idResidencia'];
    $sqlFrom= 'residencia';
    
    $updateName= 'calle';
    $updateValue= $calle;
    
    sqlUpdate();
}
function updateNumeroInt(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple,$tableID,
    $idResidencia,
    $numeroInt;
    
    $tableID= 'idResidencia';
    $idTuple= $_SESSION['idResidencia'];
    $sqlFrom= 'residencia';
    
    $updateName= 'numeroInterior';
    $updateValue= $numeroInt;
    
    sqlUpdate();
}
function updateNumeroExt(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple,$tableID,
    $idResidencia,
    $numeroExt;
    
    $tableID= 'idResidencia';
    $idTuple= $_SESSION['idResidencia'];
    $sqlFrom= 'residencia';
    
    $updateName= 'numeroExterior';
    $updateValue= $numeroExt;
    
    sqlUpdate();
}
function updateColonia(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple,$tableID,
    $idResidencia,
    $colonia;
    
    $tableID= 'idResidencia';
    $idTuple= $_SESSION['idResidencia'];
    $sqlFrom= 'residencia';
    
    $updateName= 'colonia';
    $updateValue= $colonia;
    
    sqlUpdate();
}
function updatePais(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple,$tableID,
    $idResidencia,
    $pais;
    
    $tableID= 'idResidencia';
    $idTuple= $_SESSION['idResidencia'];
    $sqlFrom= 'residencia';
    
    $updateName= 'pais';
    $updateValue= $pais;
    
    sqlUpdate();
}

function updateEspecificaciones(){
    global $sqlFrom,$updateName,$updateValue,$tableID,$idTuple,$tableID,
    $idResidencia,
    $especificaciones;
    
    $tableID= 'idResidencia';
    $idTuple= $_SESSION['idResidencia'];
    $sqlFrom= 'residencia';
    
    $updateName= 'especificaciones';
    $updateValue= $especificaciones;
    
    sqlUpdate();
}

function eliminarResidencia(){
    
    global $servername, $username, $password, $dbname, $user, $pwd, $searchMethod, $searchText, $sqlFrom, $result,$con,$row,$updateName,$updateValue,$tableID,$idTuple;
    
    $con = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    
    $sql = "DELETE FROM `smcmanager`.`persona_has_residencia` WHERE `Persona_idPersona`='". $_SESSION['idPersona'] ."' and`Residencia_idResidencia`='". $_SESSION['idResidencia'] ."'";
    $result = mysqli_query($con,$sql);


    $sql = "DELETE FROM `smcmanager`.`residencia` WHERE `idResidencia`='". $_SESSION['idResidencia'] ."'";
    $result = mysqli_query($con,$sql);   
}
?>