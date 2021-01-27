<?php
    require_once '../scripts/connect.php'; 
    
    $sql = "SELECT * FROM products"; 
    try 
    {
        if ($conn->connect_errno!=0)
        {
            throw new Exception(mysqli_connect_errno());
        }
        else 
        {
          $result = mysqli_query($conn, $sql); 

          while ($row = mysqli_fetch_assoc($result))
          {
          echo<<<PRODUCTS
          <form action="../scripts/addProductToCart.php" method="post">
            <div class="row productBody">
                    <div class="col-lg-2">
                      <img src="$row[img_src]" class="productImg" alt="product" />
                    </div>
                    <div class="productText col-lg-8">
                      <a href = "./product.php?productName=$row[product_name]" name = "productName" value = "$row[product_name]"><h5 class="card-title">$row[product_name]</h5></a>
                      <p>
                      $row[description]
                      </p>
                    </div>
                    <div class="extras col-lg-2">
                      <a type="button" href="#">Sprawdź dostępność</a>
                      <a type="button" href="#">Porównaj</a>
                      <button type="input" class="btn btn-primary btnBuy" name="product" value="$row[product_id]">Dodaj do koszyka</button>
                    </div>
              </div>
              </form>
PRODUCTS;
        }
        $conn->close();
      }
    } 
    catch (Exception $e)  
    {
      echo $e; 
    } 

 
?>