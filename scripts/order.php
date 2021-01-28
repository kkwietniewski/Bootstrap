<?php
  session_start();
    
  require_once './connect.php';

  if (isset($_POST['nameSurname']) && isset($_POST['routeNumber']) && isset($_POST['postcode']) && isset($_POST['city']) && isset($_POST['telephone']) && isset($_POST['paymentRatios']) && isset($_POST['supplyRatios']))
  {
    $nameSurname = $_POST['nameSurname'];
    $routeNumber = $_POST['routeNumber'];
    $postcode = $_POST['postcode'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $paymentValue = $_POST['paymentRatios'];
    $supplyValue = $_POST['supplyRatios'];

    $_SESSION['cartCost'] += $paymentValue; 
    $_SESSION['cartCost'] += $supplyValue; 
  }

  if ($nameSurname == null || $routeNumber == null || $postcode == null || $city == null || $telephone == null || $paymentValue == null || $supplyValue == null)
  {
      $_SESSION['error'] = "Uzupełnij wszystkie dane"; 
      header ('Location: ../pages/order.php');
  }
  else {

    if (strlen($nameSurname) < 6 || strlen($nameSurname) > 25)
    {
      $_SESSION['error'] = "Długość imienia i nazwiska powinna wynosić od 6 - 25 znaków!"; 
      header ('Location: ../pages/order.php');
    }
    else if (strlen($routeNumber) < 6 || strlen($routeNumber) > 25)
    {
      $_SESSION['error'] = "Długość długość ulicy i numeru powinna wynosić od 6 - 25 znaków!"; 
      header ('Location: ../pages/order.php');
    }
    else if (strlen($postcode) < 5)
    {
      $_SESSION['error'] = "Długość kodu pocztowego powinna równa 5 cyfom!"; 
      header ('Location: ../pages/order.php');
    }
    else if (strlen($city) < 3 || strlen($city) > 15)
    {
      $_SESSION['error'] = "Długość nazwy miasta powinna wynosić od 3 - 15 znaków!"; 
      header ('Location: ../pages/order.php');
    }
    else if (strlen($telephone) < 9)
    {
      $_SESSION['error'] = "Długość numeru telefonu powinna równa 9 cyfom!"; 
      header ('Location: ../pages/order.php');
    }
    else
    {
        require_once "connect.php"; 

        try 
        {
          if ($conn->connect_errno!=0)
          {
            throw new Exception(mysqli_connect_errno());
          }
                else 
                {
                  if ($conn->query("INSERT INTO `users_data` (`id`, `user_id`, `name`, `surname`, `address`, `post-code`, `city`) VALUES (NULL, '$_SESSION[logged]', '$nameSurname', 'Nogala', '$routeNumber', '12345', '$city')"))
                  {
                      echo 'ok';
                  }
               }
              }
        catch(Exception $e)
    {
      echo $e;
        }
    }        

}            
?>