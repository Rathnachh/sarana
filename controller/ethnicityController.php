<?php
    require_once('../models/operator.php');

    if(isset($_POST['name_ethnicity']))
    {
        $db = new operation;
        $name = $db->real_esc($_POST['name_ethnicity']);
        $str = "INSERT INTO tbl_ethnicity (ethnicity) values('".$name."')";
        echo $db->store_data($str);
        exit(); 
    }
    if(isset($_POST['uname_ethnicity']) AND $_POST['get_id'])
    {
        $name = $db->real_esc($_POST['uname_ethnicity']);
        $id = $_POST['get_id'];
        $db = new operation;
        $str = "UPDATE tbl_ethnicity SET ethnicity='$name' WHERE id=$id";
        echo $db->store_data($str);
        exit();
    }
    if(isset($_POST['_select_all_row'])) 
    {
        $db = new operation;
        $datas = $db->query_view('tbl_ethnicity','id','','desc');
        echo json_encode($datas);
        exit();
    }
    if(isset($_POST['_ID'])) 
    {
        $db = new operation;
        $id = $_POST['_ID']; 
        $datas = $db->query_view('tbl_ethnicity','id',$id);
        echo json_encode($datas);
        exit();
    }
?>