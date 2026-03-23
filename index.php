<?php

echo "Hello World, version 3<br>";

$con = mysqli_init();

if (!mysqli_real_connect(
    $con,
    "hello-php-bd-fsegs-server.mysql.database.azure.com",
    "boahhaiygn",
    'nCv0EyM$eJzNRO5q',
    "hello-php-bd-fsegs-database",
    3306
)) {
    die("Connexion échouée : " . mysqli_connect_error());
}

echo "Connexion à la base de données réussie<br>";
?>
