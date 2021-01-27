<?php

    require_once '../scripts/cartProducts.php'; 
    $sum = 0;

    if (!empty($dbCart))
    {
    foreach($dbCart as $product)
    {
    echo<<<CART
    <div class="row productsRow">
      <div class="col-lg-2">
        <img src="$product[4]" alt="" style="width:60px; height:60px;">
      </div>
      <div class="col-lg-6">
        <h6>$product[1]</h6>
      </div>
      <div class="col-lg-1">
        <h6>$product[2]</h6>
      </div>
      <div class="col-lg-2">
        <h6>$product[3] zł</h6>
      </div>
      <div class = "col-lg-1">
      <form action = "../scripts/deleteFromCart.php" method = "post"> <button type = "input" name = "product" value = "$product[0]">X</button></form>
      </div>      
    </div>
CART;

    $sum += $product[2] * $product[3];     
    }
    $_SESSION['cartCost'] = $sum; 
}
else {
  $_SESSION['cartCost'] = 0; 
}
?>