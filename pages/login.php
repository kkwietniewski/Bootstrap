<?php
  session_start();
    require_once "../scripts/register.php";
    if (isset($_SESSION['logged']))
    {
      header ('Location: ./index.php') ;
      
    } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href="../style/style.css">
      <link rel="icon" sizes="16x16" type="image/png" href="../images/favicon-16x16.png" />
  </head>
  <body>
  <?php
    require_once "../scripts/getNavbar.php";
  ?>
    <div class="container-fluid">
      <div class="wrapper fadeInDown">
        <div id="formContent">
          <form action="../scripts/log.php" method="post">
            <div class="fadeIn first">
              <img src="../images/logomin200x200.png" alt="Computer Shop" />
            </div>
            <div class="fadeIn second">
              <?php
            if (isset($_SESSION['error']))
              {
                  echo $_SESSION['error']; 
              }
              unset($_SESSION['error']);

              if (isset($_SESSION['registered']))
              {
                echo $_SESSION['registered']; 
                unset($_SESSION['registered']); 
              }
              ?>
              <input class="regInp" type="text" name="login" placeholder="Podaj login" />
            </div>
            <div>
              <input
                class="regInp fadeIn fourth"
                type="password"
                placeholder="Podaj hasło"
                name="pass"
              />
            </div>
            <div>
            <button type="submit" class="regBtn fadeIn sixth" name="register">
              Zaloguj się
            </button>
          </form>
          <div id="formFooter">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 p-4">
                <a class="underlineHover" href="./registration.php">Zarejestuj się</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        require_once '../scripts/getFooter.php';
    ?>
      <script src="../scripts/script.js"></script>
  </body>
</html>