<?php
// holding session variable to check if logged in or not
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "Take2Tech";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}


include_once '../../classes/Class.Admin.php';
$admin = new ADMIN($conn);
// creating new USER object passing in connection
include_once '../../classes/Class.Customer.php';
$customer = new CUSTOMER($conn);
// creating new CUSTOMER object passing in connection

?>