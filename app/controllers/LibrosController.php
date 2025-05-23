<?php
require_once __DIR__ . '/../models/Libro.php';

class LibrosController {
    private $model;
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
        $this->model = new Libro($conexion);
    }

    public function index() {
        $libros = $this->model->listar();
        require_once __DIR__ . '/../views/libros/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Procesar formulario
        } else {
            require_once __DIR__ . '/../views/libros/crear.php';
        }
    }
}
?>