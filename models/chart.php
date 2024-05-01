<?php
    class data_chart
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

        function _chart()
        {
            $query_count_student = "SELECT COUNT(id) AS count FROM tbl_student_information WHERE feature = 1 AND acept =1";

            $count = $this->connection->query($query_count_student);
            $num = $count->fetch_assoc();
            $query = "SELECT pr.province_kh_name AS province,COUNT(pr.province_id) AS total FROM `tbl_student_information` AS st 
            INNER JOIN tbl_current_address AS cur ON st.current_address_id=cur.id
            INNER JOIN tbl_provinces AS pr ON cur.province_id = pr.province_id WHERE st.feature=1 AND st.acept=1 GROUP BY pr.province_kh_name";

            $stm = $this->connection->query($query);

            //$data[] =array();
            foreach ($stm as $row)
            {
                $total = ($row['total']*100)/$num['count'];
                $data[] = array(
                    'province'  => $row['province'],
                    'total'     => number_format($total,2),
                    'color'     => '#'. rand(100000,999999).''
                );
            }
            echo json_encode($data);
        }
    }


    //print_r ($db->_chart());

    // echo '<pre/>';

    // print_r ($db->get_province());
?>