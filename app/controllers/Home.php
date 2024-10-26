<!-- // app/controllers/Home.php -->
<?php
class Home extends Controller {
    public function index() {
        $this->view('home/index');
    }
}