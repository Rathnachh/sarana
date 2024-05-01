<?php
    require_once('../models/chart.php');

    if(isset($_POST['fetch']))
    {
        $db = new data_chart;

        $db->_chart();
        
        exit(); 
    }

?>