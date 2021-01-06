<?php

    session_start();
   
    require_once './connect.php';

    if(!$conn)
    {
        echo "Error"; 
    }
    else
    {
        $login = $_POST['login']; 
        $pass = $_POST['pass']; 
        
        if ($result = @$conn->query(sprintf("SELECT * FROM users WHERE login ='%s'", mysqli_real_escape_string($conn,$login))))
        {
            $users = $result->num_rows;
            if ($users > 0)
            {
                $line = $result->fetch_assoc(); 
                $dbLogin = $line['login']; 
                $dbPass = $line['password']; 
                if ($login == $dbLogin && $pass == $dbPass)
                {
                    $conn->close();
                    header('Location: ../pages/index.php'); 
                }
                else 
                {
                    $_SESSION['error'] = 'Nieprawidłowy login lub hasło';
                    header('Location: ../pages/login.php'); 
                }
                
            }
            else 
            {   
                $_SESSION['error'] = 'Taki użytkownik nie istnieje';
                header('Location: ../pages/login.php'); 
            }

             
        }
        else 
        {
            $_SESSION['error'] = 'Taki użytkownik nie istnieje';
            header('Location: ../pages/login.php');
        }

    }

?>