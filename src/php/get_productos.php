<?php
require_once 'db.php';

$orden = $_GET['orden'] ?? '';
$busqueda = $_GET['busqueda'] ?? '';
$marca = $_GET['marca'] ?? '';
$categoria = $_GET['categoria'] ?? '';

$sql = "SELECT id,nombre, descripcion, categoria, marca, precio, preciomayorista, imagen FROM productos WHERE habilitado = 1";

// Búsqueda
if (!empty($busqueda)) {
    $busqueda = $conn->real_escape_string($busqueda);
    $sql .= " AND (nombre LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' OR marca LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%')";
}

// Filtro por marca
if (!empty($marca)) {
    $marca = $conn->real_escape_string($marca);
    $sql .= " AND marca LIKE '%$marca%'";
}

// Filtro por categoría
if (!empty($categoria)) {
    $categoria = $conn->real_escape_string($categoria);
    $sql .= " AND categoria LIKE '%$categoria%'";
}

// Ordenamiento
switch ($orden) {
    case "preciomenor":
        $sql .= " ORDER BY precio ASC";
        break;
    case "preciomayor":
        $sql .= " ORDER BY precio DESC";
        break;
    case "az":
        $sql .= " ORDER BY nombre ASC";
        break;
    case "za":
        $sql .= " ORDER BY nombre DESC";
        break;
}

$result = $conn->query($sql);
$productos = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($productos);
$conn->close();
?>
