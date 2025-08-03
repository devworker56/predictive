<?php
include 'includes/config.php';
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $company = isset($_POST['company']) ? sanitize_input($_POST['company']) : null;
    $phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : null;
    
    try {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM subscribers WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Email exists, redirect to coming soon page
            header("Location: /pages/coming-soon.php?existing=1");
            exit();
        }
        
        // Insert new subscriber
        $stmt = $conn->prepare("INSERT INTO subscribers (name, email, company, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $company, $phone);
        
        if ($stmt->execute()) {
            // Send notification to admin
            send_admin_notification($name, $email, $company, $phone);
            
            // Send confirmation to user
            send_user_confirmation($name, $email);
            
            // Redirect to coming soon page
            header("Location: /pages/coming-soon.php");
            exit();
        } else {
            throw new Exception("Database error: " . $stmt->error);
        }
    } catch (Exception $e) {
        // Log error and redirect to error page
        error_log($e->getMessage());
        header("Location: /pages/error.php");
        exit();
    }
} else {
    // Not a POST request, redirect to home
    header("Location: /");
    exit();
}
?>