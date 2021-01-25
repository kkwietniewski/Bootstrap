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
                $dbPrice = $line['price'];
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
    <form action="../scripts/addProductToCart.php" method="post">
        <div class="row">
            <div class="col-lg-5 productViewImg">
                <img src="$dbImg">
            </div>
            <div class="col-lg-5 productViewText">
                <h2>$dbName</h2>
                <hr>
                <p>Opis: $dbDescription</p>
                <p>Producent: $dbBrand</p>
                <p>Waga: $dbWeight kg</p>
                <hr>
                <p class="availability">Dostępność: $dbAvailability</p>
            </div>
            <div class="col-lg-2 productViewBtns">
                <h4>$dbPrice zł</h4>
                <button type="submit" class="btn btn-primary btnBuy">Dodaj do koszyka</button>     
            </div>
        </div>
    </form>
    <div class="row productExtend">
                        <div class="col-lg-12 productNav">
                            <div class="btn-group productGroup" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked />
                                <label class="btn btn-outline-primary" for="btnradio1">Opis</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" />
                                <label class="btn btn-outline-primary" for="btnradio2">Specyfikacja</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" />
                                <label class="btn btn-outline-primary" for="btnradio3">Opinie</label>
                            </div>
                        </div>
                        <div class="col-lg-12 productDescription">
                            <hr>
                            <h2>Opis</h2>
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10 descriptionImg">
                                        <img src="$dbImg">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10 descriptionText">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                                                    <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                                </svg>
                                            </div>
                                            <div class="col-lg-11">
                                                <h4>Rób profesjonalne zdjęcia</h4>
                                                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                        </div>
                        <div class="col-lg-12 productSpecification">
                            <hr>
                            <h2>Specyfikacja</h2>
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Nazwa</th>
                                                <td>$dbName</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Model</th>
                                                <td>modelmodel</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Producent</th>
                                                <td>$dbBrand</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Waga</th>
                                                <td>$dbWeight kg</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-lg-2"></div>
                                </div>
                        </div>
                        
PRODUCT;

?>