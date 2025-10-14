<?php
namespace app\controllers;

class DiasController {
    public function lunes() {
        return $this->view('dias/LunesView', ['title' => 'Lunes']);
    }

    public function martes() {
        return $this->view('dias/MartesView', ['title' => 'Martes']);
    }

    public function miercoles() {
        return $this->view('dias/MiercolesView', ['title' => 'Miércoles']);
    }

    public function jueves() {
        return $this->view('dias/JuevesView', ['title' => 'Jueves']);
    }

    public function viernes() {
        return $this->view('dias/ViernesView', ['title' => 'Viernes']);
    }

    private function view($vista, $data = []) {
        extract($data);
        $ruta = "../app/views/$vista.php";
        if (file_exists($ruta)) {
            ob_start();
            include $ruta;
            return ob_get_clean();
        } else {
            echo "Vista no encontrada: $vista";
        }
    }
}
