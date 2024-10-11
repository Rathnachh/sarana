<?php require_once('../_layout/head.php') ;?>
<?php
    $conn = new mysqli(HOST,USER,PASS,DB);

    $sql = "SELECT * FROM `tbl_user_role`";

    $data = $conn->query($sql);
?>

        <div class="content shadow p-3 bg-white ">
            <div class="title d-flex justify-content-between flex-wrap align-items-center">
                <h3 class="text-info kh-text font-weight-bold">ការគ្រប់គ្រងលើអ្នកប្រើប្រាស់ប្រព័ន្ធ</h3>
                
            </div>
            <div class="info-student my-3 table-responsive">
                <table class="table nowrap table-hover w-100 table-stripe " id="list_user">
                    <thead>
                        <tr>
                            <th class="kh-text">ល.រ</th>
                            <th class="d-none"></th>
                            <th class="w-25 kh-text text-info">ឈ្មោះនិស្សិត</th>
                            <th class="w-25 kh-text text-info">គណនីប្រើប្រាស់</th>
                            <th class="w-25 kh-text text-info">សិទ្ធប្រើប្រាស់</th>
                            <th class="w-25 kh-text text-info">សកម្មភាព</th>
                            <th class="w-25 kh-text text-info"></th>
                        </tr>
                    </thead>
                  <tbody></tbody>
                </table>
            </div>
        </div>

    

        <!-- Edit user -->
        
        

        <!-- Modal -->
    <div class="modal fade" id="user_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <form class="needs-validation" novalidate>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ការកំណត់សិទ្ធលើគណនីរបស់អ្នកប្រើប្រាស់</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="uname">សិទ្ធអ្នកប្រើប្រាស់:</label><input type="hidden" id="id" name="id">
                        <select name="user_role" id="user_role" class="form-control" required>
                            <option value="" disabled selected>--ជ្រើសរើស--</option>
                            <?php
                                while ($row = $data->fetch_assoc())
                                {
                                    ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['role_name']; ?> </option>
                                    <?php
                                }
                            ?>
                        </select>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
            <div class="modal-footer">
                <img src="images/abc.gif" id="overlay" class="overlay" alt="Image">
                <button type="button" id="reset_password" class="btn btn-danger btn-sm">Reset password</button>
                <button type="submit" class="btn btn-primary btn-sm">Change</button>
            </div>
            </div>
            </form>
        </div>
    </div>
<?php require_once('../_layout/footer.php') ;?>

<script>
    $(function () {
        select_row();
        $('.usernameMainNav').addClass('active');

        $(document).on('click', '#btn_active', function(){
            var ID = $(this).attr('data-id');
            
            $.ajax({
                url:url+'controller/userController.php',
                dataType: 'json',
                type:'post',
                data:{_ID:ID},
                success:function(data)
                {
                    select_row();
                }
            });
       });

       $(document).on('click', '#update_user_data', function(){
            var ID = $(this).attr('data-id');
            $('#user_edit').modal('show');
            var row = $(this).closest('tr');
            var role_id = row.find('td:eq(1)').text();
            var ID = $(this).attr('data-id');
            $('#id').val(ID);
            $('#user_role').val(role_id);
       })

       $(document).on('click', '#reset_password',function(){
            $.ajax({
                url:url+'controller/userController.php',
                type:'post',
                data:{reset_password:$('#id').val()},
                success:function(data)
                {
                    swal('ជោគជ័យ', 'Reset password បានដោយជោគជ័យ','success');
                }
            });
       });

    })
</script>

<!-- <script>
    //select alll row
    function select_row()
    {
        $.ajax({
            url:url+'controller/userController.php',
            type: 'post',
            dataType: 'json',
            data:{get_user:1},
            beforeSend:function()
            {
                $('#_loadingData').show();
            },
            success:function(data)
            {
                var active;
                var feature ;
                var n=1;
                $('.table').DataTable();
                $('tbody').html('');
                $.each(data, function(key, value) {
                    active = value.feature == 0 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>';
                    feature = value.feature == 0 ? '<i class="fa-solid fa-toggle-on text-success"></i>' : '<i class="fa-solid fa-toggle-off text-danger"></i>';
                    $('tbody').append(
                        '<tr>\
                            <td>0'+(n++)+'</td>\
                            <td class="d-none">'+value.role_id+'</td>\
                            <td class="text-info">'+value.fname+'</td>\
                            <td class="text-primary">'+value.username+'</td>\
                            <td class="text-right">'+value.role_name+'</td>\
                            <td class="text-right">'+active+'</td>\
                            <td class="text-right">\
                                <button id="update_user_data" data-id='+value.id+' class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></button>\
                                <button class="btn btn-sm" data-id="'+value.id+'" id="btn_active">'+feature+'</button>\
                            </td>\
                        </tr>\
                    ');
                });
                
                $('#_loadingData').hide();
            }
        });
    }
</script> -->

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
                //alert('ok data was submitted');
                var frm = new FormData(this);
                $.ajax({
                    url:url+'controller/userController.php',
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
                        select_row();
                        $('#overlay').hide();
                        $('#user_edit').modal('hide');
                        $('.btn-outline-info').prop('disabled',false);
                        if(data==1)
                        {
                            swal('ជោគជ័យ', 'កែប្រែដោយជោគជ័យ','success');
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

<script>
    var listSlider=[],id,datatable;
    $(document).ready(function() {
        
        datatable = $('#list_user').DataTable({
            data:listSlider,
            buttons:[],
            columns:[
                {data:'n',AutoWidth:true,},
                {
                    className : 'd-none',
                    data:'role_id',AutoWidth:true
                },
                {data:'fname',AutoWidth:true},
                {data:'username',AutoWidth:true},
                {
                    data:'role_name',
                    AutoWidth:true,
                },
                {
                    data:'feature',AutoWidth:true,
                    //className:'text-righ',
                    'render': function(data){
                        var feature = data == '0' ? '<span class="badge badge-success">active</span>' : '<span class="badge badge-danger">inactive</span>';
                        return feature;
                    }
                },
                {'data':'id',AutoWidth:true,
                    'render':function(data,type,row){
                        var feature = row['feature'] == '0' ? '<i class="fa-solid fa-toggle-on text-success"></i>' : '<i class="fa-solid fa-toggle-off text-danger"></i>';
                        var active ='<button class="btn btn-sm" data-id="'+row['id']+'" id="btn_active">'+feature+'</button>';
                        var feature = ' <button id="update_user_data" data-id='+row['id']+' class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></button>';
                        return feature+active;
                    }
                }   
            ]
        });
    });

    function select_row()
    {
        $.ajax({
            url:url+'controller/userController.php',
            type: 'post',
            dataType: 'json',
            data:{get_user:1},
            beforeSend:function()
            {
                $('#_loadData').show();
            },
            success:function(data)
            {
                   //console.log(data);
                    listSlider=[];
                    listSlider=data;
                    datatable.clear();
                    datatable.rows.add(listSlider);
                    datatable.draw();
                    $('#_loadData').hide();
            }
        });
    }
</script>