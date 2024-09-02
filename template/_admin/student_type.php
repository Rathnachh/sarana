<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow row p-3 bg-white">
            <div class="col-lg-12">
            <div class="title d-flex justify-content-between align-items-center">
                <h3>ប្រភេទនិស្សិត</h3>
                <img src="images/abc.gif" id="_loadData" class="overlay" alt="Image">
                <a href="#add_faculty" class="btn btn-sm" data-toggle="modal" data-target="#add_student_type"><i class="fa-solid fa-plus text-success"></i> បន្ថែមថ្មី </a>
            </div>
            
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive">
                    <thead>
                        <tr>
                            <th>ល.រ</th>
                            <th class="w-50">ឈ្មោះ</th>
                            <th class="w-50">សកម្មភាព</th>
                            <th class="w-50 text-right">ប៊ូតុង</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            </div>
            
        </div>


        <!-- Edit user -->
        <!-- Modal add -->
    <div class="modal fade" id="add_student_type" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form id="add_student_type_form" class="_needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">បន្ថែមប្ររភេទនិស្សិតថ្មី</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">ឈ្មោះ</label>
                        <input type="text" class="form-control" id="name" name="name_student_type" placeholder="Enter username" required>
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
                    <button type="submit" name="add_student_type" class="btn btn-outline-info" ><i class="fa-solid fa-address-card"></i> រក្សាទុក</button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>

        <!-- Modal Edit-->
    <div class="modal fade" id="edit_student_type" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ការកែប្រែប្រភេទរបស់និស្សិត</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ឈ្មោះ</label>
                        <input type="hidden" name="get_id" id="get_id">
                        <input type="text" class="form-control" id="uname_student_type" placeholder="Enter username" name="uname_student_type" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">សកម្មភាព</label>
                        <select name="uname_select_active" id="uname_select_active" class="form-control" required>
                            <option value="" selected disabled>--ជ្រើសរើស--</option>
                            <option value="1">Active</option>
                            <option value="0">Inctive</option>
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
    });
    

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
                    var active ;
                    $('tbody').html('');
                    $.each(data, function(key, value) {
                        if(value.feature==1) active = '<span class="badge badge-success">active</span>';
                        else active = '<span class="badge badge-danger">inactive</span>';
                        $('tbody').append(
                            '<tr>\
                                <td>0'+(n++)+'</td>\
                                <td>'+value.name+'</td>\
                                <td>'+active+'</td>\
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
    $(document).ready(function() {
        select_row();
        $(document).on('click', '#update_student_type',function(){
            var id = $(this).attr('val');
            $('#edit_student_type').modal('show');
            $.ajax({
                url:url+'controller/studentTypeController.php',
                type: 'post',
                dataType: 'json',
                data:{_ID:id},
                success:function(data)
                {
                    $('#uname_student_type').val(data[0].name);
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
                    url:url+'controller/studentTypeController.php',
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
                        $('#add_student_type').modal('hide');
                        if(data>0)
                        {
                            swal('ជោគជ័យ', 'ប្រភេទនៃព័ត៌មាននិស្សិតត្រូវបានរក្សាទុកដោយជោគជ័យ','success');
                            $('#edit_student_type').modal('hide');
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


<script>
    // Disable form submissions if there are invalid fields
    // update student type
    (function() {
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
                    url:url+'controller/studentTypeController.php',
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
                        if(data==0)
                        {
                            swal('ជោគជ័យ', 'ប្រភេទនៃព័ត៌មាននិស្សិតត្រូវបានកែប្រែដោយជោគជ័យ','success');
                            $('#edit_student_type').modal('hide');
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

