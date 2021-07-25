<?php

$servername = "localhost";
$database   = "emrekotuz";
$username   = "root";
$password   = "";

try {
    $db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Bağlantı başarılı";
    }
catch(PDOException $e)
    {
    echo "Veritabanı Bağlantı Hatası: " . $e->getMessage();
    }


?>
