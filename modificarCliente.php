<?php
    include 'clientesPHP.php';
?>
<html class="cliente">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <head>
    </head>

    <body>
        <?php sideNavBar(); ?>
        <?php searchClienteByID(); ?>
        <div id="main" class="main">
            <table class="titleTable">
                <tr class="trTitleTable"><td>
                    <a class="titlePage" href="clientes.php"><h1>Clientes</h1></a>
                    </td>
                </tr>
            </table>
        <div class="modificarClientes">
            <table class="modificarClientesTable">
                <tr>
                    <td rowspan="2" class="infoCliente">
                        <form action="modificarCliente.php" method="post" class="formModificarCliente">
                        <h1 class="h1Mod"><?php   printNombreCliente();    ?></h1>
                            <table class="tablaModificarCliente">
                                <tr>
                                    <th>
                                        <p>Nombre:</p>    
                                    </th>
                                    <th>
                                        <input type="text" name="nombre" value="<?php printNombreCliente();?>"> 
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Estado Civil:</p>    
                                    </th>
                                    <th>
                                        <input type="text" name="estadoCivil" value="<?php printEstadoCivil();?>"> 
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Edad:</p>    
                                    </th>
                                    <th>
                                        <input type="text" name="edad" value="<?php printEdad();?>"> 
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Fecha de Nacimiento:</p>    
                                    </th>
                                    <th>
                                        <input type="date" name="fNacimiento" value="<?php printfNacimiento();?>"> 
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Potencial:</p>    
                                    </th>
                                    <th>
                                        <input type="text" name="potencial" value="<?php printPotencial();?>"> 
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Genero:</p>    
                                    </th>
                                    <th>
                                        <input type="text" name="genero" value="<?php printGenero();?>"> 
                                    </th>
                                <tr>
                                    <th>
                                        <p>Visita:</p>    
                                    </th>
                                    <th>
                                        <input type="date" name="visita" value="<?php printVisita();?>"> 
                                    </th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" name="modificarClienteButton" value="Actualizar">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                    <td colspan="2" class="residenciasCliente">
                        <h1 class="h1Mod">Residencias</h1>
                        <?php residenciasCliente(); ?>
                        <form action="modificarCliente.php" method="post">
                            <input type="submit" value="Nuevo" name="addResidenciasCliente">
                        </form>
                    </td>
                    <td colspan="2" class="relacionesCliente">
                        <h1 class="h1Mod">Relaciones</h1>
                        <div class="searchTable">
                            <?php    relacionesCliente();   ?>
                        </div>
                        <form action="modificarCliente.php" method="post">
                            <input type="submit" value="Nuevo" name="addRealacionesCliente">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="contratosCliente">
                        <h1 class="h1Mod">Contratos</h1>
                        <?php contratosCliente(); ?>
                        <form action="modificarCliente.php" method="post">
                            <input type="submit" value="Nuevo" name="addContratosCliente">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
            <form id="trFormHiddenResidencias" method="post" action="modificarCliente.php">
                <input name="idResidencia" type="hidden" value="" id="trFormHiddenResidenciasID"></form>
            <form id="trFormHiddenClientes" method="post" action="modificarCliente.php">
                <input name="idRelativo" type="hidden" value="" id="trFormHiddenRelativo">
            </form>
        </div>
       
    </body>
    

    
</html>