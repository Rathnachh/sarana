<?php
    require_once('../models/operator.php');

    if(isset($_POST['occupation_name']))
    {
        $db = new operation;
        $name = $db->real_esc( $_POST['occupation_name']);
        
        $str = "INSERT INTO tbl_occupation (occupation_name) values('".$name."')";
        echo $db->store_data($str);
        exit();
    }
    if(isset($_POST['uoccupation_name']) AND $_POST['get_id'])
    {
        $db = new operation;
        $name = $db->real_esc($_POST['uoccupation_name']);
        $id = $_POST['get_id'];
        
        $str = "UPDATE tbl_occupation SET occupation_name='$name' WHERE id=$id";
        echo $db->store_data($str);
        exit();
    }
    if(isset($_POST['_select_all_row'])) 
    {
        $db = new operation;
        $datas = $db->query_view('tbl_occupation','id','','desc');
        echo json_encode($datas);
        exit();
    }
    if(isset($_POST['_ID'])) 
    {
        $db = new operation;
        $id = $_POST['_ID']; 
        $datas = $db->query_view('tbl_occupation','id',$id);
        echo json_encode($datas);
        exit();
    }
?>