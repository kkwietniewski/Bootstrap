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

        echo<<<OPEN
        <div class="content">
OPEN;
        if (!empty($_GET['category'])){
            echo<<<BREADCRUMB
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pages">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">$categoryName</li>
                </ol>
            </nav>
BREADCRUMB;
        }else if(!empty($_GET['subcategory'])){
            echo<<<BREADCRUMB
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pages">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="./searchProducts.php?subcategory=$categoryName">$categoryName</a></li>
                    <li class="breadcrumb-item active" aria-current="page">$categoryName</li>
                </ol>
            </nav>
BREADCRUMB;
        }
        echo<<<FILTERS
        <div class="row">
            <div class="col-lg-3">
            <form action="#" method="post">
                <div class="filters pl-3">
                <h3>Filtruj</h3>
                <hr />
                <div class="producer">
                    <h5>Producent</h5>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="radioProducer1"
                        id="radioProducer1"
                        checked
                    />
                    <label class="form-check-label" for="radioProducer1">
                        Default radio
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="radioProducer2"
                        id="radioProducer2"
                    />
                    <label class="form-check-label" for="radioProducer2">
                        Default radio
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="radioProducer3"
                        id="radioProducer3"
                    />
                    <label class="form-check-label" for="radioProducer3">
                        Default radio
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="radioProducer4"
                        id="radioProducer4"
                    />
                    <label class="form-check-label" for="radioProducer4">
                        Default radio
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="radioProducer5"
                        id="radioProducer5"
                    />
                    <label class="form-check-label" for="radioProducer5">
                        Default radio
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="radioProducer6"
                        id="radioProducer6"
                    />
                    <label class="form-check-label" for="radioProducer6">
                        Default radio
                    </label>
                    </div>
                </div><!-- producer -->
                <div class="model">
                    <h5>Model</h5>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkModel1"
                    />
                    <label class="form-check-label" for="checkModel1">
                        Default checkbox1
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkModel2"
                    />
                    <label class="form-check-label" for="checkModel2">
                        Default checkbox2
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkModel3"
                    />
                    <label class="form-check-label" for="checkModel3">
                        Default checkbo3
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkModel4"
                    />
                    <label class="form-check-label" for="checkModel4">
                        Default checkbox4
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkModel5"
                    />
                    <label class="form-check-label" for="checkModel5">
                        Default checkbox5
                    </label>
                    </div>
                    <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="checkModel6"
                    />
                    <label class="form-check-label" for="checkModel6">
                        Default checkbox6
                    </label>
                    </div>
                </div><!-- model -->
                <div class="price">
                <h5>Cena</h5>
                <div class="input-group mb-3">
                    <input type="number" class="form-control">
                    <input type="number" class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text">zł</span>
                    </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Wyszukaj</button>
                </div>
            </form>
            </div>
            <div class="col-lg-9 productsList">
FILTERS;

        echo<<<CATEGORY
        <div class='productsTitle'>
            <h3>$categoryName</h3>
            <p>$categoryDescription</p>
            <hr>
        </div>
CATEGORY;
        
        foreach($productsArray as $p)
        {
        echo<<<PRODUCTS
                <form action="../scripts/addProductToCart.php" method="post">
                    <div class="row productBody">
                            <div class="col-lg-2">
                            <img src="$p[4]" class="productImg" alt="product" />
                            </div>
                            <div class="productText col-lg-8">
                            <a href = "./product.php?productName=$p[1]" name = "productName" value = "$p[1]"><h5 class="card-title">$p[1]</h5></a>
                            <p><b>Kod produktu: </b> $p[2]</p>
                            <p><b>Producent: </b> $p[8]</p>
                            <p><b>Procesor: </b> $p[12]</p>
                            <p><b>Układ graficzny: </b> $p[13]</p>
                            <p><b>Rozdzielczość: </b> $p[15]</p>
                            <p><b>Kolor: </b> $p[14]</p>
                            </div>
                            <div class="extras col-lg-2">
                            <a type="button" href="#">Sprawdź dostępność</a>
                            <a type="button" href="#">Porównaj</a>
                            <button type="input" class="btn btn-primary btnBuy" name="product" value="$p[0]">Dodaj do koszyka</button>
                            </div>
                    </div>
                </form>
            
PRODUCTS;
        }
        echo<<<CLOSE
            </div>
        </div>
    </div>
CLOSE;
    
    }
    

?>
