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
            <div class="filters pl-3">
              <h3>Filtruj</h3>
              <hr />
              <h5>Producent</h5>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault"
                  checked
                />
                <label class="form-check-label" for="flexCheckDefault">
                  Default checkbox
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDisabled"
                  disabled
                />
                <label class="form-check-label" for="flexCheckDisabled">
                  Disabled checkbox
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault1"
                />
                <label class="form-check-label" for="flexRadioDefault1">
                  Default radio
                </label>
              </div>
            </div>
          </div>
          <div class="col-lg-9"></div>
        </div>
      </div>
      <?php
        require_once '../scripts/getFooter.php';
  ?>
    </div>
    <script src="../scripts/script.js"></script>
  </body>
</html>
