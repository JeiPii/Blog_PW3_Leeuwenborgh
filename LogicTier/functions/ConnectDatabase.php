<?php
$servername = "localhost";
$username = "Webserver";
$password = "dD25CpeSUEwe";
$dbName = "blogJP"; //TODO: Change to blogJP when pushing to main
try {
    $db_conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    // set the PDO error mode to exception
    $db_conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Succesfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>