<?php
echo "Hello World, version 26";
$con = mysqli_init();
$sslCa = __DIR__ . '/DigiCertGlobalRootCA.crt.pem';
mysqli_ssl_set($con,NULL,NULL,$sslCa, NULL, NULL);
if (! mysqli_real_connect($conn, "hbd-server.mysql.database.azure.com", "zgnrykaexx", "{QRcUNiXHn$f0O3Gl}", "{hbd-database}", 3306, MYSQLI_CLIENT_SSL);
)) {
    die("Connexion échouée : " . mysqli_connect_error());
}echo "Hello World, version 3";
?>
