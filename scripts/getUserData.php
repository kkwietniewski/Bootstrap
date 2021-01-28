<?php

    session_start(); 
    require_once '../scripts/connect.php'; 

    if (!empty($_SESSION['logged']))
    {
        $userId = $_SESSION['logged']; 

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
                $users = $result->num_rows; 
                if ($users > 0)
                {
                    $line = $result->fetch_assoc(); 
                    echo<<<EMAIL
                    <div>
                    <input class="regInp fadeIn fifth" name="email" type="text" value = $line[email] disabled>
                    </div>
EMAIL;
                    
                }
            }
        }
        $conn->close(); 
    }
    catch (Exception $e)
    {
        echo $e;
    }
}

?>


