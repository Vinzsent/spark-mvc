<?php
class Dashboard extends Controller {
    public function __construct(){
        if(!isset($_SESSION['user_id'])){
            redirect('users/login');
        }
    }

    public function index(){
        $role = $_SESSION['user_role'] ?? 'user';
        
        $data = [
            'title' => 'Dashboard',
            'user_name' => $_SESSION['user_name'],
            'role' => $role
        ];

        if($role === 'admin'){
            $this->view('dashboard/admin', $data);
        } else {
            $this->view('dashboard/user', $data);
        }
    }
}
