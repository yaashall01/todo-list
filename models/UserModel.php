<?php

class UserModel {
    private $db; // Database connection (you will need to set this up in a separate file)

    public function __construct($db) {
        $this->db = $db;
    }

    public function registerUser($username, $hashedPassword) {
        // Insert a new user into the database (replace 'users' with your actual table name).
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        return $stmt->execute();
    }

    public function getUserByUsername($username) {
        // Retrieve user information from the database by username.
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
