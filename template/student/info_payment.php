<?php require_once('../_layout/head_student.php') ;?>

<?php
    $stu_id = $_SESSION['stu_id'];
    $sql = "SELECT `id`,`pay_date`,paid,remain FROM `tbl_student_payment` WHERE `studnet_id`=$stu_id ORDER BY id DESC";
    $rs = $conn->query($sql);
?>

<div class="content bg-white p-3">
    <div class="title title d-flex align-items-center justify-content-between">
        <h3 class="text-info kh-text font-weight-bold">ព័ត៌មានពីការបង់ប្រាក់</h3>
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
                                <h6 class="text-primary">បានបង់ប្រាក់</h6>
                            </div>
                            <div class="col-lg-4 md-4 col-sm-12">
                                <p class="text-success">ចំនួន <span><?php echo $row['paid']?> ៛</span>, នៅសល់ <span class="text-danger"><?php echo $row['remain']?> ៛</span></p>
                            </div>
                            <div class="col-lg-4 md-4 col-sm-12 text-right">
                                <p class="date_pay">នៅថៃ្ងទី <span><?php echo $row['pay_date']?></span></p>
                            </div>
                            
                        </td>
                    </tr>
                    <?php
                }
            }
            else 
            {
                echo '<div class="alert alert-info kh-text">មិនមានទិន្នន័យបង់ប្រាក់ទេ សូមអរគុណ!!!</div>';
            }
            
        ?>
       </table>
</div>

<?php require_once('../_layout/foot_student.php') ;?>