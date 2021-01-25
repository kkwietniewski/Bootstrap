<?php

    session_start();
    require_once '../scripts/connect.php';
    if (!empty($_SESSION['cart']))
    {
        $cart = array_unique($_SESSION['cart']);    
    
    $query = "SELECT * FROM products WHERE product_id IN (%s) ";
    $query = sprintf($query, implode(', ', $cart));
    $dbCart = array();

    
    try 
    {
        if ($conn->connect_errno!=0)
        {
            throw new Exception(mysqli_connect_errno());
        }
        else 
        {
            if ($result = @$conn->query($query))
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    $quantity = 0;
                    foreach($_SESSION['cart'] as $q)
                    {
                        if ($q == $row['product_id'])
                        {
                            $quantity += 1;
                        }
                    }
                    $dbProduct = array();
                    array_push($dbProduct, $row['product_id'], $row['product_name'], $quantity, $row['price'], $row['img_src'] ); 
                    array_push($dbCart, $dbProduct ); 
                
                }
            }
            $conn->close(); 
        }
    }
    catch (Exception $e)
    {
        echo $e; 
    }
   
}
?>