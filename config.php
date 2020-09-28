<?php

$db_host = getenv($db_host);
$db_user = getenv($db_user);
$db_pass = getenv($db_pass);
$db_name = getenv($db_name);

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
