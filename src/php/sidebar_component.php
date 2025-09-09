<?php
// src/php/sidebar_component.php
declare(strict_types=1);

/* Cargar db.php sin romper si cambia la ruta */
$paths = [
  __DIR__ . '/db.php',
  __DIR__ . '/../db.php',
  dirname(__DIR__) . '/db.php',
];
$found = false;
foreach ($paths as $p) { if (file_exists($p)) { require_once $p; $found = true; break; } }
if (!$found) { echo "<!-- db.php no encontrado -->"; return; }

/* Detectar conexión (PDO o mysqli) */
function is_pdo($db){ return isset($db) && $db instanceof PDO; }
function is_mysqli_conn($db){ return isset($db) && $db instanceof mysqli; }

$db = null;
if (isset($pdo) && $pdo instanceof PDO) $db = $pdo;
if (!$db && isset($conn) && $conn instanceof mysqli) $db = $conn;
if (!$db && isset($conexion) && $conexion instanceof mysqli) $db = $conexion;
if (!$db) { echo "<!-- sin conexión DB -->"; return; }

/* Helpers de consulta */
function all_assoc($db, string $sql, string $types = '', array $params = []): array {
  if (is_pdo($db)) {
    $st = $db->prepare($sql); $st->execute($params); return $st->fetchAll(PDO::FETCH_ASSOC) ?: [];
  } elseif (is_mysqli_conn($db)) {
    if ($params) { $st = $db->prepare($sql); if(!$st) return []; if ($types) $st->bind_param($types, ...$params); $st->execute(); $res=$st->get_result(); $out=$res? $res->fetch_all(MYSQLI_ASSOC):[]; $st->close(); return $out; }
    $res = $db->query($sql); return $res? $res->fetch_all(MYSQLI_ASSOC):[];
  }
  return [];
}

/* 1) Marcas visibles, ordenadas */
$marcas = all_assoc(
  $db,
  "SELECT marca, orden
   FROM sidebar_config
   WHERE categoria IS NULL AND visible=1
   ORDER BY orden, marca"
);

/* Render del sidebar con tu mismo HTML/clases */
?>
<section>
  <div id="sidebar" class="sidebar">
    <div class="sidebar-header">
      <i id="close-sidebar" class="fas fa-times"></i>
    </div>
    <ul class="sidebar-menu">
      <li><a class="all-products" href="index.php">INICIO</a></li>
      <li><a href="productos.php">VER TODOS LOS PRODUCTOS</a></li>

      <?php foreach ($marcas as $m):
        $marca = $m['marca'];
        $cats = all_assoc(
          $db,
          "SELECT categoria, orden
           FROM sidebar_config
           WHERE marca=? AND categoria IS NOT NULL AND visible=1
           ORDER BY orden, categoria",
          is_pdo($db)?'':'s',
          [$marca]
        );
      ?>
        <li class="has-submenu">
          <div class="submenu-toggle">
            <span><?= htmlspecialchars($marca) ?></span>
            <i class="fas fa-chevron-right arrow-icon"></i>
          </div>
          <ul class="submenu">
            <li><a href="productos.php?marca=<?= urlencode($marca) ?>">Todo <?= htmlspecialchars($marca) ?></a></li>
            <?php foreach ($cats as $c): ?>
              <li><a href="productos.php?marca=<?= urlencode($marca) ?>&categoria=<?= urlencode($c['categoria']) ?>">
                <?= htmlspecialchars($c['categoria']) ?>
              </a></li>
            <?php endforeach; ?>
          </ul>
        </li>
      <?php endforeach; ?>

      <li><a href="#info">CONTACTANOS</a></li>
    </ul>
  </div>
</section>
