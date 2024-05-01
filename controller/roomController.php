<?php
    require_once('../models/operator.php');

    if(isset($_POST['room_name']) && isset($_POST['building_name']) && isset($_POST['floor_name']))//add new building
    {
        $db = new operation;
        $name = $db->real_esc($_POST['room_name']); 
        $building_id = $_POST['building_name'];
        $floor_id = $_POST['floor_name'];
        $description = $db->real_esc($_POST['description']);

        $str = "INSERT INTO tbl_student_room(name_room, floor_id, id_building, descripton) 
                                            VALUES('$name',$floor_id,$building_id,'$description')";
        echo $db->store_data($str);
        exit(); 
    }

    if(isset($_POST['uroom_name']) && isset($_POST['ubuilding_name']) && isset($_POST['_id']))//add new buildingedit new building
    {
        $db = new operation;
        $id = $_POST['_id'];
        $name = $db->real_esc($_POST['uroom_name']); 
        $building_id = $_POST['ubuilding_name'];
        $floor_id = $_POST['ufloor_name'];
        $description = $db->real_esc($_POST['udescription']);

        $str = "UPDATE tbl_student_room SET name_room='$name',floor_id='$floor_id',id_building='$building_id',
        
        descripton='$description' WHERE id = $id";

        echo $db->store_data($str,$id);
        exit(); 
    }


    if(isset($_POST['_select_all_row'])) //select all rows room
    {
        require_once('../models/connection.php');
        $db = new Myconnection;
        $conn = $db->connect();
        
        $sql = "SELECT rom.*,fl.floor_name,bu.building_name FROM tbl_student_room AS 
        
        rom INNER JOIN tbl_floor AS fl ON rom.floor_id=fl.id INNER JOIN tbl_building 
        
        AS bu ON rom.id_building=bu.id";

        $rs = $conn->query($sql);

        // if($rs->num_rows > 0)
        // {
        //     while($row = $rs->fetch_assoc())
        //     {
        //         $datas[] = $row;
        //     }
        // }

        if($rs->num_rows > 0)
        {
            $n=1;
            while($row = $rs->fetch_assoc())
            {
                $datas[] = array(
                    'id' => $row['id'],
                    'feature'   => $row['feature'],
                    'name_room' => $row['name_room'],
                    'floor_name'   => $row['floor_name'],
                    'building_name'   => $row['building_name'],
                    'id_building'   => $row['id_building'],
                    'floor_id'   => $row['floor_id'],
                    'descripton'   => $row['descripton'],
                    'total_student' => $row['total_student'],
                    'n'         => $n
                );
                $n++;
            } 
        }

        echo json_encode($datas);
        exit();
    }
    if(isset($_POST['_ID'])) ///active feature
    {
        $db = new operation;
        $id = $_POST['_ID'];
        $feature = $db -> _active('tbl_student_room','id',$id);
        $str = "UPDATE tbl_student_room SET feature = $feature WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }
    if(isset($_POST['_select_floor_by_id_building'])) ///select dropdown form floor table
    {
        $db = new operation;
        $building_id = $_POST['_select_floor_by_id_building'];
        $data = $db -> query_view('tbl_floor','building_id',$building_id);
        echo json_encode($data);
        exit(); 
    }

    if(isset($_POST['_select_floor_by_id_building_acitve'])) ///select dropdown form floor table with active floor
    {
        $db = new Myconnection;
        $conn = $db->connect();
        $building_id = $_POST['_select_floor_by_id_building_acitve'];
        $sql = "SELECT * FROM tbl_floor WHERE building_id =  $building_id AND feature = 1";

        $rs = $conn->query($sql);

        if($rs->num_rows > 0)
        {
            while($row = $rs->fetch_assoc())
            {
                $data[] = $row;
            }
        }
        echo json_encode($data);

        exit(); 
    }

    if(isset($_POST['_select_floor_by_id_building'])) ///select dropdown form floor table
    {
        $db = new operation;
        $building_id = $_POST['_select_floor_by_id_building'];
        $data = $db -> query_view('tbl_floor','building_id',$building_id);
        echo json_encode($data);
        exit(); 
    }

    if(isset($_POST['_select_floor_all_rows'])) ///select dropdown form floor table  SELECT * FROM tbl_floor GROUP BY `floor_name`
    {
        $db = new operation;
        $data = $db -> query_view('tbl_floor','id','');
        echo json_encode($data);
        exit(); 
    }

?>