<?php
    class User
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

        public function login($email,$password)
        {
            $query = "SELECT * FROM tbl_users WHERE username = '$email' LIMIT 1";
            $stm = $this->connection->query($query);
            if($stm->num_rows > 0)
            {
                $row = $stm->fetch_assoc();
                $username = $row['username'];
                $pass = password_verify($password,$row['password']);
                if($pass)
                {
                    $student_id = $row['student_id'];
                    $sql_user = "SELECT tbl_users.id, tbl_user_role.role_name,st.image,st.id AS stu_id,st.name_en AS student_name,str.id as room_id,str.name_room FROM `tbl_users` 
                    INNER JOIN tbl_user_role ON tbl_user_role.id = tbl_users.role_id 
                    INNER JOIN tbl_student_information AS st ON st.id = tbl_users.student_id
                    INNER JOIN tbl_student_room AS str ON str.id = st.room_id WHERE st.id=$student_id";

                    $user = $this->connection->query($sql_user);
                    
                    if($user->num_rows > 0)
                    {
                        $user_row = $user->fetch_assoc();
                        $_SESSION['stu_id'] = $user_row['stu_id'];
                        $_SESSION['student_name'] = $user_row['student_name'];
                        $_SESSION['role_name'] = $user_row['role_name'];
                        $_SESSION['user_role'] = $user_row['role_id'];
                        $_SESSION['room_id'] = $user_row['room_id'];
                        $_SESSION['room_name'] = $user_row['name_room'];
                        $_SESSION['image'] = $user_row['image'];
                    }
                    
                    //authentication when login is required
                    $_SESSION['student_login'] = false;
                    $user_role = $row['role_id'];
                    $_SESSION['user_id'] = $user_row['id'];
                    if($user_role == 1)
                    {
                        $_SESSION['student_login'] = true;
                        return 'STUDENT';
                    }
                    else if($user_role == 2)
                    {
                        $_SESSION['emp_role'] = $row['role_id'];
                        $_SESSION['emp_id'] = $row['id'];
                        return 'EMPLOYEE';
                    }
                    else 
                    {
                        $_SESSION['admin_id'] = $row['id'];
                        $_SESSION['admin_name'] = $row['role_id'];
                        return 'ADMIN';
                    }
                    return 'USER_LOGIN_SUCCESS';
                }
                return 'PASSWORD ERROR';
                
            }
            return 'USER_NOT_REGISTERED';
            //return $query;
        }

        public function _users($username,$pass,$stu_id)
        {
            $sql = "INSERT INTO tbl_users(username,role_id, password,student_id) VALUES('$username',1,'$pass',$stu_id)";

            $create_user = $this->connection->query($sql);

            if( $create_user )
            {
                $id = $this->connection->insert_id;
                $this->connection->close();
                return $id;
            }

            return false;
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

        function change_password($new_passoword,$user_id)
        {
            $sql = "UPDATE tbl_users SET password='$new_passoword' WHERE id = $user_id";
            $stm = $this->connection->query($sql);
            if($stm)
            {
                session_destroy();
                return 1;
            }
            else return 0;
        }
    }
    $db = new User;
    // echo 'hell';
    // $pass = password_hash('Admin@280822',PASSWORD_DEFAULT);
    // echo $db->_users('admin@gmail.com',$pass,0);
    // echo $db->login('admin@gmail.com','Admin@280822');
?>