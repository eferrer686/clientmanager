<?php
    include 'script.php';
?>
<html class="login">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <head>

    </head>

    <body>
        
        <div class="loginForm">
            <form action="index.php" method="post">
                <table style="width:30%" class="loginTable">
                    <tr>
                        <th><p>User</p></th>
                        <th><input type="text" name="user"><br></th>
                    </tr>
                    <tr>
                        <th><p>Password</p></th>
                        <th><input type="password" name="pwd"><br></th>
                    </tr>

                    <tr><th></th><th><input type="submit" value="Login" name="login"></th></tr>
                </table>
            </form>
        </div>

    </body>
    

    
</html>