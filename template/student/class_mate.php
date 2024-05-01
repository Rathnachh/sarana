<?php require_once('../_layout/head_student.php') ;?>

<?php
    $room_id = $_SESSION['room_id'];
    $sql = "SELECT st.id,st.fname,st.register_date,fa.name,ma.subject_name FROM tbl_student_information AS st 
    INNER JOIN tbl_student_room AS str ON st.room_id = str.id
    INNER JOIN tbl_faculty AS fa ON fa.id = st.faculty_id
    INNER JOIN tbl_major AS ma ON ma.id = st.subject_id
    WHERE st.feature = 1 AND str.id=$room_id;";
    $rs = $conn->query($sql);
?>

<div class="content p-3 bg-white">
    <div class="title title d-flex align-items-center justify-content-between">
        <h3><?php echo $_SESSION['room_name']?></h3>
    </div>
    <table class="table table-hover" id="info_payment">
        <?php
            if($rs->num_rows > 0)
            {
                while ($row = $rs->fetch_assoc())
                {
                    ?>
                    <tr class="p-0">
                        <td class="row pb-0">
                            <div class="col-lg-4 md-4 col-sm-12">
                                <h6 class="text-primary"><?php echo $row['fname']?></h6>
                            </div>
                            <div class="col-lg-4 md-4 col-sm-12">
                                <p class="text-success"><span><?php echo $row['name'] ?> </span>, <span class="text-info"><?php echo $row['subject_name']?> </span></p>
                            </div>
                            <div class="col-lg-4 md-4 col-sm-12 text-right">
                                <p class="date_pay">នៅថៃ្ងទី <span><?php echo $row['register_date']?></span></p>
                            </div>
                            
                        </td>
                    </tr>
                    <?php
                }
            }
            else 
            {
                echo '<div class="alert alert-info">មិនមានទិន្នន័យបង់ប្រាក់ទេ សូមអរគុណ!!!</div>';
            }
            
        ?>
       </table>
</div>

<?php require_once('../_layout/foot_student.php') ;?>