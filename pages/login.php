<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    if (isset($_SESSION['blad']))
    {
        echo $_SESSION['blad']; 
    }
    unset($_SESSION['blad']);
?>
    <form action="../scripts/log.php" method="post">
        <div>
            <div>
                Login
            </div>
            <input type="text" class="form-control" name="login">
        </div>  
          
        <div>
            <div>
                Hasło
            </div>
            <input type="password" name="pass">
        </div>

        <div>
            <button type="submit">Zaloguj się </button>
        </div>
    </form>
</body>
</html>