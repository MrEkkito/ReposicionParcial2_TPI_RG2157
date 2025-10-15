<?php
namespace app\controllers;
require_once $_SERVER['DOCUMENT_ROOT'] . "/conexionphp/database.php";

class VisitasController {

    private $conn;

    public function __construct() {
        $db = new \Database();
        $this->conn = $db->getConnection();
    }

    public function form() {
        return $this->view('visitas/FormView', ['title' => 'Registrar Comentario']);
    }

    public function store() {
        $nombre = $_POST['nombre'] ?? '';
        $usuario = $_POST['usuario'] ?? '';
        $correo = $_POST['correo'] ?? '';
        $comentario = $_POST['comentario'] ?? '';

        $stmt = $this->conn->prepare("INSERT INTO comentarios (nombre, usuario, correo, comentario, fecha) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$nombre, $usuario, $correo, $comentario]);

        // Redirigir a la página de comentarios
        header("Location: /mvc_clase/public/visitas/comentarios");
        exit;
    }

    public function index() {
        $stmt = $this->conn->query("SELECT * FROM comentarios ORDER BY fecha DESC");
        $comentarios = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $this->view('visitas/ComentariosView', ['title' => 'Comentarios', 'comentarios' => $comentarios]);
    }

    private function view($vista, $data=[]) {
        extract($data);
        if(file_exists("../app/views/$vista.php")) {
            ob_start();
            include "../app/views/$vista.php";
            return ob_get_clean();
        } else {
            echo "Vista no encontrada: $vista";
        }
    }
}
