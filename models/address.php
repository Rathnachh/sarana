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

        function get_province()
        {
            $sql = "SELECT `province_id`,`code`,`province_en_name`,`province_kh_name`,`modify_date` FROM `tbl_provinces`";

            $rs = $this->connection->query($sql);

            if($rs->num_rows > 0)
            {
                $n=1;
                while($row = $rs->fetch_assoc())
                {
                    $data[] = array(
                        'province_id' => $row['province_id'],
                        'code' => $row['code'],
                        'province_en_name' => $row['province_en_name'],
                        'province_kh_name' => $row['province_kh_name'],
                        'modify_date' => $row['modify_date'],
                        'n'=>$n
                    );
                    $n++;
                }

                return $data;
            }
            return false;
        }

        function get_district()
        {
            $sql = "SELECT `dis_id`,`pro_id`,`code`,`district_name`,`district_namekh`,`modify_date` FROM `tbl_districts`";
            $district = $this->connection->query($sql);
            //$data_dist[] = array();
            $n=1;
            foreach ($district as $row)
            {
                $data_dist[] = array(
                    'dis_id' => $row['dis_id'],
                    'pro_id' => $row['pro_id'],
                    'code' => $row['code'],
                    'district_name' => $row['district_name'],
                    'district_namekh' => $row['district_namekh'],
                    'modify_date' => $row['modify_date'],
                    'n' => $n++
                );
            }
            echo json_encode($data_dist);
        }

        function get_commune()
        {
            $sql = "SELECT `com_id`,`district_id`,`code`,`commune_name`,`commune_namekh`,`modify_date` FROM `tbl_communes` ";
            $district = $this->connection->query($sql);
            //$data_dist[] = array();
            $n=1;
            foreach ($district as $row)
            {
                $data_dist[] = array(
                    'com_id' => $row['com_id'],
                    'district_id' => $row['district_id'],
                    'code' => $row['code'],
                    'commune_name' => $row['commune_name'],
                    'commune_namekh' => $row['commune_namekh'],
                    'modify_date' => $row['modify_date'],
                    'n' => $n++
                );
            }
            echo json_encode($data_dist);
        }

        function get_village()
        {
            $sql = "SELECT `vill_id`,`commune_id`,`code`,`village_name`,`village_namekh`,`modify_date` FROM `tbl_villages` ";
            $district = $this->connection->query($sql);
            //$data_dist[] = array();
            $n=1;
            foreach ($district as $row)
            {
                $data_dist[] = array(
                    'vill_id' => $row['vill_id'],
                    'commune_id' => $row['commune_id'],
                    'code' => $row['code'],
                    'village_name' => $row['village_name'],
                    'village_namekh' => $row['village_namekh'],
                    'modify_date' => $row['modify_date'],
                    'n' => $n++
                );
            }
            echo json_encode($data_dist);
        }
    }

    $db = new address;

    //print_r ($db->get_district());
    // echo '<pre/>';

    // print_r ($db->get_province());
?>