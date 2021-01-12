<?php

    require_once '../scripts/connect.php'; 

    $sql = "SELECT * FROM products LIMIT 8"; 
    $result = mysqli_query($conn, $sql); 
 

    while ($row = mysqli_fetch_assoc($result))
    {
    echo <<<PRODUCTS
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card">
              <img src="$row[img_src]" class="card-img-top" alt="product" />
              <div class="card-body">
                <h5 class="card-title">$row[product_name]</h5>
                <p class="card-text">
                  $row[description]
                </p>
                <a href="#" class="btn btn-primary">Go footer</a>
              </div>
            </div>
          </div>
PRODUCTS;
    }

 
?>