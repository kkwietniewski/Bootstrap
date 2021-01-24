<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search</title>
    <link rel="stylesheet" href="../style/style.css" />
    <link
      rel="icon"
      sizes="16x16"
      type="image/png"
      href="../images/favicon-16x16.png"
    />
  </head>
  <body>
    <?php
      require_once "../scripts/getNavbar.php";
  ?>
    <div class="container-fluid">
      <div class="content">
        <div class="row">
          <div class="col-lg-3">
            <form action="#" method="post">
              <div class="filters pl-3">
                <h3>Filtruj</h3>
                <hr />
                <div class="producer">
                  <h5>Producent</h5>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="radioProducer1"
                      id="radioProducer1"
                      checked
                    />
                    <label class="form-check-label" for="radioProducer1">
                      Default radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="radioProducer2"
                      id="radioProducer2"
                    />
                    <label class="form-check-label" for="radioProducer2">
                      Default radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="radioProducer3"
                      id="radioProducer3"
                    />
                    <label class="form-check-label" for="radioProducer3">
                      Default radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="radioProducer4"
                      id="radioProducer4"
                    />
                    <label class="form-check-label" for="radioProducer4">
                      Default radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="radioProducer5"
                      id="radioProducer5"
                    />
                    <label class="form-check-label" for="radioProducer5">
                      Default radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="radioProducer6"
                      id="radioProducer6"
                    />
                    <label class="form-check-label" for="radioProducer6">
                      Default radio
                    </label>
                  </div>
                </div><!-- producer -->
                <div class="model">
                  <h5>Model</h5>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="checkModel1"
                    />
                    <label class="form-check-label" for="checkModel1">
                      Default checkbox1
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="checkModel2"
                    />
                    <label class="form-check-label" for="checkModel2">
                      Default checkbox2
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="checkModel3"
                    />
                    <label class="form-check-label" for="checkModel3">
                      Default checkbo3
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="checkModel4"
                    />
                    <label class="form-check-label" for="checkModel4">
                      Default checkbox4
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="checkModel5"
                    />
                    <label class="form-check-label" for="checkModel5">
                      Default checkbox5
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="checkModel6"
                    />
                    <label class="form-check-label" for="checkModel6">
                      Default checkbox6
                    </label>
                  </div>
                </div><!-- model -->
                <div class="price">
                <h5>Cena</h5>
                <div class="input-group mb-3">
                    <input type="number" class="form-control">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text">zł</span>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Wyszukaj</button>
              </div>
            </form>
          </div>
          <div class="col-lg-9 productsList">
            <?php
              require_once '../scripts/getProducts.php';
            ?>
          </div>
        </div>
      </div>
      <?php
        require_once '../scripts/getFooter.php';
  ?>
    </div>
    <script src="../scripts/script.js"></script>
    <script src="../scripts/filtrProduct.js"></script>
  </body>
</html>
