<?php
class Home extends Controller {
    public function __construct(){
        // Here you could load models if needed, e.g.
        // $this->userModel = $this->model('User');
    }

    public function index(){
        $data = [
            'title' => 'Welcome to Spark MVC',
            'description' => 'A clean, secure, and maintainable PHP MVC architecture built with modern CSS.'
        ];

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}
