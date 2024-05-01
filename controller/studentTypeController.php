<?php
    require_once('../models/operator.php');

    if(isset($_POST['name_student_type']))
    {
        $name = $db->real_esc($_POST['name_student_type']);
        $db = new operation;
        $str = "INSERT INTO tbl_student_type (name) values('".$name."')";
        echo $db->store_data($str);
        exit();
    }
    if(isset($_POST['uname_student_type']) AND $_POST['get_id'])
    {
        $db = new operation;
        $name = $db->real_esc($_POST['uname_student_type']);
        $active = $_POST['uname_select_active'];
        $id = $_POST['get_id'];
        $str = "UPDATE tbl_student_type SET name='$name',feature=$active WHERE id=$id";
        echo $db->store_data($str);
        exit();
    }
    if(isset($_POST['_select_all_row'])) 
    {
        $db = new operation;
        $datas = $db->query_view('tbl_student_type','id','','desc');
        echo json_encode($datas);
        exit();
    }
    if(isset($_POST['_ID'])) 
    {
        $db = new operation;
        $id = $_POST['_ID']; 
        $datas = $db->query_view('tbl_student_type','id',$id);
        echo json_encode($datas);
        exit();
    }
?>