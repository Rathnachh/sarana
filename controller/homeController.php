<?php
    require_once('../models/operator.php');

    if(isset($_POST['_select_province_row']))
    {
        $db = new address;
        $data = $db->get_province();

        echo json_encode($data);
        exit(); 
    }

?>