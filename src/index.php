<?php

$host = "db";
$user = "root";
$password = "123456";
$database = "practica";

$conn = new mysqli($host, $user, $password, $database);

echo "<h1>Hola Mundo desde Docker</h1>";

if ($conn->connect_error) {
    die("<p>No se pudo conectar a MySQL</p>");
}

echo "<p>Conexión a MySQL exitosa.</p>";

$conn->close();

?>