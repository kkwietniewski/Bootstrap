<?php

    session_start();
    require_once '../scripts/connect.php'; 

    $cost = $_SESSION['cartCost'];
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
                echo<<<TITLE
<div class="cartTitle">
<h2>Podsumowanie zamówienia #$orderId</h2>
</div>
<div class="row">
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="fadeIn first">
                <div class="row">
                    <h4><b>Produkty</b></h4>
                    <div class="col-lg-12 summaryTitle">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6">
                                <h4>Nazwa</h4>
                            </div>
                            <div class="col-lg-1 text-center">
                                <h4>Ilość</h4>
                            </div>
                            <div class="col-lg-3">
                                <h4>Cena</h4>
                            </div>
                        </div>
                    </div>
TITLE;
                $query = "SELECT * FROM ordered_products as p JOIN `order` as o ON p.order_id = o.order_id JOIN products as pr
                ON pr.product_id = p.product_id WHERE p.order_id = $orderId";
                if ($result = mysqli_query($conn, $query))
                {
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo<<<PRODUCTS
                        <div class="col-lg-12 summaryProducts">
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="$row[img_src]" style="width:100%;">
                                </div>
                                <div class="col-lg-6">
                                    <h6>$row[product_name]</h6>
                                </div>
                                <div class="col-lg-1 text-center">
                                    <h6>$row[amount]</h6>
                                </div>
                                <div class="col-lg-3">
                                    <h6>$row[price]zł</h6>
                                </div>
                            </div>
                        </div>
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
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 userData">
                    <h4><b>Dane kupującego:</b></h4>
                    <div class="row text-center">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-4">
                            <p><b>Imię i nazwisko:</b> $name</p>
                            <p><b>Adres:</b> $address</p>
                            <p><b>Kod pocztowy:</b> $postcode</p>
                        </div>
                        <div class="col-lg-4">
                            <p><b>Miasto:</b> $city</p>
                            <p><b>Telefon:</b> $phone</p>
                            <p><b>Dostawa:</b> $delivery</p>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <p><i>Forma płatności <b>$payment_type</b></i></p>
                </div>
                <div class="col-lg-6">
                    <h4 style="text-align:right;">Łączny koszt: <b>$cost zł</b></h4><b>
                           
                </div>
            </div>
        
USERDATA;

        if (isset($_SESSION['cart']))
        {
            unset($_SESSION['cart']); 
        }
        if (isset($_SESSION['product_counter']))
        {
            $_SESSION['product_counter'] = 0; 
        }

        if (isset($_SESSION['cartCoset']))
        {
            unset($_SESSION['cartCost']); 
        }

    

    }
?>