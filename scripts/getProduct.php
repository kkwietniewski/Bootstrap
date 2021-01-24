<?php
    
    require_once '../scripts/connect.php';

    if (isset($_GET['productName']))
    {
        $name = $_GET['productName'];
    
    }

    if(!$conn)
    {
        echo "Error"; 
    }
    else
    {
        if ($result = @$conn->query(sprintf("SELECT * FROM products WHERE product_name ='%s'", mysqli_real_escape_string($conn,$name))))
        {
            $products = $result->num_rows;
            if ($products > 0)
            {
                $line = $result->fetch_assoc(); 
                $dbName = $line['product_name']; 
                $dbId = $line['product_id'];
                $dbLabel = $line['label'];
                $dbPrice = $lline['price'];
                $dbImg = $line['img_src'];
                $dbAvailability = $line['availability'];
                $dbWeight = $line['weight'];
                $dbSubcategory = $line['subcategory'];
                $dbBrand = $line['brand']; 
                $dbDescription = $line['description'];
                $dbStoreLabel = $line['store_label'];

            }
        }
        $conn->close();
    }

    echo<<<PRODUCT
    <p>$dbName</p>
    <p>$dbId</p>
    <p>$dbLabel</p>
    <p>$dbPrive</p>
    <p>$dbImg</p>
    <p>$dbAvailability</p>
    <p>$dbWeight</p>
    <p>$dbSubcategory</p>
    <p>$dbBrand</p>
    <p>$dbDescription</p>
    <p>$dbStoreLabel</p>
PRODUCT;

?>