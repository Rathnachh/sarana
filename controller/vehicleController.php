<?php
    require_once('../models/operator.php');

    if(isset($_POST['name']) && isset($_POST['status']))
    {
        $db = new operation;
        $name = $db->real_esc($_POST['name']);
        $status = $db->real_esc($_POST['status']);
        $student_id = $_POST['student_id'];
        $date = date('d-m-Y');

        $db = new operation;
        $sql = "INSERT INTO tbl_vehicle(name, status,student_id, register_date) VALUES ('$name','$status',$student_id,'$date')";
        $id = $db ->store_data($sql);
        exit(); 
    }
    //update tbl_vehicle 
    if(isset($_POST['uname']) && isset($_POST['ustatus']) && isset($_POST['ve_id']))
    {
        $db = new operation;
        $name = $db->real_esc($_POST['uname']);
        $status = $db->real_esc($_POST['ustatus']);
        $ve_id = $_POST['ve_id'];
        $date = date('d-m-Y');

        $db = new operation;
        $sql = "UPDATE tbl_vehicle SET name='$name', status='$status' WHERE id='$ve_id'";
        $id = $db ->store_data($sql);
        echo $id;
        exit();  
    }


    if(isset($_POST['_select_vehicle_row']))
    {
        $db = new operation;
        $data = $db->show_row_data_vehicle(); 
        echo json_encode($data);
        exit();
    }
    if(isset($_POST['_remove_vehicle_row']))
    {
        $db = new operation;
        $Id = $_POST['_remove_vehicle_row'];
        $data = $db->delete_data('tbl_vehicle','id',$Id);
        echo $data;
    }
?>