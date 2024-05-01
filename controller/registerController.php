<?php
    require_once('../models/operator.php');
    require_once('../models/user.php');
     ///student registration form

     if(isset($_POST['full_name_kh']) && isset($_POST['en_fullname']) && isset($_POST['person_mobile']))
     {
        $db = new operation;

        $full_namekh = $db->real_esc($_POST['full_name_kh']);

        $full_name_en = $db->real_esc($_POST['en_fullname']);

        $gender = $_POST['gender'];

        $person_mobile = $_POST['person_mobile'];

        $email = $_POST['email'];

        $register_date = date('d-m-Y');

        $password = password_hash('UHSTIT03',PASSWORD_DEFAULT);

        if(in_array($ext,$validate))
        {

            $db = new operation;
            
            $sql = "INSERT INTO tbl_student_information( fname, name_en,gender, person_phone, register_date) 

            VALUES ('$full_namekh','$full_name_en',$gender,'$dob'

            '$person_mobile','$register_date')";
            
            $db = new operation;
            $st_id = $db->store_data($sql);
            
            $user = new User();
            $user_id = $user->_users($email,$password,$st_id);

            $data = array('email' => $email, 'password' => 'UHSTIT03');
            echo json_encode($data);
        }
        
        exit();
     }
?>