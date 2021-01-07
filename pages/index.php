<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer Shop - Strona główna</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
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
      <div class="content">
        <!-- btn-group-toggle-->
        <div
          class="btn-group"
          role="group"
          aria-label="Basic radio toggle button group"
        >
          <input
            type="radio"
            class="btn-check"
            name="btnradio"
            id="btnradio1"
            autocomplete="off"
            checked
          />
          <label class="btn btn-outline-primary" for="btnradio1">Nowości</label>

          <input
            type="radio"
            class="btn-check"
            name="btnradio"
            id="btnradio2"
            autocomplete="off"
          />
          <label class="btn btn-outline-primary" for="btnradio2"
            >Polecane</label
          >

          <input
            type="radio"
            class="btn-check"
            name="btnradio"
            id="btnradio3"
            autocomplete="off"
          />
          <label class="btn btn-outline-primary" for="btnradio3"
            >Wyprzedaż</label
          >
        </div>
        <!-- btn-group-toggle-->
        <!-- row-->
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go footer</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="../images/product.jpg" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row-->
        
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
