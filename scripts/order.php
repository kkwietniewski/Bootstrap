<?php
  session_start();
    
  require_once './connect.php';

  if (isset($_POST['nameSurname']) && isset($_POST['routeNumber']) && isset($_POST['postcode']) && isset($_POST['city']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['paymentRatios']) && isset($_POST['supplyRatios']))
  {
    $nameSurname = $_POST['nameSurname'];
    $routeNumber = $_POST['routeNumber'];
    $postcode = $_POST['postcode'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $paymentValue = $_POST['paymentRatios'];
    $supplyValue = $_POST['supplyRatios'];
  }

  if ($nameSurname == null || $routeNumber == null || $postcode == null || $city == null || $email == null || $telephone == null || $paymentValue == null || $supplyValue == null)
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
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $_SESSION['error'] = "Podaj poprawny e-mail!"; 
        header('Location: ../pages/order.php'); 
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
                    if ($result = @$conn->query(sprintf("SELECT * FROM users WHERE email ='%s'", $email)))
                    {
                        $users = $result->num_rows;
                        if ($users == 0)
                        {
                            $_SESSION['error'] = "Nie ma użytkowanika o takim emailu!"; 
                            header ('Location: ../pages/order.php'); 
                        }
                        else {
                            
                            $_SESSION['ordered'] = "Zamówienie zostało złożone!"; 
                            header ('Location: ../pages/order.php');
                        }
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