<?php
    include 'script.php';
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
                <h1>Clientes</h1>

                <form action="clientes.php" method="post">    
                    <input type="text" value="Search" name="search">
                    <input type="submit" value="Buscar" name="search">
                </form>
            </div>
            
            <div class="searchTable">
                <?php       ?>
            </div>
        </div>


    </body>
    

    
</html>