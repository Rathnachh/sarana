<?php

    class operation
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

        ///add and data to database
        public function store_data($queryStr=null,$id=null)
        {
            try
            {
                if($queryStr!=null && $id==null)
                {
                    $this->connection->query($queryStr);
                    $id = $this->connection->insert_id;
                    $this->connection->close();
                    sleep(0.50);
                    return $id;
                }
                elseif($id!=null)
                {
                    $this->connection->query($queryStr);
                    $this->connection->close();
                    sleep(0.50);
                    return true;
                }
                else
                {
                    return false;
                }
            }
            catch(Exception $e)
            {
                return $e->getMessage();
            }
            
        }

        ///query data 
        public function query_view($table,$key=null,$value=null,$desc='ASC')
        {

            if($table!=null && $key!=null && $value==null)
            {
                $query = "SELECT * FROM $table order by $key $desc";
            }
            elseif($key!=null && $value!=null)
            {
                $query = "SELECT * FROM $table WHERE $key = $value";
            }

            //$arr_data[] = array();

            if($query!=null)
            {
                $result = $this->connection->query($query);
                if($result->num_rows == 1)
                {
                    $arr_data[] = $result->fetch_assoc();
                }
                elseif($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $arr_data[] = $row;
                    }
                }
                else
                {
                    return 0;
                }

            }
            else
            {
                return 'QUERY_INVALID';
            }
            $this->connection->close();
            sleep(0.50);
            return $arr_data;
        }

        //delete data
        public function delete_data($table,$key=null,$value=null)
        {
            $query = "DELETE FROM $table WHERE $key = $value";
            $result = $this->connection->query($query);
            $this->connection->close();
            sleep(0.25);
            return true;
        }

        public function real_esc($name)
        {
            return $this->connection->real_escape_string($name);
        }

            
        public function _active($table = null,$key=null,$value=null)
        {
            $sql = "select * from $table where $key = $value";
            $res = $this->connection->query($sql);
            $row = $res->fetch_assoc();

            $feature = $row['feature'];
            
            if($feature == 1)
            {
                
                $feature = $feature - 1;
            }
            else
            {
               
                $feature = $feature + 1;
            }

            return $feature;

        }

        public function active($table = null,$key=null,$value=null,$room_id=null)
        {
            $sql = "select * from $table where $key = $value";
            $res = $this->connection->query($sql);
            $row = $res->fetch_assoc();

            $feature = $row['feature'];

            if($feature == 1)
            {
                $this->_checked_room($room_id);
                $feature = $feature - 1;
            }
            else
            {
                $this->checked_room($room_id);
                $feature = $feature + 1;
            }

            return $feature;

        }


        public function _address($name,$pro_id,$dis_id,$comm_id,$village_id)
        {
            $sql = "INSERT INTO tbl_place_of_birth(name, province_id, disctrict_id, communue_id, village_id) 
            
            VALUES('$name',$pro_id,$dis_id,$comm_id,$village_id)";

            if( $this->connection->query($sql))
            {
                $id = $this->connection->insert_id;
                $this->connection->close();
                return $id;
            }

            return false;
        }
        
        public function current_address($pro_id,$dis_id,$comm_id,$village_id)
        {
            $sql = "INSERT INTO tbl_current_address(province_id, district_id, comm_id, village_id) VALUES ($pro_id,$dis_id,$comm_id,$village_id)";

            if( $this->connection->query($sql))
            {
                $id = $this->connection->insert_id;
                $this->connection->close();
                return $id;
            }

            return false;
        }

        public function update_address($pro_id,$dis_id,$comm_id,$village_id,$add_id)
        {
            $sql = "UPDATE `tbl_place_of_birth` SET `province_id`='$pro_id',`disctrict_id`='$dis_id',`communue_id`='$comm_id',`village_id`='$village_id' WHERE `id`=$add_id";
            $this->connection->query($sql);
            $this->connection->close();
        }
        
        public function update_current_address($pro_id,$dis_id,$comm_id,$village_id,$add_id)
        {
            $sql = "UPDATE `tbl_current_address` SET `province_id`='$pro_id',`district_id`='$dis_id',`comm_id`='$comm_id',`village_id`='$village_id' WHERE id=$add_id";
            $this->connection->query($sql);
            $this->connection->close();
        }

        public function checked_room($room_id)
        {
            $sql = "SELECT total_student FROM tbl_student_room WHERE id = $room_id";

            $stm = $this->connection->query($sql);

            $rs = $stm->fetch_assoc();

            $sum_student_in_room = $rs['total_student'];

            $sum_student_in_room ++;

            if($sum_student_in_room <= 6)
            {
                $sql_update = "UPDATE tbl_student_room SET total_student = $sum_student_in_room WHERE id = $room_id";

                $this->connection->query($sql_update);

                //$this->connection->close();
            }
        }

        public function _checked_room($room_id) 
        {
            $sql = "SELECT total_student FROM tbl_student_room WHERE id = $room_id";

            $stm = $this->connection->query($sql);

            $rs = $stm->fetch_assoc();

            $sum_student_in_room = $rs['total_student']; 

            $sum_student_in_room --;

            if($sum_student_in_room >= 0)
            {
                $sql_update = "UPDATE tbl_student_room SET total_student = $sum_student_in_room WHERE id = $room_id";

                $this->connection->query($sql_update);

                //$this->connection->close();
            }
        }

        function get_student()
        {
            $sql = "SELECT st.id,st.fname,st.gender,st.feature,ac.year_name,ma.subject_name,st.person_phone,st.room_id,
            
            st.current_address_id,st.address_place_id,pr.province_kh_name 
            
            FROM tbl_student_information AS st INNER JOIN tbl_academic AS ac ON st.academic_id = ac.id INNER JOIN tbl_major AS ma 
            
            ON st.subject_id = ma.id INNER JOIN tbl_current_address AS cr ON st.current_address_id = cr.id INNER JOIN tbl_provinces AS pr 
            
            ON cr.province_id = pr.province_id WHERE acept = 1 AND st.student_type_id = 4 AND st.feature = 1";

            $stm = $this->connection->query($sql);
            //$data[]=array();
            $n = 1;
            if($stm->num_rows > 0)
            {
                
                while($row = $stm->fetch_assoc())
                {
                    
                    $data[] = array(
                        'id' => $row['id'],
                        'fname' => $row['fname'],
                        'gender'=>$row['gender'],
                        'feature' => $row['feature'],
                        'year_name' => $row['year_name'],
                        'subject_name' => $row['subject_name'],
                        'person_phone' => $row['person_phone'],
                        'room_id' => $row['room_id'],
                        'current_address_id' => $row['current_address_id'],
                        'address_place_id' => $row['address_place_id'],
                        'province_kh_name' => $row['province_kh_name'],
                        'n'=> $n
                    );
                    $n++;
                }
            }

            $this->connection->close();

            return $data;
        }
        function get_student_restore()
        {
            $sql = "SELECT st.id,st.fname,st.gender,st.feature,ac.year_name,ma.subject_name,st.person_phone,st.room_id,
            
            st.current_address_id,st.address_place_id,pr.province_kh_name 
            
            FROM tbl_student_information AS st INNER JOIN tbl_academic AS ac ON st.academic_id = ac.id INNER JOIN tbl_major AS ma 
            
            ON st.subject_id = ma.id INNER JOIN tbl_current_address AS cr ON st.current_address_id = cr.id INNER JOIN tbl_provinces AS pr 
            
            ON cr.province_id = pr.province_id WHERE acept = 1 AND st.student_type_id = 4 AND st.feature = 0";

            $stm = $this->connection->query($sql);
            //$data[]=array();
            $n = 1;
            if($stm->num_rows > 0)
            {
                
                while($row = $stm->fetch_assoc())
                {
                    
                    $data[] = array(
                        'id' => $row['id'],
                        'fname' => $row['fname'],
                        'gender'=>$row['gender'],
                        'feature' => $row['feature'],
                        'year_name' => $row['year_name'],
                        'subject_name' => $row['subject_name'],
                        'person_phone' => $row['person_phone'],
                        'room_id' => $row['room_id'],
                        'current_address_id' => $row['current_address_id'],
                        'address_place_id' => $row['address_place_id'],
                        'province_kh_name' => $row['province_kh_name'],
                        'n'=> $n
                    );
                    $n++;
                }
            }

            $this->connection->close();

            return $data;
        }
 
        function get_teacher()
        {
            $sql = "SELECT st.id,st.fname,st.gender,st.feature,ma.subject_name,
            de.degree_name,st.person_phone,st.room_id, st.current_address_id,
            st.address_place_id,pr.province_kh_name FROM tbl_student_information AS st 
            INNER JOIN tbl_academic AS ac ON st.academic_id = ac.id INNER JOIN tbl_major AS ma ON 
            st.subject_id = ma.id INNER JOIN tbl_current_address AS cr ON st.current_address_id = cr.id 
            INNER JOIN tbl_provinces AS pr ON cr.province_id = pr.province_id INNER JOIN tbl_degree as de 
            ON de.id = st.degree_id WHERE acept = 1 AND st.student_type_id = 3 ORDER BY st.id DESC";

            $stm = $this->connection->query($sql); 
            //$data[]=array();
            $n = 1;
            if($stm->num_rows > 0)
            {
                
                while($row = $stm->fetch_assoc())
                {
                    
                    $data[] = array(
                        'id' => $row['id'],
                        'fname' => $row['fname'],
                        'gender'=>$row['gender'],
                        'feature' => $row['feature'],
                        'degree_name' => $row['degree_name'],
                        'subject_name' => $row['subject_name'],
                        'person_phone' => $row['person_phone'],
                        'room_id' => $row['room_id'],
                        'current_address_id' => $row['current_address_id'],
                        'address_place_id' => $row['address_place_id'],
                        'province_kh_name' => $row['province_kh_name'],
                        'n'=> $n
                    );
                    $n++;
                }
            }

            $this->connection->close();

            return $data;

        }

        function manage_user()
        {
            $sql = "SELECT st.fname,sr.role_name,us.* FROM tbl_users as us INNER JOIN tbl_student_information as st 
            ON st.id=us.student_id INNER JOIN tbl_user_role AS sr ON sr.id=us.role_id ";

            $rs = $this->connection->query($sql);

            if($rs->num_rows >0)
            {
                $n = 1;
                while($row = $rs->fetch_assoc()) 
                {
                    $data[] = array(
                        'id' => $row['id'],
                        'role_id' => $row['role_id'],
                        'fname' => $row['fname'],
                        'feature' => $row['feature'],
                        'role_name' => $row['role_name'],
                        'username' => $row['username'],
                        'n'=>$n
                    );
                    $n++;
                }
            }

            return $data;
        }

        function show_row_data_vehicle()
        {
           $sql = "SELECT ve.*,st.fname,st.gender FROM tbl_vehicle AS ve INNER JOIN tbl_student_information AS st ON st.id = ve.student_id";

            $rs = $this->connection->query($sql);

            if($rs->num_rows > 0)
            {
                $n = 1;
                while($row = $rs->fetch_assoc())
                {
                    $data[] = array(
                        'id' => $row['id'],
                        'fname' => $row['fname'],
                        'gender' => $row['gender'],
                        'name' => $row['name'],
                        'status' => $row['status'],
                        'date' => $row['register_date'],
                        'n' => $n
                    );
                    $n++;
                }
            }

            return $data;
        }
 
        function get_student_payment()
        {
            $sql = "SELECT st.id,st.fname,str.name_room,ve.name,ve.status FROM `tbl_student_information` st INNER JOIN tbl_student_room AS str ON str.id = st.room_id LEFT JOIN tbl_vehicle AS ve ON ve.student_id = st.id WHERE st.acept=1 AND st.feature = 1";
            $rs = $this->connection->query($sql);
            if($rs->num_rows > 0)
            {
                $n = 1;
                while($row = $rs->fetch_assoc())
                {
                    $data[] = array(
                        'id' => $row['id'],
                        'fname' => $row['fname'],
                        'name_room' => $row['name_room'],
                        'name' => $row['name'],
                        'status' => $row['status'],
                        'n' => $n
                    );
                    $n++;
                }
                return $data;
            }

            return false;
            
        }

        function get_info_payment()
        {
            $sql = "SELECT sp.*,st.fname,st.gender,sp.paid,sp.remain,
            DATE_FORMAT(sp.pay_date, '%d-%m-%Y') AS date_pay,sp.pay_end 
            FROM tbl_student_payment AS sp INNER JOIN tbl_student_information AS st ON st.id = sp.studnet_id";

            $rs = $this->connection->query($sql);
            if($rs->num_rows > 0)
            {
                $n = 1;
                while($row = $rs->fetch_assoc())
                {
                    $data[] = array(
                        'id' => $row['id'],
                        'fname' => $row['fname'],
                        'gender' => $row['gender'],
                        'paid' => $row['paid'],
                        'remain' => $row['remain'],
                        'pay_date' => $row['date_pay'],
                        'pay_end' => $row['pay_end'],
                        'n' => $n
                    );
                    $n++;
                }
                return $data;
            }

            return false;
        }

        function check_payment($date,$st_id)
        {

            $sql = "SELECT SUBSTRING($date, 3, 8) AS ExtractString FROM tbl_student_payment WHERE studnet_id = $st_id ";
            $rs= $this->connection->query($sql);

            if ($rs->num_rows > 0)
            {
                return 1;
            }
            else 
            {
                return 0;
            }

        }

        function report($start_date = null,$end_date = null,$feature = null)
        {
            $sql = "";
            if($feature != "" && $start_date == "" && $end_date == "")
            {
                $sql = "SELECT sp.*,st.fname,st.gender,sp.paid,sp.remain,
                DATE_FORMAT(sp.pay_date, '%d-%m-%Y') AS date_pay,sp.pay_end 
                FROM tbl_student_payment AS sp INNER JOIN tbl_student_information AS st ON st.id = sp.studnet_id 
                WHERE sp.feature = $feature";
            }
            else if($start_date != "" && $end_date != "" && $feature == "")
            {
                $sql = "SELECT sp.*,st.fname,st.gender,sp.paid,sp.remain,
                DATE_FORMAT(sp.pay_date, '%d-%m-%Y') AS date_pay,sp.pay_end 
                FROM tbl_student_payment AS sp INNER JOIN tbl_student_information AS st ON st.id = sp.studnet_id
                WHERE sp.pay_date BETWEEN '$start_date' AND '$end_date'";
            }
            else if($start_date != "" && $end_date != "" && $feature != "")
            {
                $sql = "SELECT sp.*,st.fname,st.gender,sp.paid,sp.remain,
                DATE_FORMAT(sp.pay_date, '%d-%m-%Y') AS date_pay,sp.pay_end 
                FROM tbl_student_payment AS sp INNER JOIN tbl_student_information AS st ON st.id = sp.studnet_id
                WHERE sp.pay_date BETWEEN '$start_date' AND '$end_date' AND sp.feature = $feature";
            }
            else {
                $sql = "SELECT sp.*,st.fname,st.gender,sp.paid,sp.remain,
                DATE_FORMAT(sp.pay_date, '%d-%m-%Y') AS date_pay,sp.pay_end 
                FROM tbl_student_payment AS sp INNER JOIN tbl_student_information AS st ON st.id = sp.studnet_id";
            }

            $stm = $this->connection->query($sql);
            if($stm->num_rows > 0)
            {
                while( $row = $stm ->fetch_assoc())
                {
                    $data[] = $row;
                }
                return $data;
            }
            return false;

        }

    }

    $db = new operation;
    // echo 'hello world';

    // $db->update_current_address(1,2,3,4,13);

    //$db->update_address(1,2,3,4,29);

    // echo 'report';
    // echo '<pre/>';
    // print_r ($db->report('2022-07-01','2022-09-01',''));

    ///echo $db->_users('admin','ssoldk',11);

    //echo '<pre/>';

    //$date = date('d-m-Y');

   // echo $db->check_payment(substr($date,4,8),19);

    // // print_r ($db->get_teacher());

    // print_r ($db-> manage_user());

   // print_r ($db->get_info_payment());
   //echo $db->_checked_room(26);

?>