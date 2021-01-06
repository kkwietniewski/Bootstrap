<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap-page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style/style.css" />
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
      <hr style="color: white" />

      <footer class="footer mt-auto py-3 px-5" id="footer">
        <div class="row">
          <div class="col-12 col-md">
            <small class="d-block mb-3">©Kacper Kwietniewski 2021</small>
          </div>
          <div class="col-6 col-md">
            <h5>Pomoc</h5>
            <ul class="list-unstyled text-small">
              <li><a href="#">Cool stuff</a></li>
              <li><a href="#">Random feature</a></li>
              <li><a href="#">Team feature</a></li>
              <li>
                <a href="#">Stuff for developers</a>
              </li>
              <li><a href="#">Another one</a></li>
              <li><a href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Kontakt</h5>
            <ul class="list-unstyled text-small">
              <li><a href="#">Cool stuff</a></li>
              <li><a href="#">Random feature</a></li>
              <li><a href="#">Team feature</a></li>
              <li>
                <a href="#">Stuff for developers</a>
              </li>
              <li><a href="#">Another one</a></li>
              <li><a href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Zamówienia</h5>
            <ul class="list-unstyled text-small">
              <li><a href="#">Cool stuff</a></li>
              <li><a href="#">Random feature</a></li>
              <li><a href="#">Team feature</a></li>
              <li>
                <a href="#">Stuff for developers</a>
              </li>
              <li><a href="#">Another one</a></li>
              <li><a href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Reklamacje</h5>
            <ul class="list-unstyled text-small">
              <li><a href="#">Cool stuff</a></li>
              <li><a href="#">Random feature</a></li>
              <li><a href="#">Team feature</a></li>
              <li>
                <a href="#">Stuff for developers</a>
              </li>
              <li><a href="#">Another one</a></li>
              <li><a href="#">Last time</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <!-- container-fluid-->

    <script src="../scripts/script.js"></script>
  </body>
</html>
