<!-- // app/core/Controller.php -->
<?php

class Controller {
    // Method untuk memuat model
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    // Method untuk memuat view
    public function view($view, $data = []) {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View does not exist.');
        }
    }
}