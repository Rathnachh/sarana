<?php
    require_once('../models/operator.php');

    if(isset($_POST['building_name']) && isset($_POST['floor_name']))//add new building
    {
        $db = new operation;
        $name = $db->real_esc($_POST['floor_name']);
        $building_id = $_POST['building_name'];
        $str = "INSERT INTO tbl_floor (floor_name,building_id) values('$name','$building_id')";
        echo $db->store_data($str);
        exit(); 
    }

    if(isset($_POST['ubuilding_name']) && isset($_POST['ufloor_name']) && isset($_POST['_id']))//add new buildingedit new building
    {
        $db = new operation;
        $id = $_POST['_id'];
        $name = $db->real_esc($_POST['ufloor_name']);
        $building_id = $_POST['ubuilding_name'];
        $str = "UPDATE tbl_floor SET floor_name='$name', building_id = $building_id WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }


    if(isset($_POST['_select_all_row'])) //select all rows floor
    {
        require_once('../models/connection.php');
        $db = new Myconnection;
        $conn = $db->connect();
        
        $sql = "SELECT fl.*,bu.building_name,bu.id AS building_id FROM tbl_floor AS fl INNER JOIN tbl_building AS bu ON 
        
        fl.building_id = bu.id ORDER BY fl.id DESC";

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
    if(isset($_POST['_ID'])) 
    {
        $db = new operation;
        $id = $_POST['_ID'];
        $feature = $db -> _active('tbl_floor','id',$id);
        $str = "UPDATE tbl_floor SET feature = $feature WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }

?>