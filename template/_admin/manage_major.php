<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow row p-3 bg-white">
            <div class="col-lg-12">
            <div class="title d-flex justify-content-between align-items-center">
                <h3 class="kh-text text-info font-weight-bold">ជំនាញសិក្សា</h3>
                <img src="images/abc.gif" id="_loadData" class="overlay" alt="Image">
                <a href="#add_faculty" class="btn btn-sm" data-toggle="modal" data-target="#add_major"><i class="fa-solid fa-plus text-success"></i> បន្ថែមថ្មី </a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive">
                    <thead>
                        <tr>
                            <th class="kh-text text-info">ល.រ</th>
                            <td class="w-50 kh-text text-info">ឈ្មោះវិទ្យាស្ថាន</td>
                            <th class="w-25 kh-text text-info">ឈ្មោះជំនាញ</th>
                            <th class="w-25 kh-text text-info">សកម្មភាព</th>
                            <th class="d-none kh-text text-info">សកម្មភាព</th>
                            <th class="w-25 kh-text text-info text-right">ប៊ូតុង</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            </div>

        </div>


    <!-- Modal -->
    <div class="modal fade" id="add_major" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">បន្ថែមជំនាញសិក្សាថ្មី</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">ជំនាញ</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ឈ្មោះវិទ្យាស្ថាន</label>
                        <select name="_faculty" id="_faculty" class="form-control" required>
                            <option value="" disabled selected>--សូមធ្វើការជ្រើសរើសឈ្មោះវិទ្យាស្ងាន--</option>
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
                    <button type="submit" class="btn btn-outline-info" ><i class="fa-solid fa-address-card"></i> រក្សាទុក</button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="edit_major" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="_needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">បន្ថែមជំនាញសិក្សាថ្មី</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">ជំនាញ</label><input type="hidden" id="_id" name="_id">
                        <input type="text" class="form-control" id="uname" placeholder="Enter name" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ឈ្មោះវិទ្យាស្ថាន</label>
                        <select name="_ufaculty" id="_ufaculty" class="form-control" required>
                            <option value="" disabled selected>--សូមធ្វើការជ្រើសរើសឈ្មោះវិទ្យាស្ងាន--</option>
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
                    <img src="images/abc.gif" id="_overlay" class="overlay" alt="Image">
                    <button type="submit" class="btn btn-outline-info" ><i class="fa-solid fa-address-card"></i> រក្សាទុក</button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
<?php require_once('../_layout/footer.php') ;?>

<!--all event handlers-->
<script>
    $(function(){
        $('.facultyMainNav').addClass('active');
        get_dropdownList_faculty_all('#_faculty');
        get_dropdownList_faculty_all('#_ufaculty');
        list_major();

       // <!--active inactive button new building section-->

       $(document).on('click', '#btn_active', function(){
            var ID = $(this).attr('data-id');
            $.ajax({
                url:url+'controller/majorController.php',
                dataType: 'json',
                type:'post',
                data:{_ID:ID},
                success:function(data)
                {
                    list_major();
                }
            });
       });

       ///<!---edit building section-->

       $(document).on('click', '#btn_edit', function(){
            var ID = $(this).attr('data-id');
            $('#edit_major').modal('show');
            var name = $(this).closest('tr').find('td:eq(1)').text();
            var faculty_id = $(this).closest('tr').find('td:eq(2)').text();

            $('#uname').val(name);
            $('#_ufaculty').val(faculty_id);
            $('#_id').val(ID);

       });

    });
</script>

<!--list_building section-->
<script>
    function list_major()
    {
        $.ajax({
            url:url+'controller/majorController.php',
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
                        if(value.feature==1) 
                        {
                            active = '<span class="badge badge-success">active</span>';
                            feature = '<i class="fa-solid fa-toggle-on text-success"></i>';
                        }
                        else 
                        {
                            active = '<span class="badge badge-danger">inactive</span>';
                            feature = '<i class="fa-solid fa-toggle-off text-danger"></i>';
                        }

                        $('tbody').append(
                            '<tr>\
                                <td class="kh-text">'+(n++)+'</td>\
                                <td class="kh-text">'+value.subject_name+'</td>\
                                <td class="d-none kh-text ">'+value.faculti_id+'</td>\
                                <td class="text-success kh-text">'+value.name+'</td>\
                                <td class="text-success kh-text">'+active+'</td>\
                                <td class="text-right kh-text">\
                                    <button type="button" data-id="'+value.id+'" id="btn_edit" class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></button>\
                                    <button class="btn btn-sm" data-id="'+value.id+'" id="btn_active">'+feature+'</button>\
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

<!--Add new building section-->

<script>
    // Disable form submissions if there are invalid fields
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
                    url:url+'controller/majorController.php',
                    type:'post',
                    //dataType:'json',
                    data:frm,
                    processData:false,
                    contentType:false,
                    beforeSend:function()
                    {
                        $('#overlay').show();
                        $('.btn-outline-info').prop('disabled',true);
                    },
                    success:function(data)
                    {
                        $('#overlay').hide();
                        $('.btn-outline-info').prop('disabled',false);
                        if(data>0)
                        {
                            swal('ជោគជ័យ', 'ជំនាញថ្មីត្រូវបានរក្សាទុកដោយជោគជ័យ','success');
                            list_major();
                        }
                        else
                        {
                            swal('បរាជ័យ',data,'warning');
                            
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

<!--edit new building section-->
<script>
    // Disable form submissions if there are invalid fields
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
                    url:url+'controller/majorController.php',
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
                        $('#edit_major').modal('hide');
                        $('.btn-outline-info').prop('disabled',false);
                        if(data==1)
                        {
                            swal('ជោគជ័យ', 'ជំនាញថ្មីត្រូវបានកែប្រែដោយជោគជ័យ','success');
                            list_major();
                        }
                        else
                        {
                            swal('បរាជ័យ',data,'warning');
                            
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
