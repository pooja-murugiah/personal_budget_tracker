<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db_connection.php';
    
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    
    // Check if username exists in the database
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username=? OR email=?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password is correct, set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            echo "Login successful!";
            // Redirect to your protected page
            // header("Location: dashboard.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
    
    $stmt->close();
