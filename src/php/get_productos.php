<?php
require_once 'db.php';

$orden = $_GET['orden'] ?? '';
$busqueda = $_GET['busqueda'] ?? '';
//WHERE habilitado = 1
$sql = "SELECT nombre, descripcion, categoria, marca, precio, preciomayorista, imagen FROM productos WHERE habilitado = 1";


// Búsqueda
// Búsqueda
if (!empty($busqueda)) {
    $busqueda = $conn->real_escape_string($busqueda);
    $sql .= " AND (nombre LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%')";
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
