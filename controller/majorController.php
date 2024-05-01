<?php
    require_once('../models/operator.php');

    if(isset($_POST['_faculty']) && isset($_POST['name']))//add new building
    {
        $db = new operation;
        $name = $db->real_esc($_POST['name']);
        $faculty_id = $_POST['_faculty'];
        $str = "INSERT INTO tbl_major(subject_name,faculti_id) VALUES('$name','$faculty_id')";
        echo $db->store_data($str);
        exit(); 
    }

    if(isset($_POST['uname']) && isset($_POST['_id']))//add new buildingedit new building
    {
        $db = new operation;
        $id = $_POST['_id'];
        $name = $db->real_esc($_POST['uname']);
        $faculty_id = $_POST['_ufaculty'];
        $str = "UPDATE tbl_major SET subject_name = '$name',faculti_id = $faculty_id WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }


    if(isset($_POST['_select_all_row'])) //select all rows building_name
    {
        require_once('../models/connection.php');
        $db = new Myconnection;
        $conn = $db->connect();

        $sql = "SELECT ma.*,fa.name FROM tbl_major AS ma INNER JOIN tbl_faculty AS fa ON ma.faculti_id=fa.id";

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
        $feature = $db -> _active('tbl_major','id',$id);
        $str = "UPDATE tbl_major SET feature = $feature WHERE id = $id";
        echo $db->store_data($str,$id);
        exit(); 
    }


?>