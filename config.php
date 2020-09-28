<?php

$db_host = "database-1.caietkyjb9uv.ap-southeast-1.rds.amazonaws.com";
$db_user = "root";
$db_pass = "rootroot";
$db_name = "dbdb";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
