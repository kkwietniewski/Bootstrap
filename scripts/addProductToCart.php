<?php
  session_start();
  $_SESSION["product_counter"]++;
  header("Location: ../pages/searchProducts.php")
?>