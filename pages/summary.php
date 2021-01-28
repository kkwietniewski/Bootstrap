<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Podsumowanie</title>
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
          <div class="cartBody col-lg-8 fadeInDown">
            <div class="cartTitle">
              <h2>Podsumowanie</h2>
            </div>
            <div class="row">
              <hr>
              <div class="row">
                <div class="col-lg-12">
                  <form action="../scripts/order.php" method="post">
                    <div class="fadeIn first">
                      <h4>Kupiłeś</h4>
                      <?php
                        require_once "../scripts/orderedProducts.php";
                        
                      ?>
                      <h4 style="text-align:right;">Łączny koszt: <b><?php
                      echo $_SESSION['cartCost']?>zł</b></h4>
                    </div>
                  <div>
                </div>
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
    <script src="../scripts/order.js"></script>
  </body>
</html>