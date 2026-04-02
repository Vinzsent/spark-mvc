<?php
class Home extends Controller {

    public function __construct() {
        // Load models here if needed, e.g.:
        // $this->userModel = $this->model('User');
    }

    /**
     * Landing page — rendered as a fully self-contained view.
     * No shared header/footer templates are loaded here because
     * the landing page has its own custom navbar and layout.
     */
    public function index() {
        $data = [
            'title'       => 'Spark Mobile',
            'description' => 'Delivering Car Wash right from your doorstep',
        ];

        $this->view('home/index', $data);
    }
}
