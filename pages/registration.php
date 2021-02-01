<?php
  session_start();
    if (isset($_SESSION['logged']))
    {
      header ('Location: ./index.php') ;
      
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="icon" sizes="16x16" type="image/png" href="../images/favicon-16x16.png" />
  </head>
  <body>
  <?php
      require_once "../scripts/getNavbar.php";
  ?>
    <div class="container-fluid">
      <div class="wrapper fadeInDown">
        <div id="formContent">
        <?php
          if (isset($_SESSION['err']))
          {
            echo<<<ERROR
            <div class="alert alert-danger" role="alert">
  $_SESSION[err]
</div>
ERROR;
          unset($_SESSION['err']); 
          }
        ?>
          <form action="../scripts/register.php" method="post">
            <div class="fadeIn first">
              <img src="../images/logomin200x200.png" alt="Computer Shop" />
            </div>
            <div class="fadeIn second">
              <input class="regInp" type="text" name="login" placeholder="Podaj login" />
            </div>
            <div>
              <input
                class="regInp fadeIn third"
                type="text"
                placeholder="Podaj email"
                name="email"
              />
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
              <input
                class="regInp fadeIn fifth"
                type="password"
                placeholder="Powtórz hasło"
                name="validPass"
              />
            </div>
            <button type="submit" class="regBtn fadeIn sixth" name="register">
              Zarejestruj się
            </button>
          </form>
          <div id="formFooter">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 p-4">
                <a class="underlineHover" href="./login.php">Zaloguj sie</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
        require_once '../scripts/getFooter.php';
      ?>
    </div>
    <script src="../scripts/script.js"></script>
  </body>
</html>