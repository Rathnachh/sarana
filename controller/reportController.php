<?php
    require_once('../models/operator.php');
    if(isset($_POST['feature']) || isset($_POST['_start_date']) || isset($_POST['_end_date']))
    {
        $db = new operation;
        $data = 'successfully';
        $sarch = $_POST['feature'];
        $start_date = $_POST['_start_date'];
        $end_date = $_POST['_end_date'];
        $data = $db->report($start_date, $end_date, $sarch);
        echo json_encode($data);
        exit(); 
    }

?>