<?php
require_once 'db.php'; // tu archivo de conexión
//WHERE habilitado = 1
$sql = "SELECT nombre, descripcion, categoria, marca, precio, preciomayorista, imagen FROM productos";
$result = $conn->query($sql);

$productos = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

echo json_encode($productos);
$conn->close();
?>