<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koszyk</title>
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
              <h2>Koszyk</h2>
            </div>
            <div class="row">
              <hr>
              <div class="col-lg-10">
                <div class="row titleRow">
                  <div class="col-lg-2">
                  </div>
                  <div class="col-lg-7">
                    <h4>Nazwa</h4>
                  </div>
                  <div class="col-lg-1">
                    <h4>Ilość</h4>
                  </div>
                  <div class="col-lg-2">
                    <h4>Cena</h4>
                  </div>
                </div>
              </div>
              <div class="cartProducts col-lg-10">
              
              <?php
                require_once "../scripts/showCart.php";
              ?>
                <!-- <div class="row">
                  <div class="col-lg-2">
                    <img src="../images/product.jpg" alt="" style="width:60px; height:60px;">
                  </div>
                  <div class="col-lg-8">
                    <h6>Nazwa</h6>
                  </div>
                  <div class="col-lg-2">
                    <h6>200zł</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2">
                    <img src="../images/product.jpg" alt="" style="width:60px; height:60px;">
                  </div>
                  <div class="col-lg-8">
                    <h6>Nazwa</h6>
                  </div>
                  <div class="col-lg-2">
                    <h6>200zł</h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2">
                    <img src="../images/product.jpg" alt="" style="width:60px; height:60px;">
                  </div>
                  <div class="col-lg-8">
                    <h6>Nazwa</h6>
                  </div>
                  <div class="col-lg-2">
                    <h6>200zł</h6>
                  </div>
                </div> -->
              </div>
              <div class="col-lg-2">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-10"></div>
              <div class="cartSummary col-lg-2">
                <h6>Do zapłaty: <strong>
                <?php 
                  if (isset($_SESSION['cartCost']))
                  {
                    echo $_SESSION['cartCost'];
                  } 
                  else 
                  {
                    echo 0;
                  }
                ?>
                </strong></h6>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-10"></div>
              <div class="col-lg-2">
                <button class="btn btn-primary" style="width: 100%; color:white;">Zapłać</button>
              </div>
            </div>
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
