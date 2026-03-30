<?php
class Home extends Controller {
    public function __construct(){
        // Here you could load models if needed, e.g.
        // $this->userModel = $this->model('User');
    }

    public function index(){
        $data = [
            'title' => 'SparkMobile',
            'description' => 'Delivering Car Wash right from your doorstep'
        ];

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}
