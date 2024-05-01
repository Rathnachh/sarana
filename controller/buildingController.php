<?php
    require_once('../models/operator.php');

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
    if(isset($_POST['_ID'])) 
    {
        $db = new operation;
        $id = $_POST['_ID'];
        $feature = $db -> _active('tbl_building','id',$id);
        $str = "UPDATE tbl_building SET feature = $feature WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }


    ///select dropdown list from table building

    if(isset($_POST['_get_building'])) //select all rows building_name
    {
        $db = new operation;
        $building = $db->query_view('tbl_building','feature',1);
        echo json_encode($building);
        exit();
    }



?>