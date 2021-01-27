<?php

    require_once '../scripts/connect.php';

    if(isset($_GET['category']) || isset($_GET['subcategory']))
    {
        if (!empty($_GET['subcategory']))
        {
            $subcategory = $_GET['subcategory']; 
            $name = 'subcategory_name'; 
            $query = sprintf("SELECT p.product_id, p.product_name, p.label, p.price, p.img_src, p.availability, p.weight, p.subcategory, 
            p.brand, p.description AS productDescription, p.store_label, p.diagonal, p.processor, p.graphic, p.color, p.resolution, 
            s.subcategory_name, s.subcategory_description AS categoryDescription 
            FROM products AS p JOIN subcategory AS s ON p.subcategory = s.subcategory_id 
            WHERE s.subcategory_name = '%s' ", mysqli_real_escape_string($conn,$subcategory));        
        }
        else if (!empty($_GET['category']))
        {
            $category = $_GET['category']; 
            $name = 'category_name';
            $query = sprintf("SELECT p.product_id, p.product_name, p.label, p.price, p.img_src, p.availability, p.weight, p.subcategory, p.brand, 
            p.description AS productDescription, p.store_label, p.diagonal, p.processor, p.graphic, p.color, p.resolution, c.category_name, c.description 
            AS categoryDescription FROM products AS p JOIN subcategory AS s ON p.subcategory = s.subcategory_id 
            JOIN category AS c ON s.category_id = c.category_id WHERE category_name = '%s' ", mysqli_real_escape_string($conn,$category));
        }

        $productsArray = array();

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
                        $product = array();
                        //0 - Id produktu
                        array_push($product, $row['product_id']);
                        //1 - Nazwa produktu
                        array_push($product, $row['product_name']);
                        //2 - Model produktu
                        array_push($product, $row['label']);
                        //3 - Cena
                        array_push($product, $row['price']);
                        //4 - Zdjęcie
                        array_push($product, $row['img_src']);
                        //5 - Dostępność
                        array_push($product, $row['availability']);
                        //6 - Waga
                        array_push($product, $row['weight']);
                        //7 - Podkategoria
                        array_push($product, $row['subcategory']);
                        //8 - Marka
                        array_push($product, $row['brand']);
                        //9 - Opis produktu
                        array_push($product, $row['productDescription']);
                        //10 - Etykieta sklepu
                        array_push($product, $row['store_label']);
                        //11 - Przekątna
                        array_push($product, $row['diagonal']);
                        //12 - Procesor
                        array_push($product, $row['processor']);
                        //13 - Układ graficzny
                        array_push($product, $row['Układ graficzny']);
                        //14 - Kolor
                        array_push($product, $row['color']);
                        //15 - Rozdzielczość
                        array_push($product, $row['resolution']);
                        //16 - Nazwa kategorii
                        array_push($product, $row[$name]);
                        //17 - Opis kategorii
                        $categoryDescription = $row['categoryDescription'];
                        $categoryName = $row[$name];

                        array_push($productsArray, $product); 

                    }
                }
            }
                
            
            $conn->close();
        }
        catch (Exception $e)
        {
            echo $e;
        }

        echo<<<CATEGORY
        <div>$categoryName</div>
        <div>$categoryDescription</div>
CATEGORY;
        
        foreach($productsArray as $p)
        {
            echo<<<PRODUCT
            <div style = "background-color:beige">
            <p><b>Id produktu: </b>$p[0]</p>
            <p><b>Nazwa: </b>$p[1]</p>
            <p><b>Model: </b>$p[2]</p>
            <p><b>Cena: </b>$p[3]</p>
            <p><b>Zdjęcie: </b>$p[4]</p>
            <p><b>Dostępność: </b>$p[5]</p>
            <p><b>Waga: </b>$p[6]</p>
            <p><b>Podkategoria: </b>$p[7]</p>
            <p><b>Marka: </b>$p[8]</p>
            <p><b>Opis produktu: </b>$p[9]</p>
            <p><b>Etykiera sklepu: </b>$p[10]</p>
            <p><b>Przekątna: </b>$p[11]</p>
            <p><b>Procesor: </b>$p[12]</p>
            <p><b>Układ graficzny: </b>$p[13]</p>
            <p><b>Kolor: </b>$p[14]</p>
            <p><b>Rozdzielczość: </b>$p[15]</p>
            <p><b>Nazwa kategorii: </b>$p[16]</p>
            </div>
PRODUCT;
        }
    
    }
    

?>