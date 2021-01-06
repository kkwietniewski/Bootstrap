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
            <img src="../images/logo200x76.png" alt="Computer Shop" />
          </div>
          <div class="fadeIn second">
            <?php
            require_once "../scripts/register.php";
            ?>
            <input type="text" name="login" placeholder="Podaj login" />
          </div>
          <div>
            <input
              class="fadeIn third"
              type="text"
              placeholder="Podaj email"
              name="email"
            />
          </div>
          <div>
            <input
              class="fadeIn fourth"
              type="password"
              placeholder="Podaj hasło"
              name="pass"
            />
          </div>
          <div>
            <input
              class="fadeIn fifth"
              type="password"
              placeholder="Powtórz hasło"
              name="validPass"
            />
          </div>
          <button type="submit" class="fadeIn sixth" name="register">
            Zarejestruj się
          </button>
        </form>
        <div id="formFooter">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <a class="underlineHover" href="./odzyskajHaslo.php"
                >Odzyskaj hasło</a
              >
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
              <a class="underlineHover" href="./logowanie.php">Zaloguj sie</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../scripts/script.js"></script>
  </body>
</html>
