<?php
    require_once('../models/operator.php');
    require_once('../models/user.php');

    if(isset($_POST['building_name']))//add new building
    {
        $db = new operation;
        $name = $db->real_esc($_POST['building_name']);
        $str = "INSERT INTO tbl_building (building_name) values('".$name."')";
        echo $db->store_data($str);
        exit(); 
    }

    if(isset($_POST['ubuilding_name']) && isset($_POST['_id']))//add new buildingedit new building
    {
        $db = new operation;
        $id = $_POST['_id'];
        $name = $db->real_esc($_POST['ubuilding_name']);
        $str = "UPDATE tbl_building SET building_name = '$name' WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }


    if(isset($_POST['_select_all_row'])) //select all rows building_name
    {
        $db = new operation;
        $datas = $db->query_view('tbl_building','id','','');
        echo json_encode($datas);
        exit();
    }


    ///select dropdown list from for ethnicity table

    if(isset($_POST['_select_ethnicity_rows'])) //select all rows building_name
    {
        $db = new operation;
        $ethnicity = $db->query_view('tbl_ethnicity','id','');
        echo json_encode($ethnicity);
        exit();
    }
     ///select dropdown list from for nation table

     if(isset($_POST['_select_nation_rows'])) //select all rows building_name
     {
         $db = new operation;
         $nation = $db->query_view('tbl_nationality','id','');
         echo json_encode($nation);
         exit();
     }
 

    ///select dropdown list from for province table

    if(isset($_POST['_select_province_rows'])) //select all rows building_name
    {
        $db = new operation;
        $province = $db->query_view('tbl_provinces','province_id ','');
        echo json_encode($province);
        exit();
    }

     ///select dropdown list from for district filter altouth province table

     if(isset($_POST['_select_district_from_prince_id'])) //select all rows building_name
     {
         $db = new operation;
         $pro_id = $_POST['_select_district_from_prince_id'];
         $district = $db->query_view('tbl_districts','pro_id',$pro_id);
         echo json_encode($district);
         exit();
     }

     ///select dropdown list from for community filter altouth community table

     if(isset($_POST['_select_community_from_prince_dis_id'])) //select all rows building_name
     {
         $db = new operation;
         $dis_id = $_POST['_select_community_from_prince_dis_id'];
         $community = $db->query_view('tbl_communes','district_id',$dis_id);
         echo json_encode($community);
         exit();
     }

     ///select dropdown list from for village filter altouth community table 

     if(isset($_POST['_select_village_from_comm_id'])) //select all rows building_name
     {
         $db = new operation;
         $com_id = $_POST['_select_village_from_comm_id'];
         $village = $db->query_view('tbl_villages','commune_id',$com_id);
         echo json_encode($village);
         exit();
     } 

     ///select dropdown list from for village filter altouth community table _select_all_lists

     if(isset($_POST['_select_all_major'])) //select all rows academic
     {
         $db = new operation;
         $faculty_id = $_POST['_select_all_major'];
         $academic = $db->query_view('tbl_major','faculti_id',$faculty_id);
         echo json_encode($academic);
         exit();
     }

     ///select dropdown list from for village filter altouth community table _select_all_lists

     if(isset($_POST['_select_all_faculty'])) //select all rows faculty
     {
         $db = new operation;
         $faculty = $db->query_view('tbl_faculty','feature',1);
         echo json_encode($faculty);
         exit();
     }

     if(isset($_POST['_select_all_acedemic'])) //select all rows academic
     {
         $db = new operation;
         $faculty = $db->query_view('tbl_academic','id',);
         echo json_encode($faculty);
         exit();
     }

     ///SELECT * FROM `tbl_student_room` WHERE `floor_id` = 25 AND `id_building` = 4 AND `total_student` < 6

     if(isset($_POST['_floor_id']) && isset($_POST['_building_id'])) //select all rows rom
     {
        require_once('../models/connection.php');
        $db = new Myconnection;

        $conn = $db->connect();
        
        $floor_id = $_POST['_floor_id'];
        $building_id = $_POST['_building_id'];

        $sql = "SELECT * FROM `tbl_student_room` WHERE `floor_id` = $floor_id AND `id_building` = $building_id AND feature = 1 AND `total_student` < 6";

        $rs = $conn->query($sql);

        if($rs->num_rows > 0)
        {
            while($row = $rs->fetch_assoc()) 
            {
                $datas[] = $row;
            }
        }
        echo json_encode($datas);

        exit();
     }
     if(isset($_POST['_select_all_student_type'])) //select all rows student type
     {
         $db = new operation;
         $student = $db->query_view('tbl_student_type','id',);
         echo json_encode($student);
         exit();
     }
     if(isset($_POST['_select_all_student_status'])) //select all rows student status
     {
         $db = new operation;
         $status = $db->query_view('tbl_student_status','id',);
         echo json_encode($status);
         exit();
     }

     if(isset($_POST['_select_all_degree'])) //select all rows student degree
     {
         $db = new operation;
         $degree = $db->query_view('tbl_degree','id',);
         echo json_encode($degree);
         exit();
     }

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

            national_id, current_address_id, address_place_id, person_phone, parent_phone, image, register_date, student_type_id, status_id,card_nation_id) 

            VALUES ($room_id,'$full_namekh','$full_name_en',$gender,'$dob',$_faculty,$major,$degree,$_academic,$ethnicity,$nation,$current_address_id,

            $address_id,'$person_mobile','$phone_parent','$image_name','$register_date',$student_type_id,$student_status,'$ID_card')";
            
            $db = new operation;
            $st_id = $db->store_data($sql);
            
            $user = new User();
            $user_id = $user->_users($email,$password,$st_id);
            
            $db = new operation;
            $db->checked_room($room_id);

            $data = array('email' => $email, 'password' => 'UHSTIT03');

        }
        echo json_encode($data); 
        exit();
     }

     if(isset($_POST['_select_student_row'])) // SELECT SPECIFIC FORS IN STUDENTS
     {
        $db = new operation();

        $data = $db->get_student();

        echo json_encode($data);

        exit();
     }

     if(isset($_POST['_select_student_restore'])) // SELECT SPECIFIC FORS IN STUDENTS
     {
        $db = new operation();

        $data = $db->get_student_restore();

        echo json_encode($data);

        exit();
     }

    if(isset($_POST['_ID'])) // ACTIVE STUDENTS
    {
        $db = new operation;
        $id = $_POST['_ID'];
        $room_id = $_POST['_room_id'];
        $feature = $db -> active('tbl_student_information','id',$id,$room_id);
        $str = "UPDATE tbl_student_information SET feature = $feature WHERE id = $id";
        echo $db->store_data($str,$id); 
        exit(); 
    } 


///select row student to update

if(isset($_POST['_show_row_student']))
{
    $db = new operation;
    $st_id = $_POST['_show_row_student'];
    $student = $db->query_view('tbl_student_information','id',$st_id);

    $db = new operation;
    $cadd_id = $_POST['_current_add'];
    $cadd = $db->query_view('tbl_current_address','id',$cadd_id);

    $db = new operation;
    $add_id = $_POST['_birth_add'];
    $add = $db->query_view('tbl_place_of_birth','id',$add_id);

    $db = new operation;
    $room_id = $_POST['_RoomID'];
    $room = $db->query_view('tbl_student_room','id',$room_id);

    $data = array('student'=>$student,'current_address'=>$cadd,'birth_address'=>$add,'roomId'=>$room);

    echo json_encode($data);

    exit();
}


if(isset($_POST['floor_id']) && isset($_POST['room_id']))
{
    require_once('../models/connection.php');
    $db = new Myconnection;

    $conn = $db->connect();
    
    $student_id = $_POST['student_id_room'];
    $old_room_id = $_POST['old_room_id'];
    $new_room_id = $_POST['room_id'];
    
    $sql = "UPDATE tbl_student_information SET room_id=$new_room_id WHERE id = $student_id";
    $rs = $conn->query($sql);

    if($rs)
    {
        $db = new operation;
        $db->checked_room($new_room_id);

        $db = new operation;
        $db->_checked_room($old_room_id);
        echo 1;
    }
    else echo 0;
    
}

// if(isset($_POST['_select_all_address'])) //select all rows district
// {

//     $db = new operation;
//     $comm = $db->query_view('tbl_communes','com_id',);

//     $db = new operation;
//     $village = $db->query_view('tbl_villages','vill_id ',);

//     $db = new operation;
//     $dis = $db->query_view('tbl_districts','dis_id',);

//     $data = array('comm'=>$comm,'village'=>$village,'district'=>$dis);

//     echo json_encode($data);

//     exit();
// }

//update information

if(isset($_POST['ufull_name_kh']) && isset($_POST['uen_fullname']) && isset($_POST['person_mobile']) && isset($_POST['stu_id']))
{
   $db = new operation;

   $current_add = $_POST['current_add'];

   $birth_add = $_POST['birth_add'];

   $full_namekh = $db->real_esc($_POST['ufull_name_kh']);

   $full_name_en = $db->real_esc($_POST['uen_fullname']);

   $gender = $_POST['ugender'];

   $ethnicity = $_POST['uethnicity'];

   $nation = $_POST['unation'];

   $ID_card = $_POST['uID_card'];

   $dob = $_POST['udob'];

   $current_province = $_POST['current_province'];

   $current_district = $_POST['current_destrict'];

   $current_community = $_POST['current_community'];

   $current_village = $_POST['current_village'];

   $province = $_POST['uprovince'];

   $district = $_POST['udistrict'];

   $community = $_POST['ucommunity'];

   $village = $_POST['uvillage'];

   $_faculty = $_POST['_faculty'];

   $major = $_POST['major'];

   $_academic = $_POST['_academic'];

   $person_mobile = $_POST['person_mobile'];

   $phone_parent = $_POST['_phone_parent'];

   $student_type_id = $_POST['student_type'];

   $student_status = $_POST['student_status'];

   $degree = $_POST['degree'];

   $update_date = date('d-m-Y');

   $password = password_hash('UHSTIT03',PASSWORD_DEFAULT);

   $stu_id = $_POST['stu_id'] ;

   $image_name = "";

   //save image

   $image_name = $_POST['file_name_update'];

   $filename = $_FILES["profile_image"]["name"];

   $ext = pathinfo($filename,PATHINFO_EXTENSION);

   $validate = array("jpg","jpeg","png","gif","webp");

   if(in_array($ext,$validate))
   {
       unlink('../public/images/'.$image_name);   

       $image_name = rand().'.'.$ext;
       
       $path = "../public/images/".$image_name;

       move_uploaded_file($_FILES["profile_image"]["tmp_name"],$path);

   }

   $sql = "UPDATE tbl_student_information SET fname='$full_namekh',name_en='$full_name_en',

   gender='$gender',dob='$dob',faculty_id='$_faculty',subject_id='$major',

   degree_id='$degree',academic_id='$_academic',ethnicity_id='$ethnicity',

   national_id='$nation',

   person_phone='$person_mobile',parent_phone='$phone_parent',image='$image_name',

   student_type_id='$student_type_id',status_id='$student_status',

   upate_date='$update_date',card_nation_id='$ID_card' WHERE id= $stu_id";

    $db = new operation;
    $db->update_address($province,$district,$community,$village,$birth_add);

    $db = new operation;
    $db->update_current_address($current_province,$current_district,$current_community,$current_village,$current_add);

    $db = new operation;
    $st_id = $db->store_data($sql,$stu_id);

   exit();
}

if(isset($_POST['_remove_student_row']))
{
    $student_id = $_POST['_remove_student_row'];
    $db = new operation();
    $db->delete_data("tbl_student_information","id",$student_id);
}

?>