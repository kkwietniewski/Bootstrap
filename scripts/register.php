<?php

    session_start();

    if (isset($_POST['register']))
    {
        if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['validPass']))
        {
            $login = $_POST['login'];
            $email = $_POST['email']; 
            $pass = $_POST['pass']; 
            $validPass = $_POST['validPass']; 
        }

        if ($login == null || $email == null || $pass == null || $validPass == null)
        {
            $_SESSION['err'] = "Uzupełnij dane!";
            header ('Location: ../pages/registration.php');
        }
        else if (strlen($login) < 3 || strlen($login) > 15)
        {
           $_SESSION['err'] = "Długość loginu powinna wynosić od 3 - 15 znaków!"; 
           header ('Location: ../pages/registration.php');
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['err'] = "Podaj poprawny e-mail!"; 
            header('Location: ../pages/registration.php'); 
        }
        else if ($pass != $validPass)
        {
            $_SESSION['err'] = "Hasła muszą być identyczne!";
            header ('Location: ../pages/registration.php');
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
                    if ($result = @$conn->query(sprintf("SELECT * FROM users WHERE email ='%s' OR login = '%s' ", $email, $login)))
                    {
                        $users = $result->num_rows;
                        if ($users > 0)
                        {
                            $_SESSION['err'] = "Taki użytkownik już istnieje!"; 
                            header ('Location: ../pages/registration.php'); 
                        }
                        else {
                            $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
                            if ($conn->query("INSERT INTO users VALUES (NULL, '$email', '$login','$hash_pass')"))
                            {
                                $_SESSION['registered'] = "Konto zostało utworzone. Zaloguj sie!"; 
                                header ('Location: ../pages/login.php');
                            }
                            else 
                            {
                                throw new Exception(mysqli_connect_errno());
                            }
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