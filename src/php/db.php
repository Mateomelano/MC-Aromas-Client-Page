<?php

$host = "185.211.7.154"; // o el host específico que te da Hostinger (ej: `srv123.main-hosting.eu`)
$user = "u617835785_root"; // tu usuario exacto
$password = "Merceriachela1"; // tu contraseña real
$dbname = "u617835785_mc_aromas";

$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>