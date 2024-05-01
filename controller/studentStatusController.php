<?php
    require_once('../models/operator.php');

    if(isset($_POST['student_status_name']))
    {
        $db = new operation;
        $name = $db->real_esc($_POST['student_status_name']);
        $payment = $_POST['payment'];
        
        $str = "INSERT INTO tbl_student_status (status_name,payment) values('".$name."','".$payment."')";
        echo $db->store_data($str);
        exit(); 
    }
    if(isset($_POST['uname_student_status']) AND $_POST['get_id'] && isset($_POST['upayment']))
    {
        $db = new operation;
        $name = $db->real_esc($_POST['uname_student_status']);
        $payment = $_POST['upayment'];
        $active = $_POST['uname_select_active'];
        $id = $_POST['get_id'];
        
        $str = "UPDATE tbl_student_status SET status_name='$name',payment='$payment',feature=$active WHERE id=$id";
        echo $db->store_data($str,$id);
        exit();
    }
    if(isset($_POST['_select_all_row'])) 
    {
        $db = new operation;
        $datas = $db->query_view('tbl_student_status','id','','desc');
        echo json_encode($datas);
        exit();
    }
    if(isset($_POST['_ID'])) 
    {
        $db = new operation;
        $id = $_POST['_ID']; 
        $datas = $db->query_view('tbl_student_status','id',$id);
        echo json_encode($datas);
        exit();
    }
?> 