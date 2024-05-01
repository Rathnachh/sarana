<?php

class Myconnection
{
    private $conn;
    public function connect()
    {
        require_once('../database/constants.php');
        try
        {
            $this ->conn = new mysqli(HOST,USER,PASS,DB);

            if($this->conn) return $this->conn;
        }
        catch (Exception $e)
        {
            return 'CONNECTION_INVALID'.$e->getMessage();
        }
        
    }
}

?>