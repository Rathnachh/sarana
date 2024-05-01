<?php
    class address
    {
        private $connection = null;
        private $query = null;
        private $stm = null;
        private $result = null;
    
        public function __construct()
        {
            require_once('connection.php');
            $db = new Myconnection;
            $this->connection = $db->connect();
        }

        public function manage_dashboard()
        {
            //sql_counter_teacher
            $sql_teacher = "SELECT COUNT(`id`) AS all_teacher FROM `tbl_student_information` WHERE student_type_id = 4";
            //sql_counter_student
            $sql_student = "SELECT COUNT(`id`) AS all_student FROM `tbl_student_information` WHERE student_type_id = 3";
            //sql_conter female student
            $sql_student_female = "SELECT COUNT(`id`) AS female_student FROM `tbl_student_information` WHERE student_type_id = 3 AND `gender` = 1";
            //sql_conter female teacher
            $sql_teacher_female = "SELECT COUNT(`id`) AS female_teacher FROM `tbl_student_information` WHERE student_type_id = 4 AND `gender` = 1";
            //sql_conter poor student
            $sql_poor_student = "SELECT COUNT(`id`) AS poor_student FROM `tbl_student_information` WHERE `status_id`= 6";
            //sql_conter MoEy student
            $sql_poor_moey = "SELECT COUNT(`id`) AS moey_student FROM `tbl_student_information` WHERE `status_id`= 7";
            //sql_conter payment student
            $sql_payment = "SELECT COUNT(`id`) AS pay_student FROM `tbl_student_information` WHERE `status_id`= 4";
            //sql_conter vehicle student
            $sql_vehicle = "SELECT COUNT(id) AS vehicle FROM `tbl_vehicle`";


            
        }
    }

    $db = new address;

    // echo '<pre/>';

    // print_r ($db->get_province());
?>