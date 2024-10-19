<?php
require_once('../models/operator.php');
require_once('../models/user.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $db = new operation;

    // Collect email and password
    $email = $db->real_esc($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert student info with email (adjust according to your table structure)
    $sql = "INSERT INTO tbl_users (email, register_date) VALUES ('$email', NOW())";
    $st_id = $db->store_data($sql);

    if ($st_id) {
        $user = new User();
        $user_id = $user->_users($email, $password, $st_id); // Insert into user table

        if ($user_id) {
            $data = array('email' => $email, 'message' => 'User registered successfully');
            echo json_encode($data);
        } else {
            echo json_encode(array('error' => 'Failed to create user account'));
        }
    } else {
        echo json_encode(array('error' => 'Failed to register student information'));
    }

    exit();
}

?>

