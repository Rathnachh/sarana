<?php
    require_once('../models/operator.php');
    require_once('../models/address.php');

    if(isset($_POST['_select_province_row']))
    {
        $db = new address;
        $data = $db->get_province();

        echo json_encode($data);
        exit(); 
    }
    if(isset($_GET['fetch_district']))
    {
        $db = new address;
        echo $db->get_district();
        exit();
    }

    if(isset($_GET['fetch_commnue']))
    {
        $db = new address;
        echo $db->get_commune();
        exit();
    }

    if(isset($_GET['fetch_village']))
    {
        $db = new address;
        echo $db->get_village();
        exit();
    }
?>