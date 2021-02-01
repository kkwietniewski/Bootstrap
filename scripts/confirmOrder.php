<?php

    session_start(); 
    require_once '../scripts/connect.php'; 

    if (!empty($_SESSION['logged']))
    {
        $userId = $_SESSION['logged']; 

        if (!empty($_POST['nameSurname']) || !empty($_POST['routeNumber']) || !empty($_POST['postcode']) || !empty($_POST['city']) 
        || !empty($_POST['email']) || !empty($_POST['telephone']))
        {
            $name = $_POST['nameSurname'];
            $adress = $_POST['routeNumber'];
            $postcode = $_POST['postcode']; 
            $city = $_POST['city']; 
            $email = $_POST['email']; 
            $telephone = $_POST['telephone']; 

    try
    {
        if ($conn->connect_errno!=0)
        {
            throw new Exception(mysqli_connect_errno()); 
        }
        else 
        {
            if ($result = @$conn->query(sprintf("SELECT * FROM users WHERE user_id = '%s' ", mysqli_real_escape_string($conn, $userId))))
            {
                echo $userId; 
            }
        }
    }
    catch (Exception $e)
    {
        echo $e;
    }
}
}
else 
{
    echo<<<NOTLOGGED
    <div>Proszę się zalogować!</div<
NOTLOGGED;
}

?>