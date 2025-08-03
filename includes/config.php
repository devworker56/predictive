<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'u834808878_Dbaccess25');
define('DB_PASS', 'Ossouka@1968');
define('DB_NAME', 'u834808878_signals');

// Admin credentials
define('ADMIN_EMAIL', 'admin@tradingsignals.example');
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'securepassword123');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create tables if they don't exist
$sql = "CREATE TABLE IF NOT EXISTS subscribers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    company VARCHAR(100),
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_email (email)
)";

if (!$conn->query($sql)) {
    die("Error creating table: " . $conn->error);
}

// Close connection
// $conn->close(); // We'll close it explicitly when needed
?>