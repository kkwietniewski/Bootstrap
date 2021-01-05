<?php

    // session_start();

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
            echo "Uzupełnij dane"; 
        }
        else if (strlen($login) < 3 || strlen($login) > 15)
        {
            echo "Długość loginu powinna wynosić od 3 - 15 znaków"; 
        }
        else if ($pass != $validPass)
        {
            echo "Hasła muszą być identyczne" ;
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
                    if ($conn->query("INSERT INTO users VALUES (NULL, '$login', '$email', '$pass')"))
				    {
					    echo "Udana rejestracja"; 
                    }
                    else 
                    {
                        throw new Exception(mysqli_connect_errno());
                    }
                }
            }
            catch(Exception $e)
		    {
			    echo $e;
            }
        }        

    }
        // if (isset($_POST['login']))
        // {
        //     $login = $_POST['login'];
        //     $setLogin = true; 
        // }
        // else 
        // {
        //     $setLogin = false;
        // }

        // if (isset($_POST['email']))
        // {
        //     $email=$_POST['email'];
        // }
        
        // $email=$_POST['email'];
        //     $pass=$_POST['pass'];
        //     $validPass=$_POST['validPass'];
        // && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['validPass']))

        //  if( == null ||  == null ||  == null ||  == null)
        //  {
        //      echo "Uzupełnij"
        //  }
        // {
            
        // }
        // else 
        // {
               
        

?>