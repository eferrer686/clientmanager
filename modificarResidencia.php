<?php
    include 'modificarResidenciaPHP.php';
?>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <head>

    </head>

    <body>
        
         
        <?php sideNavBar(); ?>
          

        <div id="main" class="main">
            <table class="titleTable">
                <tr class="trTitleTable"><td>
                    <td><h1 class="titlePage">Residencia</h1></td>
                    <td class="infoCliente"></td>
                </tr>
            </table>
               
        <form method="post" action="modificarResidencia.php">
            <table class="tablaModificarResidencia">
                    <tr>
                        <th>
                            <p>Calle:</p>    
                        </th>
                        <th>
                                <input type="text" name="calle" value="<?php printCalleResidencia();?>">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <p>Numero Interior:</p>    
                        </th>
                        <th>
                                <input type="text" name="numeroInterior" value="<?php printNumeroInteriorResidencia();?>">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <p>Numero Exterior:</p>    
                        </th>
                        <th>
                                <input type="text" name="numeroExterior" value="<?php printNumeroExteriorResidencia();?>">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <p>Colonia:</p>  
                        </th>
                        <th>
                                <input type="text" name="colonia" value="<?php printColonia();?>">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <p>Pais:</p>    
                        </th>
                        <th>

                                <input type="text" name="pais" value="<?php printPais();?>">
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <p>Especificaciones:</p>    
                        </th>
                        <th>

                                <input type="text" name="especificaciones" value="<?php printEspecificacionesResidencia();?>">
                        </th>
                    </tr>
                    <tr>
                        <td></td>

                        <td>
                            <input type="submit" value="Agregar Nuevo" name="agregarResidencia">
                            <input type="submit" value="Actualizar" name="modificarResidencia">
                            <input type="submit" value="Eliminar" name="eliminarResidencia">
                            <a class="titlePage" href="modificarCliente.php"><h1 class="return">&#8592 Regresar</h1></a>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </body>
    

    
</html>