<?php
session_start();

// Clear session variables for different user roles
if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_name'])) {
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin_name']);
}
if (isset($_SESSION['student_name']) && isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['student_name']);
}
if (isset($_SESSION['emp_role'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['emp_role']);
}

// Destroy the session
session_destroy();

// Ensure the session cookie is deleted
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to index page
header('Location: index.php');
exit;
?>
