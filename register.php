<?php
    include 'registerPHP.php';
?>
<html class="registerHTML">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <head>

    </head>

    <body>          

       
        <div class="registerForm">
            <h1>Bienvenido</h1>
            <form action="register.php" method="post">
                <table style="width:30%" class="registerTable">
                    <tr>
                        <th><p>Nombre</p></th>
                        <th><input type="text" name="nombre"><br></th>
                    </tr>
                    <tr>
                        <th><p>Apellido</p></th>
                        <th><input type="text" name="apellido"><br></th>
                    </tr>
                    <tr>
                        <th><p>Usuario</p></th>
                        <th><input type="text" name="user"><br></th>
                    </tr>
                    <tr>
                        <th><p>Contraseña</p></th>
                        <th><input type="password" name="pwd"><br></th>
                    </tr>
                    <tr>
                        <th><p>E-mail</p></th>
                        <th><input type="text" name="email"><br></th>
                    </tr>
                    <tr>
                        <th><input type="checkbox" name="leido"></th>
                        <th><p>He leído y aceptado los terminos y condiciones</p><br></th>
                    </tr>

                    <tr><th></th><th><input type="submit" value="¡Registrame!" name="register" class="registroButton"></th></tr>
                </table>
            </form>
        </div>

    </body>
    

    
</html>