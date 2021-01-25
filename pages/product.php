<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkt</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" sizes="16x16" type="image/png" href="../images/favicon-16x16.png" />
</head>
<body>
    <?php
        require_once '../scripts/getNavbar.php';
    ?>
    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 productView">
                    <?php
                        require_once '../scripts/getProduct.php';
                    ?>
                    <div class="col-lg-12 productOpinions">
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
                                                    <form action="">
                                                        <div class="textarea">
                                                            <textarea cols="30" placeholder="Podziel się spostrzeżeniami"></textarea>
                                                        </div>
                                                        <button class="btn btn-secondary">Dodaj opinię</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
        <?php
            require_once '../scripts/getFooter.php';
        ?>
    </div>
    <script src="../scripts/script.js"></script>
    <script src="../scripts/productRating.js"></script>
</body>
</html>