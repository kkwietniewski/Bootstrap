<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="../style/style.css" />
  </head>
  <body>
  <?php
    require_once "../scripts/getNavbar.php";
  ?>
    <div class="wrapper fadInDown">
      <div id="formContent">
        <form action="" method="post">
          <div class="fadeIn first">
            <img src="../images/logomin200x200.png" alt="Computer Shop" />
          </div>
          <div class="fadeIn second">
            <?php
            require_once "../scripts/register.php";
            ?>
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
            <div class="col-sm-12 col-md-6 col-lg-6 p-4">
              <a class="underlineHover" href="./odzyskajHaslo.php"
                >Odzyskaj hasło</a
              >
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 p-4">
              <a class="underlineHover" href="./logowanie.php">Zaloguj sie</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../scripts/script.js"></script>
  </body>
</html>
