<?php
// functions.php

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function is_admin_logged_in() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function redirect_if_not_admin() {
    if (!is_admin_logged_in()) {
        header("Location: login.php");
        exit();
    }
}

function get_subscriber_count($conn) {
    $count = 0;
    $result = $conn->query("SELECT COUNT(*) as count FROM subscribers");
    if ($result) {
        $row = $result->fetch_assoc();
        $count = $row['count'];
    }
    return $count;
}
?>