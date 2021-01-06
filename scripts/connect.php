<?php
$conn= new mysqli('db', 'root', 'password123', 'paiproject');
$conn->query("SET NAMES 'utf8'"); 
if (!$conn)
{
    echo "Polaczono:)";
}
?>