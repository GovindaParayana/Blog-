<?php
class App {
    protected $controller = 'Home';  // Controller default
    protected $method = 'index';     // Method default
    protected $params = [];          // Parameter kosong sebagai default

    public function __construct() {
        $url = $this->parseUrl();

        // Pastikan URL tidak null sebelum mengaksesnya
        if (isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Memastikan params ada dan tidak kosong
        $this->params = $url ? array_values($url) : [];

        // Jalankan controller, method, dan params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            // Mengurai URL menjadi array
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return []; // Jika tidak ada URL, return array kosong
    }
}