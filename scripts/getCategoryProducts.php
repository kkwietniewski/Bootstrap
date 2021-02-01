<?php
session_start();
require_once '../scripts/connect.php';

if(isset($_GET['category']) || isset($_GET['subcategory']) || isset($_GET['producer']) || isset($_GET['model']) 
|| isset($_GET['diagonal']) || isset($_GET['priceFrom']) || isset($_GET['priceTo']))
{
if (!empty($_GET['category']))
{
    $category = $_GET['category']; 
    $value = $_GET['category']; 
    $name = 'category_name';
}
else if (!empty($_GET['subcategory']) )
{
    $subcategory = $_GET['subcategory']; 
    $value = $_GET['subcategory']; 
    $name = 'subcategory_name'; 
}
else if (!empty($_SESSION['subcategory']))
{
    $value = $_SESSION['subcategory']; 
    $name = 'subcategory_name'; 
    // unset($_SESSION['subcategory']);
}
else if (!empty($_SESSION['category']))
{
    $value = $_SESSION['category']; 
    $name = 'category_name';  
    // unset($_SESSION['category']);
}

$query = sprintf("SELECT p.product_id, p.product_name, p.label, p.price, p.img_src, p.availability, p.weight, p.subcategory, 
p.brand, p.description AS productDescription, p.store_label, p.diagonal, p.processor, p.graphic, p.color, p.resolution, 
c.category_name, c.description AS categoryDescription, s.subcategory_name, s.subcategory_description FROM products AS p 
JOIN subcategory AS s ON p.subcategory = s.subcategory_id JOIN category AS c ON s.category_id = c.category_id 
WHERE $name='%s' ",  mysqli_real_escape_string($conn,$value));  
if (!empty($_GET['producer']))
{
    $query = $query.sprintf(" AND p.brand = '%s' ", $_GET['producer']); 
    
}
if(!empty($_GET['model']))
{
    $query = $query.sprintf(" AND p.label = '%s' ", $_GET['model']);
}
if(!empty($_GET['diagonal']))
{
    $query = $query.sprintf(" AND p.diagonal = '%s' ", $_GET['diagonal']);
}
if(!empty($_GET['priceFrom']))
{
    $query = $query.sprintf(" AND p.price> %d ", $_GET['priceFrom']);
}
if(!empty($_GET['priceTo']))
{
    $query = $query.sprintf(" AND p.price< %d ", $_GET['priceTo']);
}
if(!empty($_GET['sort']))
{
    $sort = $_GET['sort']; 

    if ($sort == 'priceAsc')
    {
        $query = $query.sprintf(" ORDER BY p.price"); 
    }
    if ($sort == 'priceDesc')
    {
        $query = $query.sprintf(" ORDER BY p.price DESC"); 
    }
    else if ($sort == 'nameAsc')
    {
        $query = $query.sprintf(" ORDER BY p.product_name"); 
    }
    else if ($sort == 'nameDesc')
    {
        $query = $query.sprintf(" ORDER BY p.product_name DESC"); 
    }
}
else {
    $query = $query.sprintf(" ORDER BY p.price");
}

$productsArray = array();
$brands = array();
$diagonals = array();

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
            if (!empty($subcategory))
            {
                $_SESSION['subcategory'] = $subcategory;
                if (isset($_SESSION['category']))
                {
                    unset($_SESSION['category']); 
                }
            }
            else if (!empty($category))
            {
                $_SESSION['category'] = $category; 
                if (isset($_SESSION['subcategory']))
                {
                    unset($_SESSION['subcategory']); 
                }
            }

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
                array_push($brands, $row['brand']);
                //9 - Opis produktu
                array_push($product, $row['productDescription']);
                //10 - Etykieta sklepu
                array_push($product, $row['store_label']);
                //11 - Przekątna
                array_push($product, $row['diagonal']);
                array_push($diagonals, $row['diagonal']); 
                //12 - Procesor
                array_push($product, $row['processor']);
                //13 - Układ graficzny
                array_push($product, $row['graphic']);
                //14 - Kolor
                array_push($product, $row['color']);
                //15 - Rozdzielczość
                array_push($product, $row['resolution']);
                //16 - Nazwa kategorii
                array_push($product, $row[$name]);
                //17 - Opis kategorii
                $categoryDescription = $row['categoryDescription'];
                $categoryName = $row[$name];
                //18 - Nazwa podkategorii
                array_push($product, $row['subcategory_name']); 
                //19 - Opis podkategorii
                array_push($product, $row['subcategory_description']); 

                array_push($productsArray, $product); 
                    

            }
        }
    }
        
    $brands = array_unique($brands); 
    $diagonals = array_unique($diagonals); 
    $conn->close();
}
catch (Exception $e)
{
    echo $e;
}

echo<<<OPEN
<div class="content">
OPEN;
// echo $query; 
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

        echo<<<PRODUCER
        <div class="row">
            <div class="col-lg-3">
            <form action="../pages/searchProducts.php?&name=value" method="get">
                <div class="filters pl-3">
                <h3>Filtruj</h3>
                <hr />
                <div class = "sort">
                    <h5>Sortuj</h5>
                    <select class="form-select" name = "sort">
                        <option value = "priceAsc">Po cenie rosnąco</option>
                        <option value="priceDesc">Po cenie malejąco</option>
                        <option value="nameAsc">Po nazwie rosnąco</option>
                        <option value="nameDesc">Po nazwie malejąco</option>
                    </select>
                </div>
                <div class="producer">
                    <h5>Producent</h5>
PRODUCER;

        foreach($brands as $index=>$p)
                {
                    echo<<<PRODUCER
                    <div class="form-check">
                        <input
                            class="form-check-input" type="radio" name="producer" value= "$p" id="radioProducer$index"/>
                        <label class="form-check-label" for="radioProducer$index">$p</label>
                    </div>
PRODUCER;
                }
        echo<<<MODEL
                </div><!-- producer -->
                <div class="model">
                    <h5>Model</h5>
MODEL;
        foreach($productsArray as $index=>$p)
                {
                    echo<<<MODEL
                    <div class="form-check">
                        <input class="form-check-input" name="model" value= "$p[2]" type="radio" id="radioModel$index"/>
                        <label class="form-check-label" for="radioModel$index">$p[2]</label>
                    </div>
MODEL;
                }
                echo<<<DIAGONAL
                </div><!-- model -->
                <div class="diagonal">
                    <h5>Przekątna</h5>
DIAGONAL;
        foreach($diagonals as $index=>$p)
                {
                    echo<<<DIAGONAL
                    <div class="form-check">
                        <input class="form-check-input" name="diagonal" value= "$p" type="radio" id="radioDiagonal$index"/>
                        <label class="form-check-label" for="radioDiagonal$index">$p"</label>
                    </div>
DIAGONAL;
                }
                echo<<<FILTERS
                </div><!-- diagonal -->
                <div class="price">
                <h5>Cena</h5>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="priceFrom" placeholder="Od">
                    <input type="number" class="form-control" name="priceTo" placeholder="Do">
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
                            <h4>$p[3] zł</h4>
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