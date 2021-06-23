<?php
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $database = 'customhoodboyz';
    
    $conn = new mysqli($host, $user, $passwd, $database);

    if (!$conn) {
        die("Error. No se pudo conectar : " . mysqli_connect_error());
    }

?>