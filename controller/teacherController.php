<?php
 require_once('../models/operator.php');

if(isset($_POST['_select_teacher_row'])) // SELECT SPECIFIC FORS IN STUDENTS
{
   $db = new operation();

   $data = $db->get_teacher();

   echo json_encode($data);

   exit();
}

?>