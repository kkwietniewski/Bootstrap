<?php

    session_start();

    $productId = $_POST['product'];
    $count;
    $updateCart = array();

    if (!empty($_SESSION['cart']))
    {
        foreach($_SESSION['cart'] as $product)
        {
            if ($product != $productId)
            {
                array_push($updateCart, $product); 
            }
            else 
            {
                $count += 1;
            }
        }

        $_SESSION['cart'] = $updateCart; 
        $_SESSION['product_counter'] = $_SESSION['product_counter'] - $count;
    }

    if($_SESSION['product_counter'] == 0){
        $_SESSION['cartCost'] = 0;
    }
     
   header ('Location: ../pages/cart.php');

?>