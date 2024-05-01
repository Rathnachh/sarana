<?php
    require_once('../models/operator.php');

    if(isset($_POST['_select_payment_row']))
    {
        $db = new operation;
        $data = $db->get_student_payment();
        echo json_encode($data);
        exit();
    }
    if(isset($_POST['payment']) && isset($_POST['payment_remain']))
    {
        $db = new operation;
        $stu_id = $_POST['stu_id'];
        $payment = $_POST['payment'];
        $remain_payment = $_POST['payment_remain'];
        $date = date('Y-m-d');
        $paid = $db->check_payment(substr($date,3,8),$stu_id);
        $amount = 0;
        if(isset($_POST['feature']))
        {
            $amount = 1;
        }

        $sql = "INSERT INTO tbl_student_payment(studnet_id, paid, remain, pay_date,feature) VALUES($stu_id,$payment,$remain_payment,'$date',$amount)";

        $id = $db->store_data($sql);

        echo 0;

       exit();
    }

    if(isset($_POST['payment']) && isset($_POST['result']))
    {
        $db = new operation;
        $pay_id = $_POST['pay_id'];
        $payment = $_POST['payment'];
        $remain_payment = $_POST['result'];
        $result_pay = $_POST['result_pay'];
        $amount = 0;
        if(isset($_POST['feature']))
        {
            $amount = 1;
        }
        $pay = $result_pay + $payment;
        $date = date('d-m-Y');

        $sql = "UPDATE tbl_student_payment SET paid= $pay,remain=$remain_payment,pay_end='$date',feature=$amount WHERE id = $pay_id";

        $id = $db->store_data($sql,$pay_id);

       exit();
    }

    if(isset($_POST['info_payment']))
    {
        $db = new operation;
        $data = $db->get_info_payment();
        echo json_encode($data);
    }
?>