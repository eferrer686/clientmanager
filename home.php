<?php
    include 'script.php';
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
            <h1>Hola! <?php getUserName() ?></h1>
            <p>Historial de modificaciones</p>
            <ul>
                <p>Jerarquia    </p>
                <li>Agregar elemento objetivo</li>
                <li>Modificar/Eliminar elemento objetivo</li>
            </ul>
            
            
            
        </div>


    </body>
    

    
</html>