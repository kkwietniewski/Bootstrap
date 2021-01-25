<?php
  session_start();

  if ($_SESSION['product_counter'] == 0)
  {
    $_SESSION['cart'] = array();
  }

  array_push($_SESSION['cart'], $_POST['product']);
  $_SESSION["product_counter"]++;
  header("Location: ../pages/cart.php")
?>