<?php
try {
    // Database configuration
    $db_host = 'localhost';
    $db_name = 'pharmacy';
    
    $username = 'root';
    $password = ''; // Change this if your MySQL root has a password

    // DSN with custom port
    $dsn = "mysql:host=$db_host;port=3306;dbname=$db_name;charset=utf8mb4";

    // Create a new PDO instance
    $conn = new PDO($dsn, $username, $password);

    // Set error mode to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: Uncomment for success message
    // echo "Connected successfully!";
} catch (PDOException $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}
?>
