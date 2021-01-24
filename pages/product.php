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
    <div>
    <?php
        require_once '../scripts/getProduct.php';
    ?>
    </div>
</body>
</html>