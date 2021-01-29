<?php

    session_start();
    require_once '../scripts/connect.php'; 

    if (!empty($_SESSION['order']))
    {
        $orderId = $_SESSION['order']; 

        try
        {
            if ($conn->connect_errno!=0)
            {
                throw new Exception(mysqli_connect_errno()); 
            }
            else 
            {
                $query = "SELECT * FROM ordered_products as p JOIN `order` as o ON p.order_id = o.order_id JOIN products as pr
                ON pr.product_id = p.product_id WHERE p.order_id = $orderId";
                if ($result = mysqli_query($conn, $query))
                {
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo<<<PRODUCTS
                        Id produktu: $row[product_id]</br>
                        Nazwa: $row[product_name]</br>
                        Ilość: $row[amount]</br>
                        </br>
PRODUCTS; 
                    $name = $row['name'];
                    $address = $row['address']; 
                    $postcode = $row['postcode']; 
                    $city = $row['city']; 
                    $phone = $row['phone']; 
                    $payment_type = $row['payment_type']; 
                    $delivery = $row['delivery']; 
                    }
                } 
                $conn->close();
                
            }

        }
        catch (Exception $e)
        {
            echo $e; 
        }

        echo<<<USERDATA
        Numer zamówienia: $orderId</br> 
        Imię i nazwisko: $name </br>
        Adres: $address </br>
USERDATA;
    }

    
?>