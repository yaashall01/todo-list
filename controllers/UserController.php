<?php

require_once 'models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function registerUser($username, $password) {
        // Add user registration logic here (e.g., validate inputs, hash the password, and insert into the database)
        if ($this->userModel->registerUser($username, password_hash($password, PASSWORD_BCRYPT))) {
            return "Registration Successful";
            } else {
                return "Error in Registration";
                }
                }
        // You'll need to create a registration form in your view and handle the POST request here.

    }

    public function loginUser($username, $password) {
        // Add user login logic here (e.g., check credentials, set session variables, and authenticate)
        $result = $this->userModel->loginUser($username);
        if(password_verify($password, $result['Password'])){
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $result['ID'];
            $_SESSION["name"] = $result['Name'];
            echo("Login successful");
            }else{
                echo ("Incorrect username or password.");
                }

        // You'll need to create a login form in your view and handle the POST request here.

    }

    public function logoutUser() {
        // Log out the user by destroying the session and unsetting session variables.
        session_start();
        session_unset();
        session_destroy();

        // Redirect the user to the login page or another appropriate location.
        header('Location: login.php');
    }
}
