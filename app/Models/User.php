<?php
class User {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // Example of a secure method using PDO prepared statements against SQL injection
    public function findUserById($id){
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    // Example secure login function using password_verify()
    public function login($email, $password){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if($row){
            // Checking the hashed string against password
            $hashedPassword = $row->password;
            if(password_verify($password, $hashedPassword)){
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // Example secure registration logic using password_hash()
    public function register($data){
        // Hash the password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}
