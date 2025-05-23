<?php
// Configuración inicial
require_once __DIR__ . '/../config/database.php';

// Incluir el controlador
require_once __DIR__ . '/../app/controllers/LibrosController.php';

// Crear instancia del controlador
$controller = new LibrosController($conexion);

// Manejar la acción
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'crear':
        $controller->crear();
        break;
    default:
        $controller->index();
}
?>