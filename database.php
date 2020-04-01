<?php
$servername = "localhost";
$username = "test";
$password = "test";
$database = "todo_php1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=" . $database, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "<br>Connection failed: " . $e->getMessage() . "<br>";
    die();
}