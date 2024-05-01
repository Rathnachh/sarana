<?php
    require_once('../models/operator.php');

    if(isset($_POST['name']))//add new faculty
    {
        $db = new operation;
        $name = $db->real_esc($_POST['name']);
        $str = "INSERT INTO tbl_faculty(name) VALUES ('$name')";
        echo $db->store_data($str);
        exit(); 
    }

    if(isset($_POST['uname']) && isset($_POST['_id']))//add new buildingedit new faculty
    {
        $db = new operation;
        $id = $_POST['_id'];
        $name = $db->real_esc($_POST['uname']);
        $str = "UPDATE tbl_faculty SET name='$name' WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }


    if(isset($_POST['_select_all_row'])) //select all rows faculty
    {
        $db = new operation;
        $datas = $db->query_view('tbl_faculty','id','','DESC');
        echo json_encode($datas);
        exit();
    }
    if(isset($_POST['_ID'])) //activ and inactive faculty
    {
        $db = new operation;
        $id = $_POST['_ID'];
        $feature = $db -> _active('tbl_faculty','id',$id);
        $str = "UPDATE tbl_faculty SET feature = $feature WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }

    if(isset($_POST['_select_faculty_all_rows'])) //select all rows faculty
    {
        $db = new operation;
        $datas = $db->query_view('tbl_faculty','id','');
        echo json_encode($datas);
        exit();
    }

?>