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
          
        
        <div id="main" class="main">
            <div class="search">
                <table class="titleTable">
                <tr class="trTitleTable"><td>
                    <h1>Clientes</h1>
                </td>
                <td>
                    <form action="clientes.php" method="post">    
                        <input type="text" placeholder="Buscar" name="searchText" value="<?php echo $searchText; ?>">
                    <select name="searchMethod" id="searchMethod">
                        <option value="nombre">Nombre</option>
                        <option value="edad">Edad</option>
                        <option value="idPersona">ID Cliente</option>
                        <option value="genero">Genero</option>
                        <option value="potencial">Potencial</option>
                        <option value="estadoCivil">Estado Civil</option>
                    </select>
                        <input type="submit" value="Buscar" name="search" class="clienteSearchButton">
                    
                    </form>
                </td>
                <td class="clienteAddButton"s><form action="clientes.php" method="post">
                        <input type="submit" value="Agregar" name="add" >
                    </form>
                </td>
                </tr>
                    
                </table>
            </div>
            
            <hr class="hrTitle">
            
            <div class="searchTable">
                <?php    tableClientes();   ?>
            </div>
        </div>


    </body>
    

    
</html>