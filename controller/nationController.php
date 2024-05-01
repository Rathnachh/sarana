<?php
    require_once('../models/operator.php');

    if(isset($_POST['nation_name']))
    {
        $db = new operation;
        $name = $db->real_esc($_POST['nation_name']);
        
        $str = "INSERT INTO tbl_nationality (nation_kh) values('".$name."')";
        echo $db->store_data($str);
        exit(); 
    }
    if(isset($_POST['uname_nation']) AND $_POST['get_id'])
    {
        $db = new operation;
        $name = $db->real_esc($_POST['uname_nation']);
        $id = $_POST['get_id'];
        
        $str = "UPDATE tbl_nationality SET nation_kh='$name' WHERE id=$id";
        echo $db->store_data($str);
        exit();
    }
    if(isset($_POST['_select_all_row'])) 
    {
        $db = new operation;
        $datas = $db->query_view('tbl_nationality','id','','desc');
        echo json_encode($datas);
        exit();
    }
    if(isset($_POST['_ID'])) 
    {
        $db = new operation;
        $id = $_POST['_ID']; 
        $datas = $db->query_view('tbl_nationality','id',$id);
        echo json_encode($datas);
        exit();
    }
?>