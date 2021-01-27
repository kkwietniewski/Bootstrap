<?php

    require_once '../scripts/connect.php'; 
    $name = "label";
    $values = array("Nowość", "Bestseller", "Promocja"); 
    $label = $_GET['label']; 

    if (empty($label))
    {
        $label = $values[0]; 
    }
    echo<<<DIV
    <div class="col-lg-8">
    <div class="btn-group">
DIV;

  foreach($values as $value)
        {
            if ($value == $label)
            {
                echo<<<LABEL
                <a href="./?$name=$value" class="btn btn-primary active" aria-current="page">$value</a>
LABEL;
            }
            else 
            {
                echo<<<LABEL
                <a href="./?$name=$value" class="btn btn-primary" aria-current="page">$value</a>
LABEL;
            }
        }

    echo<<<DIV
    </div>
    </div>
DIV;

     $query = sprintf("SELECT p.product_name, p.description, p.img_src, p.price FROM products AS p JOIN store_labels AS s
     ON p.store_label = s.store_label_id WHERE store_label_name = '%s' ", mysqli_real_escape_string($conn,$label)); 

    try 
    {
        if ($conn->connect_errno!=0)
        {
            throw new Exception(mysqli_connect_errno());
        }
        else 
        {
            echo<<<DIV
            <div class="row">
DIV;
            if ($result = @$conn->query($query))
            {

                while ($row = mysqli_fetch_assoc($result))
                {
                    echo<<<PRODUCTS
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="card">
                                <img src="$row[img_src]" class="card-img-top" alt="product" />
                                <div class="card-body">
                                    <h5 class="card-title">$row[product_name]</h5>
                                    <p>Cena: $row[price] zł</p>
                                    <p class="card-text">
                                        $row[description]
                                    </p>
                                    <a href="#" class="btn btn-primary">Zobacz produkt</a>
                                </div>
                            </div>
                        </div>
PRODUCTS;
                }

            }
            echo<<<DIV
            </div>
DIV;
        }
    }
    catch (Exception $e)
    {
        echo $e; 
    }

   

?>