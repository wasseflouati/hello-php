<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Hello World, version 32<br>";

$con = mysqli_init();

if (!mysqli_real_connect(
    $con,
    "hbd-server.mysql.database.azure.com",
    "zgnrykaexx",
    'QRcUNiXHn$f0O3Gl',
    "hbd-database",
    3306
)) {
    die("Connexion échouée : " . mysqli_connect_error());
}

echo "Connexion réussie<br>";
?>
