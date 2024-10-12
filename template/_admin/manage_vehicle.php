<?php require_once('../_layout/head.php'); ?>

<div class="content shadow p-3 bg-white">
    <div class="title">
        <h3 class="text-info kh-text font-weight-bold">ព័ត៌មានយានយន្តរបស់និស្សិតទាំងអស់ដែលស្នាក់នៅក្នុងអន្តេវាសិកដ្ឋាន</h3>
    </div>
    <div class="info-student my-3 ">
        <table class="table nowrap table-hover w-100 table-responsive" id="List_data_vihicle">
            <thead>
                <tr>
                    <th class="text-info kh-text">ល.រ</th>
                    <th class="w-25 kh-text text-info">ឈ្មោះ</th>
                    <th class="kh-text text-info">ភេទ</th>
                    <th class="w-25 kh-text text-info">ម៉ាក់ម៉ូតូ</th>
                    <th class="w-25 kh-text text-info">ស្លាកលេខម៉ូត៉ូ</th>
                    <th class="w-25 kh-text text-info">ថ្ងៃខែចុះបញ្ជី</th>
                    <th class="w-25 kh-text text-info text-right">ប៊ូតុង</th>
                </tr>
            </thead>
            <!-- <tbody>
                        <tr>
                            <td>01</td>
                            <td>ពេញ ចំរើន</td>
                            <td>ប្រុស</td>
                            <td>Hongda dream 2021</td>
                            <td>1I-8647</td>
                            <td class="text-danger">អសកម្ម</td>
                            <td>
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#update_vihicle"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>ហ៊ីម ម៉េងហ៊ុយ</td>
                            <td>ប្រុស</td>
                            <td>Hongda dream 2021</td>
                            <td>1I-8647</td>
                            <td class="text-success">សកម្ម</td>
                            <td>
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#update_vihicle"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>ផេន មល់</td>
                            <td>ប្រុស</td>
                            <td>Hongda dream 2021</td>
                            <td>1I-8647</td>
                            <td class="text-success">សកម្ម</td>
                            <td>
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#update_vihicle"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>ហាត ឆេងហ៊ាន់</td>
                            <td>ប្រុស</td>
                            <td>Hongda dream 2021</td>
                            <td>1I-8647</td>
                            <td class="text-success">សកម្ម</td>
                            <td>
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#update_vihicle"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>ហួយ វាសនា</td>
                            <td>ប្រុស</td>
                            <td>Hongda dream 2021</td>
                            <td>1I-8647</td>
                            <td class="text-success">សកម្ម</td>
                            <td>
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#update_vihicle"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                    </tbody> -->
        </table>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="update_vihicle">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">បន្ថែមយានជំនិះ</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ម៉ាក់ម៉ូតូ</label><input type="hidden" id="ve_id" name="ve.id">
                        <input type="text" class="form-control" id="name" placeholder="ឧទាហរណ៍ ៖ Hongda" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ស្លាក់លេខម៉ូត៉ូ</label>
                        <input type="text" class="form-control" id="status" placeholder="ឧទាហរណ៍ ៖​ កំពង់ធំ 1A-2354" name="ustatus" required>
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
                    <button type="submit" class="btn btn-primary">រក្សាទុក</button>
                </div>
        </div>
        </form>
    </div>
</div>

<?php require_once('../_layout/footer.php'); ?>

<script>
    $(function() {
        $('.bicycleMainNav').addClass('active')
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

                    } else {
                        event.preventDefault();
                        //alert('ok data was submitted');
                        var frm = new FormData(this);
                        $.ajax({
                            url: url + 'controller/vehicleController.php',
                            type: 'post',
                            //dataType:'json',
                            data: frm,
                            processData: false,
                            contentType: false,
                            beforeSend: function() {
                                $('#overlay').show();
                                $('.btn-outline-info').prop('disabled', true);
                            },
                            success: function(data) {
                                list_vehicle();
                                $('#overlay').hide();
                                $('#update_vihicle').modal('hide');
                                $('.btn-outline-info').prop('disabled', false);
                                if (data == 0) {
                                    swal('ជោគជ័យ', 'កែប្រែដោយជោគជ័យ', 'success');
                                } else {
                                    swal('បរាជ័យ', data, 'warning');

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
    var listVehicle = [],
        id, datatable;
    $(document).ready(function() {
        list_vehicle();
        datatable = $('#List_data_vihicle').DataTable({
            data: listVehicle,
            order: true,
            ordering: true,
            pageLength: 10,
            columns: [{
                    className: 'kh-text ',
                    data: 'n',
                    AutoWidth: true,
                },
                {
                    className: 'kh-text ',
                    data: 'fname',
                    AutoWidth: true
                },
                {
                    className: 'kh-text ',
                    data: 'gender',
                    AutoWidth: true,
                    'render': function(data) {
                        var gender;
                        gender = data == '1' ? 'ស្រី' : 'ប្រុស';
                        return gender;
                    }

                },
                {
                    className: 'kh-text ',
                    data: 'name',
                    AutoWidth: true
                },
                {
                    className: 'kh-text ',
                    data: 'status',
                    AutoWidth: true
                },
                {
                    className: 'kh-text ',
                    data: 'date',
                    AutoWidth: true
                },
                {
                    data: 'id',
                    AutoWidth: true,
                    'render': function(data) {
                        var edit = '<button type="button" data-id = "' + data + '" class="btn btn-sm" id="btn_updateVehicle"><i class="fa-solid fa-pen-to-square text-success"></i></button>';
                        var remove = '<button type="button" data-id = "' + data + '" id="btn_remove" class="btn btn-sm"><i class="fa-solid fa-circle-minus text-danger"></i></button>';
                        return edit + remove;
                    }
                },
            ]
        });

        $(document).on('click', '#btn_remove', function() {
            var ID = $(this).attr('data-id');
            swal({
                    title: "Are you sure you ?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: url + 'controller/vehicleController.php',
                            type: 'post',
                            //dataType: 'json',
                            data: {
                                _remove_vehicle_row: ID
                            },
                            success: function(data) {
                                swal('Removed', "អ្នកបានធ្វើការលុបទិន្នន័យ (" + data + " row) បានដោយជោគជ័យ", 'success');
                                list_vehicle();
                            }
                        });

                    } else {
                        swal("ទិន្នន័យមានសុវត្តិភាព ដោយមិនបានធ្វើការលុបចេញពីប្រព័ន្ធនោះទេ");
                    }
                });
        });

        $(document).on('click', '#btn_updateVehicle', function() {
            $('#update_vihicle').modal('show');
            var ve_id = $(this).attr('data-id');
            var row = $(this).closest('tr');
            var col_3 = row.find('td:eq(3)').text();
            var col_4 = row.find('td:eq(4)').text();
            $('#ve_id').val(ve_id);
            $('#name').val(col_3);
            $('#status').val(col_4);
        })
    });

    function list_vehicle() {
        $.ajax({
            url: url + 'controller/vehicleController.php',
            type: 'post',
            dataType: 'json',
            data: {
                _select_vehicle_row: 1
            },
            success: function(data) {
                //console.log(data);
                listVehicle = [];
                listVehicle = data;
                datatable.clear();
                datatable.rows.add(listVehicle);
                datatable.draw();
                //$('#_loadData').hide();
            }
        });
    }
</script>