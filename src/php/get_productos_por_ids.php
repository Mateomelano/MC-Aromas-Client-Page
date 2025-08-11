<?php
require_once 'db.php'; // crea $conn (mysqli)
header('Content-Type: application/json; charset=utf-8');
// Evitar que warnings/notice rompan el JSON
ini_set('display_errors', 0);
ini_set('log_errors', 1);
// header opcional anti-cache
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        echo json_encode(['productos' => [], 'error' => 'Método no permitido']);
        exit;
    }

    $raw = file_get_contents('php://input');
    $input = json_decode($raw, true);

    // Validar payload
    if (!is_array($input) || !isset($input['ids']) || !is_array($input['ids'])) {
        echo json_encode(['productos' => []]);
        exit;
    }

    // Sanitizar a enteros y eliminar duplicados
    $ids = array_values(array_unique(array_map('intval', $input['ids'])));
    if (empty($ids)) {
        echo json_encode(['productos' => []]);
        exit;
    }

    // Como ya forzamos enteros, podemos armar el IN de forma segura
    $idsCsv = implode(',', $ids);

    $sql = "
        SELECT id, nombre, precio, preciomayorista, imagen, stock
        FROM productos
        WHERE id IN ($idsCsv)
    ";

    $res = $conn->query($sql);
    if (!$res) {
        http_response_code(500);
        echo json_encode([
            'productos' => [],
            'error' => 'DB query error',
            'detail' => $conn->error
        ]);
        exit;
    }

    $rows = $res->fetch_all(MYSQLI_ASSOC);
    // Forzar tipos numéricos (opcional pero recomendado)
    foreach ($rows as &$r) {
        $r['id'] = (int)$r['id'];
        $r['precio'] = (float)$r['precio'];
        $r['preciomayorista'] = (float)$r['preciomayorista'];
        $r['stock'] = (int)$r['stock'];
    }

    echo json_encode(['productos' => $rows], JSON_UNESCAPED_UNICODE);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'productos' => [],
        'error' => 'Server error',
        'detail' => $e->getMessage()
    ]);
}
