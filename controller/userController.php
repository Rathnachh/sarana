<?php
    require_once('../models/operator.php');
    require_once('../models/user.php');

    if(isset($_POST['get_user']))
    {
        $db = new operation();
        $data = $db->manage_user();
        echo json_encode($data);
        exit();
    } 

    if(isset($_POST['_ID'])) ///active feature
    {
        $db = new operation;
        $id = $_POST['_ID'];
        $feature = $db -> _active('tbl_users','id',$id);
        $str = "UPDATE tbl_users SET feature = $feature WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }

    if(isset($_POST['user_role']))
    {
        $db = new operation;
        $id = $_POST['id'];
        $user_role = $_POST['user_role'];
        $sql = "UPDATE tbl_users SET role_id = $user_role WHERE id=$id";
        echo $db->store_data($sql,$id);
        exit();
    } 
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $db=new User;
        if (!empty($_POST['remember'])) 
        {
            setcookie("username", $_POST['username'], time()+(30*24*60*60), '/');
            setcookie("password", $_POST['password'], time()+(30*24*60*60), '/');
        } 
        else 
        {
            setcookie("username", "", 1, '/');
            setcookie("password", "", 1, '/');
        }
        echo $db->login($_POST['username'],$_POST['password']);
    }

    if(isset($_POST['new_password']) && isset($_POST['confirm_password']))
    {
        $db = new User;
        $pasword = password_hash($_POST['new_password'],PASSWORD_DEFAULT);
        $user_id = $_POST['user_id'];
        echo $db->change_password($pasword,$user_id);
        exit();
    }

    if(isset($_POST['reset_password']))
    {
        $db = new User;
        $pasword = password_hash('UHSTIT03',PASSWORD_DEFAULT);
        $user_id = $_POST['reset_password'];
        echo $db->change_password($pasword,$user_id);
        exit();
    }

?>