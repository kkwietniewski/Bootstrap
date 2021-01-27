<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dostawa i płatność</title>
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="icon" sizes="16x16" type="image/png" href="../images/favicon-16x16.png" />
  </head>
  <body>
  
    <?php
      require_once "../scripts/getNavbar.php";
    ?>
    <!-- container-fluid-->
    <div class="container-fluid">
    
      <!-- content-->
      <div class="cart">
        <div class="row p-5">
          <div class="col-lg-2 d-flex"></div>
          <div class="cartBody col-lg-8">
            <div class="cartTitle">
              <h2>Dostawa i płatność</h2>
            </div>
            <div class="row">
              <hr>
              <div class="row">
                <div class="col-lg-8">
                  <form action="#" method="post">
                  <h4>Dostawa i płatność</h4>
                    <div class="fadeIn first">
                      <?php
                    if (isset($_SESSION['error']))
                      {
                          echo $_SESSION['error']; 
                      }
                      unset($_SESSION['error']);
                      ?>
                      <input class="regInp" type="text" name="nameSurname" placeholder="Podaj imię i nazwisko" />
                    </div>
                    <div>
                      <input class="regInp fadeIn second" name="routeNumber" type="text" placeholder="Podaj ulicę i numer domu"/>
                    </div>
                    <div>
                      <input class="regInp fadeIn third" name="postcode" type="text" placeholder="Podaj kod pocztowy"/>
                    </div>
                    <div>
                      <input class="regInp fadeIn fourth" name="city" type="text" placeholder="Podaj miasto"/>
                    </div>
                  <div>
                </div>
              </div>
              <div class="col-lg-4"></div>
            </div>
            <div class="row">
              <div class="col-lg-8"></div>
              <div class="col-lg-4">
                <button type="submit" class="btn btn-primary" style="width: 100%; color:white;">Zapłać</button>
              </div>
            </div>
                  </form>
          </div>
          <div class="col-lg-2 d-flex"></div>
          
      </div>
      <!-- content-->
      <?php
        require_once '../scripts/getFooter.php';
      ?>
    </div>
    <!-- container-fluid-->

    <script src="../scripts/script.js"></script>
  </body>
</html>