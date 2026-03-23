<?php
echo "Hello World, version 25";
$con = mysqli_init();
$sslCa = __DIR__ . '/DigiCertGlobalRootCA.crt.pem';
mysqli_ssl_set($con,NULL,NULL,$sslCa, NULL, NULL);
mysqli_real_connect($conn, "hbd-server.mysql.database.azure.com", "zgnrykaexx", "{QRcUNiXHn$f0O3Gl}", "{hbd-database}", 3306, MYSQLI_CLIENT_SSL);
echo "Hello World, version 3";
?>
