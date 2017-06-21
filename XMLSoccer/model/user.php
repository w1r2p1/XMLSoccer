<?php
require_once('database.php');

class User {

    public $id;
    public $email;
    public $username;
    public $password;
    public $confirmpassword;
    public $created;
    public $status;

    public $db = '';
    public function __construct(){
        $this->db = new Database;
    }

    // Register user
    public function registerUser($email, $username, $password, $confirmpassword){
        $reg_email = $email;
        $reg_username = $username;
        $reg_password = $password;
        $reg_confirmpassword = $confirmpassword;

        $query = $this->db->pdo->prepare("INSERT INTO user(email,username,password,confirmpassword,created)
                                                    values(:email,:username,:password,:confirmpassword,CURRENT_TIMESTAMP)");
        $query->bindValue(':email', $reg_email);
        $query->bindValue(':username', $reg_username);
        $query->bindValue(':password', password_hash($reg_password, PASSWORD_BCRYPT));
        $query->bindValue(':confirmpassword', password_hash($reg_confirmpassword, PASSWORD_BCRYPT));
        $query->execute();
        // call loginUser()
        $this->loginUser($reg_email, $reg_password);
    }

    // Login user
    public function loginUser($email, $password){
        $login_email = $email;
        $login_password = $password;
        $query = $this->db->pdo->prepare('SELECT * FROM user WHERE email = :email');
        $query->bindValue(':email', $login_email);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $db_password = $row['password'];
        if(password_verify($login_password, $db_password)) {
            $_SESSION['user']['id'] = $row['id'];
            $_SESSION['user']['username'] = $row['username'];
            $_SESSION['user']['email'] = $row['email'];
            $_SESSION['user']['created'] = $row['created'];
            $_SESSION['user']['status'] = $row['status'];
            return true;
        } else {
            return false;
        }

    }

    // Check if user is logged in:  true | false
    public function isLoggedIn() {
        return isset($_SESSION['user']);
    }

    // Check if email is available:  true | false
    public function isAllowed($email) {
        $new_email = $email;

        $query = $this->db->pdo->prepare('SELECT * FROM user WHERE email = :email');
        $query->bindValue(':email', $new_email);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result == false) {
            return true;
        } else {
            return false;
        }
    }

}
