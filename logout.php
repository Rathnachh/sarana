<?php
    session_start();
    if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_name']))
    {
        $_SESSION['admin_id'] = '';
        $_SESSION['admin_name'] ='';
        session_destroy();
    }
    if(isset($_SESSION['student_name']) && isset($_SESSION['user_id']))
    {
        $_SESSION['user_id'] = '';
        $_SESSION['student_name'] ='';
        session_destroy();
    }
    if(isset($_SESSION['emp_role']))
    {
        $_SESSION['user_id'] = '';
        $_SESSION['emp_role'] ='';
        session_destroy();
    }
    header("location:index.php");
?>