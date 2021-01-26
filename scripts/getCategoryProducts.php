<?php

    require_once '../scripts/connect.php';

    if(!empty($_GET['subcategory']))
    {
        $subcategory = $_GET['subcategory']; 
        try 
        {
            if ($conn->connect_errno!=0)
            {
                throw new Exception(mysqli_connect_errno());
            }
            else 
            {
                if ($result = @$conn->query(sprintf("SELECT * FROM products AS p JOIN subcategory AS s ON p.subcategory = s.subcategory_id 
                WHERE s.subcategory_name = '%s' ", mysqli_real_escape_string($conn,$subcategory))))
                {
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo $row['subcategory_name']; 
                    }
                }
            }
                
            
            $conn->close();
        }
        catch (Exception $e)
        {
            echo $e;
        }
    }

?>