<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style rel="stylesheet" href="../style/style.css"></style>
  </head>
  <body>
    <?php
require_once "../scripts/register.php";
?>
    <form action="" method="post">
      <div class="wrapper fadInDown">
        <div>
          <div>Login</div>
          <input type="text" name="login" placeholder="login" />
        </div>
        <div>
          <div>Email</div>
          <input type="text" placeholder="email" name="email" />
        </div>
        <div>
          <div>Hasło</div>
          <input type="password" placeholder="hasło" name="pass" />
        </div>
        <div class="input-group my-4">
          <div>Powtorz hasło</div>
          <input type="password" placeholder="hasło" name="validPass" />
        </div>
        <div>
          <div>
            <a href="./logowanie.php">Zaloguj sie</a>
          </div>
          <button type="submit" name="register">Zarejestruj się</button>
        </div>
      </div>
    </form>
  </body>
</html>
