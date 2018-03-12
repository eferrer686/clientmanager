<?php
    include 'contratosPHP.php';
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
            <div class="search">
                <table class="titleTable">
                <tr class="trTitleTable"><td>
                    <h1>Contratos</h1>
                </td>
                <td>
                    <form action="contratos.php" method="post">    
                        <input type="text" placeholder="Buscar" name="searchText" value="<?php echo $searchText; ?>">
                    <select name="searchMethod" id="searchMethod">
                        <option value="cliente">Cliente</option>
                        <option value="nombre">Contrato</option>
                        <option value="idContrato">ID Contrato</option>
                        <option value="idPersona">ID Cliente</option>
                    </select>
                        <input type="submit" value="Buscar" name="search" class="clienteSearchButton">
                    
                    </form>
                </td>
                <td class="clienteAddButton"><form action="contratos.php" method="post">
                        <input type="submit" value="Agregar" name="add" >
                    </form>
                </td>
                </tr>
                    
                </table>
            </div>
            
            <hr class="hrTitle">
            
            <div class="searchTable">
                <?php    tableContratos();   ?>
            </div>
        </div>


    </body>
    

    
</html>