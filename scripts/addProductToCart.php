<?php
  session_start();

  if ($_SESSION['product_counter'] == 0)
  {
    $_SESSION['cart'] = array();
  }

  array_push($_SESSION['cart'], $_POST['product']);
  $_SESSION["product_counter"]++;
  
  for ($i = 0; $i < count($_SESSION['cart']); $i += 1)
  {
    echo $_SESSION['cart'][$i]."</br>";
  }
  // header("Location: ../pages/searchProducts.php")
?>