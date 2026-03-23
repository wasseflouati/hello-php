<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Hello World, version 31<br>";

$con = mysqli_init();
$sslCa = __DIR__ . '/DigiCertGlobalRootCA.crt.pem';

mysqli_ssl_set($con, NULL, NULL, $sslCa, NULL, NULL);

if (!mysqli_real_connect(
    $con,
    "hbd-server.mysql.database.azure.com",
    "zgnrykaexx",
    'QRcUNiXHn$f0O3Gl',
    "hbd-database",
    3306,
    NULL,
    MYSQLI_CLIENT_SSL
)) {
    die("Connexion échouée : " . mysqli_connect_error());
}

echo "Hello World, version 3<br>";
echo "Connexion réussie";
?>
