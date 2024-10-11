<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow row p-3 bg-white">
            <div class="col-lg-12">
            <div class="title d-flex justify-content-between align-items-center">
                <h3 class="text-info kh-text font-weight-bold">ខេត្ត​ / ក្រុង</h3>
                <a href="#add_faculty" class="btn btn-sm" data-toggle="modal" data-target="#add_major"><i class="fa-solid fa-plus text-success"></i> បន្ថែមថ្មី </a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive" id="load_province">
                    <thead>
                        <tr>
                            <th class="text-info kh-text">ល.រ</th>
                            <th class="text-info kh-text">លេខកូដ</th>
                            <td class="w-25 text-info kh-text">ឈ្មោះខេត្តខ្មែរ</td>
                            <td class="w-25 text-info kh-text">ឈ្មោះខេត្តអង់គ្លេស</td>
                            <th class="w-25 text-info kh-text">ថ្ងៃខែឆ្នាំចុះបញ្ចី</th>
                            <th class="w-25 text-info kh-text text-right">ប៊ូតុង</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>01</td>
                            <td>កំពង់ធំ</td>
                            <td>khompong thum</td>
                            <td>active</td>
                            <td class="text-right">
                                <a href="student_edit.php" class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                                <a href="view_building.php" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>
                                <button class="btn btn-sm"><i class="fa-solid fa-ban text-danger"></i></button>
                            </td>
                        </tr> -->
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
                    <h5 class="modal-title" id="exampleModalLongTitle">បន្ថែមខេត្តថ្មី</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ឈ្មោះខេត្តខ្មែរ</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ឈ្មោះខេត្តអង់គ្លេស</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">សកម្មភាព</label>
                    <select name="" id="" class="form-control" required>

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
                    <button type="submit" class="btn btn-outline-info" ><i class="fa-solid fa-address-card"></i> រក្សាទុក</button>
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
        load_province();
    })
</script>

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
                alert('ok data was submitted');
            }
            form.classList.add('was-validated'); 
        }, false);
        });
    }, false);
    })();
</script>


<script>
    var list_province=[],id,datatable;
    $(document).ready(function() {
        
        datatable = $('#load_province').DataTable({
            data:list_province,
            columns:[
                {data:'n',AutoWidth:true,},
                {data:'code',AutoWidth:true},
                {data:'province_kh_name',AutoWidth:true},
                {data:'province_en_name',AutoWidth:true},
                {data:'modify_date',AutoWidth:true},
                {
                    data:'province_id',AutoWidth:true,
                    className : 'text-right',
                    'render':function(data,type,row){
                        var view = '<a href="view_st_province.php?ST='+row['province_id']+'&BDN='+row['province_kh_name']+'" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>';
                        return view;
                    }
                }
                
            ]
        });
    });

    function load_province()
    {
        $.ajax({
            url:url+'controller/addressController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_province_row:1},
            beforeSend:function()
            {
                $('#_loadData').show();
            },
            success:function(data)
            {
                //console.log(data);
                list_province=[];
                list_province=data;
                datatable.clear();
                datatable.rows.add(list_province);
                datatable.draw();
                $('#_loadData').hide();
            }
        });
    }
</script>