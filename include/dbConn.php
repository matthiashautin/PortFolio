<?php
$servername = "mysql-hautin.alwaysdata.net";
$username = "hautin_portfolio";
$password = "administrateur";
$db_name = "hautin_portfolio";
try {
    $conn = new PDO("mysql:host=$servername;dbname=hautin_portfolio", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>

