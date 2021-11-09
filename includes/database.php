<?php

	


$db = mysqli_connect('b34fxzjlv6nu2q2097af-mysql.services.clever-cloud.com', 'uunb7a6rhfyihzto', 'qGZeWoHnYxb9yOuOtl9e', 'b34fxzjlv6nu2q2097af');


//$db = mysqli_connect('localhost', 'root', 'root', 'appsalon_');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}