<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$productos = $data['productos'];
$total = $data['total'];
$total_mayorista = $data['total_mayorista'];

// Convertimos los productos a JSON solo para guardar en la tabla ventas
$productos_json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$conn->begin_transaction(); // 🛡️ Iniciar transacción

try {
    // Insertar la venta
    $stmt = $conn->prepare("INSERT INTO ventas (productos, total, total_mayorista) VALUES (?, ?, ?)");
    $stmt->bind_param("sdd", $productos_json, $total, $total_mayorista);
    $stmt->execute();
    $stmt->close();

    // Actualizar stock de cada producto
    $stmtUpdate = $conn->prepare("UPDATE productos SET stock = stock - ? WHERE id = ? AND stock >= ?");
    foreach ($productos as $prod) {
        $cantidadVendida = intval($prod['cantidad']);
        $productoId = intval($prod['id']);
        $stmtUpdate->bind_param("iii", $cantidadVendida, $productoId, $cantidadVendida);
        $stmtUpdate->execute();

        if ($stmtUpdate->affected_rows === 0) {
            // Si no se pudo restar stock (por ejemplo, por inconsistencia), cancelar todo
            throw new Exception("Error al actualizar el stock del producto ID $productoId");
        }
    }
    $stmtUpdate->close();

    $conn->commit(); // ✅ Confirmamos todo
    http_response_code(200);
    echo "Venta guardada y stock actualizado";
} catch (Exception $e) {
    $conn->rollback(); // ❌ Si algo falló, revertimos todo
    http_response_code(500);
    echo "Error: " . $e->getMessage();
}

$conn->close();
