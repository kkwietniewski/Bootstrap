<?php
    session_start();
    require_once '../scripts/connect.php'; 
   

    if (isset($_SESSION['cart']))
    {

    $select = sprintf("SELECT * FROM `order` WHERE user_id = $_SESSION[logged] ORDER BY order_id DESC LIMIT 1");
 
    if (!$conn)
    {
        echo "error"; 
    }
    else {
        if ($result = @$conn->query($select))
        {             
            $users = $result->num_rows;
            if ($users > 0)
            {

                $line = $result->fetch_assoc(); 
                $orderId= $line['order_id']; 
                $_SESSION['order'] = $orderId; 
                $name = $line['name']; 
                $address = $line['address'];
                $postcode = $linep['postcode']; 
                $city = $line['city']; 
                $phone = $line['phone']; 

    $query = "INSERT INTO `ordered_products` VALUES ";
    
    $cart = array_unique($_SESSION['cart']); 

    $products = array(); 
    foreach ($cart as $c)
    { 
    $product = array();
    $quantity = 0; 
    foreach($_SESSION['cart'] as $q)
        {
            if ($c == $q)
            {
                $quantity += 1;              
            }
        }
        array_push($product, $c, $quantity); 
        array_push($products, $product);
    }
    $len = count( $products);            
    foreach($products as $index=>$p)
    {
    $query = $query.sprintf(" (NULL, $orderId, $p[0], $p[1]) "); 
    if ($index != $len - 1)
    {
        $query = $query.sprintf(" , "); 
    }   
    }


    if ($conn->query($query))
    {
        //Wstawienie do bazy ordered_products
    }
    $conn->close();
    }
    else 
    {
        echo 'error';
    }
        


    }
    }
   
    if ($result = @$conn->query(sprintf("SELECT * FROM ordered_products WHERE order_id = $orderId")))
    {             
        $users = $result->num_rows;
        if ($users > 0)
        {
            $line = $result->fetch_assoc(); 
            echo $line['order_id'];
            
        }
    }
   
}

?>

<!-- 
        if ($result = @$conn->query(sprintf("SELECT * FROM ordered_products WHERE order_id = $orderId")))
        {             
            $users = $result->num_rows;
            if ($users > 0)
            {
                $line = $result->fetch_assoc(); 
                $line['product_id'];
            }

            echo<<<ORDERS
            Pupsko MOniki jest piękne: 
            <div class="row productsRow">
            <div class="col-lg-2">
            <h6>Nazwa: $name</h6>
            </div>
            <div class="col-lg-5">
            <h6>Adres: $address</h6>
            </div>
            <div class="col-lg-1" style="text-align:center;">
            <h6>Kod pocztowy: $postcode</h6>
            </div>
            <div class="col-lg-4" style="text-align:center;">
            <h6>$product[3] zł</h6>
            </div>   
            </div>
ORDERS;
             -->