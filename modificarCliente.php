<?php
    include 'clientesPHP.php';
?>
<html class="cliente">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <head>
    </head>

    <body>
        <?php sideNavBar(); ?>
        <?php searchClienteByID(); ?>
        <div id="main" class="main">
            <h1>Clientes</h1>
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
                            <input type="submit" value="Modificar" name="modResidenciasCliente">
                        </form>
                    </td>
                    <td colspan="2" class="relacionesCliente">
                        <h1 class="h1Mod">Relaciones</h1>
                        <div class="searchTable">
                            <?php    relacionesCliente();   ?>
                        </div>
                        <form action="modificarCliente.php" method="post">
                            <input type="submit" value="Modificar" name="modRealacionesCliente">
                        </form>
                    </td>
                </tr>
                <tr>
                    
                    <td colspan="4" class="contratosCliente">
                        <h1 class="h1Mod">Contratos</h1>
                        <? php tablaContratosCliente(); ?>
                        <form action="modificarCliente.php" method="post">
                            <input type="submit" value="Modificar" name="modContratosCliente">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        </div>
    </body>
    

    
</html>