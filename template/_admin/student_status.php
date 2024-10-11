<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow row p-3 bg-white">
            <div class="col-lg-12">
            <div class="title d-flex justify-content-between align-items-center">
                <h3 class="font-weight-bold kh-text text-info">ស្ថានភាពនិស្សិត</h3>
                <img src="images/abc.gif" id="_loadData" class="overlay" alt="Image">
                <a href="#add_student_status" class="btn btn-sm" data-toggle="modal" data-target="#add_student_status"><i class="fa-solid fa-plus text-success"></i> បន្ថែមថ្មី </a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive">
                    <thead>
                        <tr>
                            <th class="kh-text text-info">ល.រ</th>
                            <th class="w-50 kh-text text-info">ឈ្មោះ</th>
                            <th class="w-25 kh-text text-info">ប្រាក់ត្រូវបង់</th>
                            <th class="w-25 kh-text text-info">សកម្មភាព</th>
                            <th class="w-25 kh-text text-info text-right">ប៊ូតុង</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            </div>

        </div>


        <!-- Edit user -->
        
        </button>

        <!-- Modal add data to database-->
    <div class="modal fade" id="add_student_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ការបន្ថែមស្ថានភាពរបស់និស្សិត</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ឈ្មោះ</label>
                        <input type="text" class="form-control" id="student_status_name" placeholder="Enter username" name="student_status_name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ប្រាក់ត្រូវបង់</label>
                        <input type="number" class="form-control" id="payment" placeholder="Enter username" name="payment" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> ខ្ញុំយល់ព្រម
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <img src="images/abc.gif" id="_overlay" class="overlay" alt="Image">
                    <button type="submit" class="btn btn-outline-info" ><i class="fa-solid fa-address-card"></i> រក្សាទុក</button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>


        <!-- Modal Edit-->
    <div class="modal fade" id="edit_student_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="_needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ការកែស្ថានភាពរបស់និស្សិត</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ឈ្មោះ</label>
                        <input type="hidden" name="get_id" id="get_id">
                        <input type="text" class="form-control" id="uname_student_status" placeholder="Enter username" name="uname_student_status" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ប្រាក់ត្រូវបង់</label>
                        <input type="number" class="form-control" id="upayment" placeholder="Enter username" name="upayment" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ប្រាក់ត្រូវបង់</label>
                        <select  class="form-control" name="uname_select_active" id="uname_select_active">
                            <option value="" disabled selected>--សូមជ្រើរើស--</option>
                            <option value="1">active</option>
                            <option value="0">inactive</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> ខ្ញុំយល់ព្រម
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <img src="images/abc.gif" id="overlay" class="overlay" alt="Image">
                    <button type="submit" class="btn btn-outline-info disalbe-btn" > <i class="fa-solid fa-address-card"></i> រក្សាទុក</button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
<?php require_once('../_layout/footer.php') ;?>

<script>
    $(function () {
        $('.facultyMainNav').addClass('active');
    })
</script>
<script>
    function select_row()
    {
        $.ajax({
            url:url+'controller/studentTypeController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_all_row:1},
            beforeSend:function()
            {
                $('#_loadData').show();
            },
            success:function(data)
            {
                if(data!=0)
                {
                    var n=1;
                    $('tbody').html('');
                    $.each(data, function(key, value) {
                        $('tbody').append(
                            '<tr>\
                                <td>0'+(n++)+'</td>\
                                <td>'+value.name+'</td>\
                                <td>'+value.feature+'</td>\
                                <td class="text-right">\
                                    <a href="#" id="update_student_type" val='+value.id+' class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></a>\
                                </td>\
                            </tr>\
                        ');
                    });
                }
                else
                {
                    swal('បរាជ័យ', 'ការតភ្ជាប់របស់លោកអ្នកមានបញ្ចា សូមពិនិត្យមើលឡើងវិញ','warning');
                }
               
                $('.table').DataTable();
                $('#_loadData').hide();
            }
        });
    }
</script>

<script>
    // function to display information
    // Disable form submissions if there are invalid fields
    // Add new student type
    var url = "http://localhost:80/sarana/";

    function select_row()
    {
        $.ajax({
            url:url+'controller/studentStatusController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_all_row:1},
            beforeSend:function()
            {
                $('#_loadData').show();
            },
            success:function(data)
            {
                if(data!=0)
                {
                    var n=1;
                    var active;
                    $('tbody').html('');
                    $.each(data, function(key, value) {
                        if(value.feature==1) active = '<span class="text-success">active</span>';
                        else active = '<span class="text-danger">inactive</span>';
                        $('tbody').append(
                            '<tr>\
                                <td>0'+(n++)+'</td>\
                                <td>'+value.status_name+'</td>\
                                <td class="text-info">'+value.payment+' ៛</td>\
                                <td>'+active+'</td>\
                                <td class="text-right">\
                                    <a href="#" id="update_student_status" val='+value.id+' class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></a>\
                                </td>\
                            </tr>\
                        ');
                    });
                }
                else
                {
                    swal('បរាជ័យ', 'ការតភ្ជាប់របស់លោកអ្នកមានបញ្ចា សូមពិនិត្យមើលឡើងវិញ','warning');
                }
               
                $('.table').DataTable();
                $('#_loadData').hide();
            }
        });
    }

    $(document).ready(function () {
        select_row();
        $(document).on('click', '#update_student_status',function(){
            var id = $(this).attr('val');
            $('#edit_student_status').modal('show');
            $.ajax({
                url:url+'controller/studentStatusController.php',
                type: 'post',
                dataType: 'json',
                data:{_ID:id},
                success:function(data)
                {
                    $('#upayment').val(data[0].payment);
                    $('#uname_student_status').val(data[0].status_name);
                    $('#get_id').val(data[0].id);
                    $('#uname_select_active').val(data[0].feature);
                }
            });
        });  
});

</script>

<script>
    
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
               
            }
            else
            {
                event.preventDefault();
                var frm = new FormData(this);
                $.ajax({
                    url:url+'controller/studentStatusController.php',
                    type:'post',
                    //dataType:'json',
                    data:frm,
                    processData:false,
                    contentType:false,
                    beforeSend:function()
                    {
                        $('#_overlay').show();
                        $('.btn-outline-info').prop('disabled',true);
                    },
                    success:function(data)
                    {
                        $('#_overlay').hide();
                        $('.btn-outline-info').prop('disabled',false);
                        if(data>0)
                        {
                            swal('ជោគជ័យ', 'ស្ថានភាពនៃព័ត៌មាននិស្សិតត្រូវបានរក្សាទុកដោយជោគជ័យ','success');
                            select_row()
                        }
                        else
                        {
                            swal('បរាជ័យ', 'ការតភ្ជាប់របស់លោកអ្នកមានបញ្ចា','warning');
                            
                        }
                    }
                });
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();

</script>

<script>
    // Disable form submissions if there are invalid fields
    // update student type
    (function() {
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('_needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
               
            }
            else
            {
                event.preventDefault();
                var frm = new FormData(this);
                $.ajax({
                    url:url+'controller/studentStatusController.php',
                    type:'post',
                    //dataType:'json',
                    data:frm,
                    processData:false,
                    contentType:false,
                    beforeSend:function()
                    {
                        $('#overlay').show();
                        $('.disalbe-btn').prop('disabled',true);
                    },
                    success:function(data)
                    {
                        $('#overlay').hide();
                        $('.disalbe-btn').prop('disabled',false);
                        if(data==1)
                        {
                            swal('ជោគជ័យ', 'ប្រភេទនៃព័ត៌មាននិស្សិតត្រូវបានកែប្រែដោយជោគជ័យ','success');
                            $('#edit_student_status').modal('hide');
                            select_row()
                        }
                        else
                        {
                            swal('បរាជ័យ', 'ការតភ្ជាប់របស់លោកអ្នកមានបញ្ចា សូមពិនិត្យមើលឡើងវិញ','warning');
                        }
                    }
                });
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
</script>