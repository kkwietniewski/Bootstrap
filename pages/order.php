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
          <div class="cartBody col-lg-8 fadeInDown">
            <div class="cartTitle">
              <h2>Wybór sposobu płatności i dostawy</h2>
            </div>
            <div class="row">
              <hr>
              <div class="row">
                <div class="col-lg-7">
                  <form action="#" method="post">
                    <div class="fadeIn first">
                      <h4>Dane odbiorcy</h4>
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
                      <input class="regInp fadeIn fifth" name="email" type="text" placeholder="Podaj email"/>
                    </div>
                    <div>
                      <input class="regInp fadeIn sixth" name="telephone" type="number" placeholder="Podaj telefon"/>
                    </div>
                    <div class="row fadeIn sixth">
                      <h4>Płatność i dostawa</h4>
                      <div class="col-lg-6 payment">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="paymentRatios" id="paymentRatio1" value="5.00" checked>
                          <label class="form-check-label" for="paymentRatio1">
                            <p>Kartą<i> (5zł)</i></p>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="paymentRatios" id="paymentRatio2" value="3.00">
                          <label class="form-check-label" for="paymentRatio2">
                          <p>Gotówką<i> (3zł)</i></p>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="paymentRatios" id="paymentRatio3" value="0.00">
                          <label class="form-check-label" for="paymentRatio3">
                          <p>Blik<i> (0zł)</i></p>
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-6 supply fadeIn sixth">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="supplyRatios" id="supplyRatio1" value="8.99" checked>
                          <label class="form-check-label" for="supplyRatio1">
                          <p>Paczkomat<i> (8,99zł)</i></p>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="supplyRatios" id="supplyRatio2" value="14.99">
                          <label class="form-check-label" for="supplyRatio2">
                          <p>Na podany adres<i> (14,99zł)</i></p>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="supplyRatios" id="supplyRatio3" value="0.00">
                          <label class="form-check-label" for="supplyRatio3">
                          <p>Odbiór osobisty<i> (0zł)</i></p>
                          </label>
                        </div>
                      </div>
                    </div>
                  <div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="payContainer">
                    <h4>Wybrane produkty</h4>
                    <?php
                  require_once "../scripts/showCart.php";
                    ?>
                    <hr>
                    <div class="row">
                      <div class="col-10">
                        <p>Forma płatności</p>
                        <p>Dostawa</p>
                        <h6>Do zapłaty:</h6>
                      </div>
                      <div class="col-2">
                        <p>5zł</p>
                        <p>8,99zł</p>
                        <h6><strong><?php 
                          if (isset($_SESSION['cartCost']))
                          {
                            echo $_SESSION['cartCost'],'zł';
                          } 
                          else 
                          {
                            echo 0,'zł';
                          }
                        ?></strong></h6>
                      </div>
                      <div class="payButton">
                        <button type="submit" class="btn btn-primary">Zapłać i zamów</button>
                      </div>
                    </div>
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
  </body>
</html>
