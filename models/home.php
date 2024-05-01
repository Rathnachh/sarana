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

        public function payment_for_student()
        {
            
        }
    }

    $db = new address;

    // echo '<pre/>';

    // print_r ($db->get_province());
?>