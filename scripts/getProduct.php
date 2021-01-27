<?php
    
    require_once '../scripts/connect.php';

    if (empty($_GET['productName']))
    {
        echo<<<EMPTY
        <div>Proszę wpisać nazwę produktu!</div>
        </div>
EMPTY;
    }
    else if (!empty($_GET['productName']))
    {
        $name = $_GET['productName'];

    try 
    {
       if ($conn->connect_errno!=0)
       {
           throw new Exception(mysqli_connect_errno());
       }
       else
       {
           if ($result = @$conn->query(sprintf("SELECT * FROM products AS p JOIN subcategory AS s ON p.subcategory = s.subcategory_id WHERE p.product_name = '%s' ", mysqli_real_escape_string($conn,$name))))
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
                    $dbSubcategory = $line['subcategory_name'];
                    $dbBrand = $line['brand']; 
                    $dbDescription = $line['description'];
                    $dbStoreLabel = $line['store_label'];
                    $dbDiagonal = $line['diagonal'];
                    $dbProcessor = $line['processor'];
                    $dbGraphic = $line['graphic'];
                    $dbColor = $line['color'];
                    $dbResolution = $line['resolution'];

                    if($dbSubcategory == "Skanery i drukarki"){
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                      </svg>';
                        $title = "Zapewnij sobie wydajność urządzenia wielofunkcyjnego.";
                    }
                    else if($dbSubcategory == "Monitory"){
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                        <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                      </svg>';
                        $title = "Rozdzielczość ma znaczenie.";
                    }
                    else if($dbSubcategory == "Tablety graficzne"){
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tablet" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg>';
                        $title = "Smukły jak telefon, lżejszy niż czasopismo.";
                    }
                    else if($dbSubcategory == "Gamingowe"){
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                        <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
                        <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
                      </svg>';
                        $title = "Zapewnij sobie wydajność godną gracza.";
                    }
                    else if($dbSubcategory == "Notebooki"){
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                      </svg>';
                        $title = "Wygoda użytkowania? To właśnie oferuje ultramobilny laptop!";
                    }
                    else if($dbSubcategory == "Biurowe"){
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
                      </svg>';
                        $title = "Przygotowany na każdy dzień pracy!";
                    }
                    else if($dbSubcategory == "Smartfony"){
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg>';
                        $title = "Naładowany technologiami.";
                    }
                    else if($dbSubcategory == "Smartwatche"){
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-smartwatch" viewBox="0 0 16 16">
                        <path d="M9 5a.5.5 0 0 0-1 0v3H6a.5.5 0 0 0 0 1h2.5a.5.5 0 0 0 .5-.5V5z"/>
                        <path d="M4 1.667v.383A2.5 2.5 0 0 0 2 4.5v7a2.5 2.5 0 0 0 2 2.45v.383C4 15.253 4.746 16 5.667 16h4.666c.92 0 1.667-.746 1.667-1.667v-.383a2.5 2.5 0 0 0 2-2.45V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H14v-.5a2.5 2.5 0 0 0-2-2.45v-.383C12 .747 11.254 0 10.333 0H5.667C4.747 0 4 .746 4 1.667zM4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3z"/>
                      </svg>';
                        $title = "Przekraczaj granice swoich możliwości!";
                    }
                    else{
                        $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
                        <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
                      </svg>';
                        $title = "Wybierz inteligentnie.";
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
                                <p><strong>Kod produktu:</strong> $dbLabel</p>
                                <p><strong>Producent:</strong> $dbBrand</p>
                                <p><strong>Kategoria:</strong> $dbSubcategory</p>
                                <p><strong>Waga:</strong> $dbWeight kg</p>
                                <hr>
                                <p class="availability"><strong>Dostępność:</strong> $dbAvailability 
                PRODUCT;
                    if($dbAvailability > 1) echo 'sztuk';
                    else echo 'sztuka';
                    echo<<<PRODUCT
                                </p>
                            </div>
                            <div class="col-lg-2 productViewBtns">
                                <h4>$dbPrice zł</h4>
                                <button type="submit" class="btn btn-primary btnBuy" name="product" value="$dbId">Dodaj do koszyka</button>   
                            </div>
                        </div>
                    </form>
                    <div class="row productExtend">
                                        <div class="col-lg-12 productNav">
                                            <div class="btn-group productGroup" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" onclick="window.location='#Desc';" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked />
                                                <label class="btn btn-outline-primary" for="btnradio1">Opis</label>
                                                <input type="radio" onclick="window.location='#Specs';" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" />
                                                <label class="btn btn-outline-primary" for="btnradio2">Specyfikacja</label>
                                                <input type="radio" onclick="window.location='#Rate';" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" />
                                                <label class="btn btn-outline-primary" for="btnradio3">Opinie</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 productDescription" id="Desc">
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
                                                                $icon
                                                            </div>
                                                            <div class="col-lg-11">
                                                                <h4>$title</h4>
                                                                <p>$dbDescription</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                </div>
                                        </div>
                                        <div class="col-lg-12 productSpecification" id="Specs">
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
                                                                <th scope="row">Kod produktu</th>
                                                                <td>$dbLabel</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Producent</th>
                                                                <td>$dbBrand</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Waga</th>
                                                                <td>$dbWeight kg</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Przekątna</th>
                                                                <td>$dbDiagonal cali</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Procesor</th>
                                                                <td>$dbProcessor</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Grafika</th>
                                                                <td>$dbGraphic</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Rozdzielczość</th>
                                                                <td>$dbResolution</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Kolor</th>
                                                                <td>$dbColor</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="col-lg-2"></div>
                                                </div>
                                        </div>
                                        <div class="col-lg-12 productOpinions" id="Rate">
                                            <hr>
                                            <h2>Opinie</h2>
                                                <div class="row">
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-10">
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <h1>5/5</h1>
                                                            </div>
                                                            <div class="col-lg-4 addOpinion">
                                                                <h4>Oceń produkt!</h4>
                                                                <div class="rating">
                                                                    <input type="radio" name="rate" id="rate-5">
                                                                    <label for="rate-5">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                        </svg>
                                                                    </label>
                                                                    <input type="radio" name="rate" id="rate-4">
                                                                    <label for="rate-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                        </svg>
                                                                    </label>
                                                                    <input type="radio" name="rate" id="rate-3">
                                                                    <label for="rate-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                        </svg>
                                                                    </label>
                                                                    <input type="radio" name="rate" id="rate-2">
                                                                    <label for="rate-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                        </svg>
                                                                    </label>
                                                                    <input type="radio" name="rate" id="rate-1">
                                                                    <label for="rate-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                        </svg>
                                                                    </label>
                                                                </div>
                                                                    <form action="./product.php?productName=$name" name = "productName" value = "$name">
                                                                        <div class="textarea">
                                                                            <textarea cols="30" placeholder="Podziel się spostrzeżeniami"></textarea>
                                                                        </div>
                                                                        <button class="btn btn-secondary">Dodaj opinię</button>
                                                                    </form>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                PRODUCT;
                    



                }
                else {
                    echo<<<ALERT
                    <div>
                        <h5>Nie znaleziono produktu!</h5>
                    <p>Upewnij się, że podano prawidłową nazwę.</p>
                    </div>
ALERT;
                }
            }
            $conn->close();
        }
    }
    catch (Exception $e)
    {
        echo $e;
    }
} 


?>