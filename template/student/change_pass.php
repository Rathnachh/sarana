<?php require_once('../_layout/head_student.php') ;?>

<?php
    $stu_id = $_SESSION['stu_id'];
    $sql = "SELECT `id`,`pay_date`,paid,remain FROM `tbl_student_payment` WHERE `studnet_id`=$stu_id ORDER BY id DESC";
    $rs = $conn->query($sql);
?>

<style>
    input{
        
    }
</style>

<div class="content p-3">
    <div class="title title d-flex align-items-center">
        <h3>ប្តូរលេខសម្ងាត់</h3>
    </div>

    <div class="row mt-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <form id="form_change">
            <div id="error_message"></div>
            <div class="form-group">
                <label for="">New password</label>
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                <input type="password" id="new_password" name="new_password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Re-confirm password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-outline-primary">save change</button>
        </form>
        </div>
    </div>
</div>

<?php require_once('../_layout/foot_student.php') ;?>

<script>
    $(function(){


        $('#form_change').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            var new_pass = $('#new_password').val();
            var re_pass = $('#confirm_password').val();
            if(re_pass!="" && new_pass != "")
            {
                if(re_pass!=new_pass)
                {
                    $('#error_message').html('<div class="alert alert-warning">Password not match...!</div>');
                    setInterval(() => {
                        $('#error_message').html('');
                    }, 3000);
                } 
                else
                {
                    $.ajax({
                        url:url+'controller/userController.php',
                        type: 'post',
                        //dataType: 'json',
                        processData:false,
                        contentType:false,
                        data:formData,
                        beforeSend:function()
                        {
                            //$('#loadData').show();
                        },
                        success:function(data)
                        {
                            if(data==1)
                            {
                                $('#error_message').html('<div class="alert alert-success">Password has been change</div>');
                                setInterval(() => {
                                    $('#error_message').html('');
                                    window.location.href=url+"index.php";
                                }, 3000);
                            }
                        }
                    });
                }
            }
            else
            {
                $('#error_message').html('<div class="alert alert-warning">All fill not null nullable</div>');
                setInterval(() => {
                    $('#error_message').html('');
                }, 3000);
            }
        })

    });
</script>