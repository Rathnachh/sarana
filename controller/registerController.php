<?php
/*    require_once('../models/operator.php');
    require_once('../models/user.php');
     ///student registration form

     if(isset($_POST['full_name_kh']) && isset($_POST['en_fullname']) && isset($_POST['person_mobile']))
     {
        $db = new operation;

        $full_namekh = $db->real_esc($_POST['full_name_kh']);

        $full_name_en = $db->real_esc($_POST['en_fullname']);

        $gender = $_POST['gender'];

        $ethnicity = $_POST['ethnicity'];

        $nation = $_POST['nation'];

        $ID_card = $_POST['ID_card'];

        $dob = $_POST['dob'];

        $current_province = $_POST['current_province'];

        $current_district = $_POST['current_destrict'];

        $current_community = $_POST['current_community'];

        $current_village = $_POST['current_village'];

        $province = $_POST['province'];

        $district = $_POST['district'];

        $community = $_POST['community'];

        $village = $_POST['village'];

        $_faculty = $_POST['_faculty'];

        $major = $_POST['major'];

        $_academic = $_POST['_academic'];

        $building_id = $_POST['building_id'];

        $floor_id = $_POST['floor_id'];

        $room_id = $_POST['room_id'];

        $person_mobile = $_POST['person_mobile'];

        $phone_parent = $_POST['phone_parent'];

        $student_type_id = $_POST['student_type'];

        $student_status = $_POST['student_status'];

        $email = $_POST['email'];

        $degree = $_POST['degree'];

        $register_date = date('d-m-Y');

        $password = password_hash('UHSTIT03',PASSWORD_DEFAULT);

        $image_name = "";

        //save image

        $filename = $_FILES["profile_image"]["name"];

        $ext = pathinfo($filename,PATHINFO_EXTENSION);

        $validate = array("jpg","jpeg","png","gif","webp");

        if(in_array($ext,$validate))
        {
            $address_id = $db->_address('',$province,$district,$community,$village);

            $db = new operation;
            $current_address_id = $db->current_address($current_province,$current_district,$current_community,$current_village);

            $image_name = rand().'.'.$ext;
            
            $path = "../public/images/".$image_name;

            move_uploaded_file($_FILES["profile_image"]["tmp_name"],$path);

            $sql = "INSERT INTO tbl_student_information(room_id, fname, name_en,gender, dob, faculty_id, subject_id, degree_id, academic_id, ethnicity_id,

            national_id, current_address_id, address_place_id, person_phone, parent_phone, image, register_date, student_type_id, status_id,acept,card_nation_id) 

            VALUES ($room_id,'$full_namekh','$full_name_en',$gender,'$dob',$_faculty,$major,$degree,$_academic,$ethnicity,$nation,$current_address_id,

            $address_id,'$person_mobile','$phone_parent','$image_name','$register_date',$student_type_id,$student_status,0,'$ID_card')";
            
            $db = new operation;
            $st_id = $db->store_data($sql);
            
            $user = new User();
            $user_id = $user->_users($email,$password,$st_id);
            
            $db = new operation;
            $db->checked_room($room_id);

            $data = array('email' => $email, 'password' => 'UHSTIT03');
            echo json_encode($data);
        }
        
        exit();
     }
?>
*/

    require_once('../models/operator.php');
    require_once('../models/user.php');
     ///student registration form

     if(isset($_POST['full_name_kh']) && isset($_POST['en_fullname']) && isset($_POST['person_mobile']))
     {
        $db = new operation;

        $full_namekh = $db->real_esc($_POST['full_name_kh']);

        $full_name_en = $db->real_esc($_POST['en_fullname']);

        $gender = $_POST['gender'];

        $ethnicity = $_POST['ethnicity'];

        $nation = $_POST['nation'];

        $ID_card = $_POST['ID_card'];

        $dob = $_POST['dob'];

        $current_province = $_POST['current_province'];

        $current_district = $_POST['current_destrict'];

        $current_community = $_POST['current_community'];

        $current_village = $_POST['current_village'];

        $province = $_POST['province'];

        $district = $_POST['district'];

        $community = $_POST['community'];

        $village = $_POST['village'];

        $_faculty = $_POST['_faculty'];

        $major = $_POST['major'];

        $_academic = $_POST['_academic'];

        $building_id = $_POST['building_id'];

        $floor_id = $_POST['floor_id'];

        $room_id = $_POST['room_id'];

        $person_mobile = $_POST['person_mobile'];

        $phone_parent = $_POST['phone_parent'];

        $student_type_id = $_POST['student_type'];

        $student_status = $_POST['student_status'];

        $email = $_POST['email'];

        $degree = $_POST['degree'];

        $register_date = date('d-m-Y');

        $password = password_hash('UHSTIT03',PASSWORD_DEFAULT);

        $image_name = "";

        //save image

        $filename = $_FILES["profile_image"]["name"];

        $ext = pathinfo($filename,PATHINFO_EXTENSION);

        $validate = array("jpg","jpeg","png","gif","webp");

        if(in_array($ext,$validate))
        {
            $address_id = $db->_address('',$province,$district,$community,$village);

            $db = new operation;
            $current_address_id = $db->current_address($current_province,$current_district,$current_community,$current_village);

            $image_name = rand().'.'.$ext;
            
            $path = "../public/images/".$image_name;

            move_uploaded_file($_FILES["profile_image"]["tmp_name"],$path);

            $sql = "INSERT INTO tbl_student_information(room_id, fname, name_en,gender, dob, faculty_id, subject_id, degree_id, academic_id, ethnicity_id,

            national_id, current_address_id, address_place_id, person_phone, parent_phone, image, register_date, student_type_id, status_id,acept,card_nation_id) 

            VALUES ($room_id,'$full_namekh','$full_name_en',$gender,'$dob',$_faculty,$major,$degree,$_academic,$ethnicity,$nation,$current_address_id,

            $address_id,'$person_mobile','$phone_parent','$image_name','$register_date',$student_type_id,$student_status,0,'$ID_card')";
            
            $db = new operation;
            $st_id = $db->store_data($sql);
            
            $user = new User();
            $user_id = $user->_users($email,$password,$st_id);
            
            $db = new operation;
            $db->checked_room($room_id);

            $data = array('email' => $email, 'password' => 'UHSTIT03');
            echo json_encode($data);
        }
        
        exit();
     }
?>
