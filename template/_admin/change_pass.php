<?php require_once('../_layout/head.php'); ?>

<div class="content p-3">
    <div class="title title d-flex align-items-center">
        <h3 class="kh-text font-weight-bold text-info">ផ្លាស់ប្តូរពាក្យសម្ងាត់</h3>
    </div>

    <div class="row mt-5">
        <!-- <div class="col-lg-3"></div> -->
        <div class="col-lg-4">
            <form id="form_change">
                <div id="error_message"></div>
                <div class="form-group">
                    <label for="" class="kh-text">ពាក្យសម្ងាត់ថ្មី</label>
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['admin_id'] ?>">
                    <input type="password" id="new_password" name="new_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="" class="kh-text">បញ្ជាក់ពាក្យសម្ងាត់ថ្មី</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="w-75 btn btn-outline-info kh-text">រក្សាទុក</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../_layout/footer.php'); ?>

<script>
    $(function() {


        $('#form_change').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var new_pass = $('#new_password').val();
            var re_pass = $('#confirm_password').val();
            if (re_pass != "" && new_pass != "") {
                if (re_pass != new_pass) {
                    $('#error_message').html('<div class="alert alert-warning">Password not match...!</div>');
                    setInterval(() => {
                        $('#error_message').html('');
                    }, 3000);
                } else {
                    $.ajax({
                        url: url + 'controller/userController.php',
                        type: 'post',
                        //dataType: 'json',
                        processData: false,
                        contentType: false,
                        data: formData,
                        beforeSend: function() {
                            //$('#loadData').show();
                        },
                        success: function(data) {
                            if (data == 1) {
                                $('#error_message').html('<div class="alert alert-success">Password has been change</div>');
                                setInterval(() => {
                                    $('#error_message').html('');
                                    window.location.href = url + "index.php";
                                }, 3000);
                            }
                        }
                    });
                }
            } else {
                $('#error_message').html('<div class="alert alert-warning">All fill not null nullable</div>');
                setInterval(() => {
                    $('#error_message').html('');
                }, 3000);
            }
        })

    });
</script>