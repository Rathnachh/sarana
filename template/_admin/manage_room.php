<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow p-3 bg-white">
            <div class="title d-flex justify-content-between align-items-center">
                <h3 class="text-info kh-text font-weight-bold">គ្រប់គ្រងសិស្សដែលស្នាក់នៅតាមបន្ទប់នីមួយៗ</h3>
                <img src="images/abc.gif" id="_loadData" class="overlay" alt="Image">
                <a href="#add_floor" class="btn btn-sm" data-toggle="modal" data-target="#add_room"><i class="fa-solid fa-plus text-success"></i> បន្ថែមថ្មី </a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive" id="example">
                    <thead>
                        <tr>
                            <th class="text-info kh-text">ល.រ</th>
                            <th class="w-25 text-info kh-text">ឈ្មោះបន្ទប់</th>
                            <th class="w-25 text-info kh-text">ជាន់ទី</th>
                            <th class="w-25 text-info kh-text">ឈ្មោះអគារ</th>
                            <th class="d-none text-info kh-text"></th>
                            <th class="d-none text-info kh-text"></th>
                            <th class="d-none text-info kh-text"></th>
                            <th class="text-info kh-text">សមកម្មភាព</th>
                            <th class="w-25 text-info kh-text">ចំនួននិស្សិត</th>
                            <th class="w-25 text-info kh-text">ប៊ូតុងចុច</th>
                        </tr>
                    </thead>
                   <tbody>
                        
                   </tbody>
                </table>
            </div>

        </div>

    <div class="modal fade" id="add_room" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">បញ្ចូលបជាន់នៃអគារនីមួយៗ</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="room_name">ឈ្មោះបន្ទប់</label>
                        <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Enter username" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ជ្រើសរើសឈ្មោះអគារ</label>
                        <select name="building_name" id="building_name" class="form-control" placeholder="Enter username" required>
                            <option value="" disabled selected>--សូមធ្វើការជ្រើរើស--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ជ្រើសរើសជាន់នៃអគារ</label>
                        <select name="floor_name" id="floor_name" class="form-control" placeholder="Enter username" required>
                            <option value="" disabled selected>--សូមធ្វើការជ្រើរើស--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ការពិព័ណនាពីបន្ទប់ស្នាក់នៅ</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
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

    <div class="modal fade" id="edit_buildings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form class="_needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">កែប្រែឈ្មោះអគារ</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="room_name">ឈ្មោះបន្ទប់</label><input type="hidden" id="_id"  name="_id">
                        <input type="text" class="form-control" id="uroom_name" name="uroom_name" placeholder="Enter username" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="ubuilding_name">ជ្រើសរើសឈ្មោះអគារ</label>
                        <select name="ubuilding_name" id="ubuilding_name" class="form-control" placeholder="Enter username" required>
                            <option value="" disabled selected>--សូមធ្វើការជ្រើរើស--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="ufloor_name">ជ្រើសរើសជាន់នៃអគារ</label>
                        <select name="ufloor_name" id="ufloor_name" class="form-control" placeholder="Enter username" required>
                            <option value="" disabled selected>--សូមធ្វើការជ្រើរើស--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ការពិព័ណនាពីបន្ទប់ស្នាក់នៅ</label>
                        <textarea name="udescription" id="udescription" class="form-control"></textarea>
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

<!--all event handlers-->
<script>
$(function(){
    //list_rooms();
    roomList()

    get_dropdownList_building('#building_name');
    get_dropdownList_building('#ubuilding_name');

    get_dropdownList_floor_all('#ufloor_name');

    $('#floor_name').prop('disabled', true);
    $('#ufloor_name').prop('disabled', true);
    //select building to enable dropdown list_floor

    $('#building_name').on('change', function(){
        $('#floor_name').prop('disabled', false);

        var building_id = $('#building_name').val();

        get_dropdownList_floor('#floor_name',building_id);

       $('#ufloor_name').prop('disabled', false);

    });

    //select building to enable dropdown list_floor edit

    $('#ubuilding_name').on('change', function(){

        var building_id = $('#ubuilding_name').val();

        get_dropdownList_floor('#ufloor_name',building_id);

        $('#ufloor_name').prop('disabled', false);

    });

    // <!--active inactive button new building section-->

    $(document).on('click', '#btn_active', function(){
        var ID = $(this).attr('data-id');
        $.ajax({
            url:url+'controller/roomController.php',
            //dataType: 'json',
            type:'post',
            data:{_ID:ID},
            success:function(data)
            {
                roomList();
            }
        });
    });

    ///<!---show edit building section-->

    $(document).on('click', '#btn_edit', function(){
        var ID = $(this).attr('data-id');
        $('#edit_buildings').modal('show');
        var name = $(this).closest('tr').find('td:eq(1)').text();
        var building_id = $(this).closest('tr').find('td:eq(4)').text();
        var floor_id = $(this).closest('tr').find('td:eq(5)').text();
        var description = $(this).closest('tr').find('td:eq(6)').text();

        $('#uroom_name').val(name);
        $('#ufloor_name').val(floor_id);
        $('#ubuilding_name').val(building_id);
        $('#udescription').val(description);
        $('#_id').val(ID);

    });

});
</script>

<!--list_building section-->
<script>

    function list_rooms()
    {
        $.ajax({
            url:url+'controller/roomController.php',
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
                        if(value.feature == '1') 
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
                                <td>'+(n++)+'</td>\
                                <td>'+value.name_room+'</td>\
                                <td>'+value.floor_name+'</td>\
                                <td>'+value.building_name+'</td>\
                                <td class="d-none">'+value.id_building+'</td>\
                                <td class="d-none">'+value.floor_id+'</td>\
                                <td class="d-none">'+value.descripton+'</td>\
                                <td class="text-success">'+active+'</td>\
                                <td class="text-right">\
                                    <button type="button" data-id="'+value.id+'" id="btn_edit" class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></button>\
                                    <a href="view_st_room.php?ST='+value.id+'&ROM='+value.name_room+'&BDN='+value.building_name+'" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>\
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

<!--Add new floor section-->

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
                    url:url+'controller/roomController.php',
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
                            swal('ជោគជ័យ', 'បន្ទប់ថ្មីត្រូវបានរក្សាទុកដោយជោគជ័យ','success');
                            roomList();
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
                    url:url+'controller/roomController.php',
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
                        $('#edit_buildings').modal('hide');
                        $('.btn-outline-info').prop('disabled',false);
                        if(data==1)
                        {
                            swal('ជោគជ័យ', 'បន្ទប់ត្រូវបានកែប្រែដោយជោគជ័យ','success');
                            roomList();
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
    var listRoom=[],id,datatable;
    $(document).ready(function() {
        
        datatable = $('#example').DataTable({
            data:listRoom,
            columns:[
                {
                    data:'n',AutoWidth:true,
                },
                {
                    data:'name_room',AutoWidth:true,
                },
                {
                    data:'floor_name',AutoWidth:true,
                },
                {
                    data:'building_name',AutoWidth:true,
                },
                {
                    className:'d-none',
                    data:'id_building',AutoWidth:true,
                },
                {
                    className:'d-none',
                    data:'floor_id',AutoWidth:true,
                },
                {
                    className:'d-none',
                    data:'descripton',AutoWidth:true,
                },
                {
                    data:'feature',AutoWidth:true,
                    'render':function(data)
                    {
                        return data==1? '<span class="badge badge-success">active</span>':'<span class="badge badge-danger">inactive</span>';
                    }
                },
                {
                    className:'text-center',
                    data:'total_student',AutoWidth:true,
                    'render':function(data){
                        return 'ចំនួន( '+data+' )​នាក់';
                    }
                },
                {
                    'data':'id',
                    'render':function(data,type,row)
                    {
                        var feature = row['feature']==1?'<i class="fa-solid fa-toggle-on text-success"></i>':'<i class="fa-solid fa-toggle-off text-danger"></i>';
                        var edit = '<button type="button" data-id="'+row['id']+'" id="btn_edit" class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></button>'
                        var view = '<a href="view_st_room.php?ST='+row['id']+'&ROM='+row['name_room']+'&BDN='+row['building_name']+'" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>'
                        var action = '<button class="btn btn-sm" data-id="'+row['id']+'" id="btn_active">'+feature+'</button>';

                        return edit+view+action;
                    }
                },
            ]
        });
    });

    function roomList()
    {
        $.ajax({
            url:url+'controller/roomController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_all_row:1},
            success:function(data)
            {
                    //console.log(data);
                    listRoom=[];
                    listRoom=data;
                    datatable.clear();
                    datatable.rows.add(listRoom); 
                    datatable.draw();
                    $('#_loadData').hide();
            }
        });
    }
</script> 