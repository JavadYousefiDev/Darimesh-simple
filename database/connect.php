<?php
/*
$server = 'localhost';
$dbName = 'darimesh';
$username = 'root';
$password = '';
*/


$servername = "localhost";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$servername;dbname=darimesh2", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


/*$connection = new mysqli($server,$username,$password,$dbName);
if($connection -> connect_errno > 0){
    die( "Error connecting to database ! ----  " .mysqli_connect_error() );
} else {
    echo "Connected";
}*/


