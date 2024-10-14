<?php require_once('../_layout/head.php') ;?>

    <?php
        $conn = new mysqli(HOST,USER,PASS,DB);
        if(isset($_GET['STU_ID']))
        {
            $id = $_GET['STU_ID'];
            $sql = "SELECT 
            st.id,st.room_id,st.fname,st.name_en,st.gender,st.dob,st.person_phone,st.parent_phone,st.image,st.register_date,st.card_nation_id,
            fa.name,ma.subject_name,de.degree_name,ac.year_name,et.ethnicity,na.nation_kh,stt.name,std.status_name,
            pr.province_kh_name,dis.district_namekh,com.commune_namekh,vil.village_namekh,
            prs.province_kh_name AS pro_name,diss.district_namekh AS dis_name,coms.commune_namekh AS com_name,vils.village_namekh AS village_name,
            bui.building_name,flo.floor_name,str.name_room,fa.name AS fa_name,st.register_date,ve.id AS ve_id,ve.name AS ve_name,ve.status as ve_status,ve.	register_date as ve_data_start
            FROM tbl_student_information AS st 
            INNER JOIN tbl_student_room AS str ON str.id=st.room_id 
            INNER JOIN tbl_faculty AS fa ON st.faculty_id=fa.id 
            INNER JOIN tbl_major AS ma ON ma.id = st.subject_id 
            INNER JOIN tbl_degree AS de ON de.id = st.degree_id 
            INNER JOIN tbl_academic AS ac on ac.id = st.academic_id 
            INNER JOIN tbl_ethnicity AS et ON et.id = st.ethnicity_id 
            INNER JOIN tbl_nationality AS na ON na.id = st.national_id 
            INNER JOIN tbl_current_address as cu on cu.id = st.current_address_id 
            INNER JOIN tbl_place_of_birth AS pl ON pl.id = st.address_place_id 
            INNER JOIN tbl_student_type AS stt ON stt.id = st.student_type_id 
            INNER JOIN tbl_student_status AS std ON std.id = st.status_id
            INNER JOIN tbl_provinces AS pr ON pr.province_id = cu.province_id
            INNER JOIN tbl_districts AS dis ON dis.dis_id = cu.district_id
            INNER JOIN tbl_communes AS com ON com.com_id = cu.comm_id
            INNER JOIN tbl_villages AS vil ON vil.vill_id = cu.village_id
            INNER JOIN tbl_provinces AS prs ON prs.province_id = pl.province_id
            INNER JOIN tbl_districts AS diss ON diss.dis_id = pl.disctrict_id
            INNER JOIN tbl_communes AS coms ON coms.com_id = pl.communue_id
            INNER JOIN tbl_villages AS vils ON vils.vill_id = pl.village_id
            INNER JOIN tbl_building AS bui ON bui.id=str.id_building
            INNER JOIN tbl_floor AS flo ON flo.id = str.floor_id
            LEFT JOIN tbl_vehicle AS ve  ON st.id = ve.student_id
            WHERE st.id = $id";

            $rs = $conn->query($sql);

            $row = $rs->fetch_assoc();
        }
    ?>

        <div class="content shadow p-3 bg-white">
            <div class="title d-flex">
                <a href="manage_teacher.php"><i class="fa-solid fa-arrow-left mr-3" style="font-size:18px"></i></a>
                <h3>ព័ត៌មានលម្អិតរបស់<?php echo $row['name'] ?></h3>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                    <div class="card">
                    <img src="../../public/images/<?php echo $row['image'] ?>" class="card-img-top w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <table class="table table-borderless ">
                   
                    <tr>
                        <td class="kh-text w-25">គោត្តនាម / នាម</td>
                        <!-- <td class="kh-text font-weight-bold text-info">: <?php echo $row['fname'] ?> ជាអក្សរឡាតាំង : <?php echo $row['name_en'] ?></td> -->
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['fname'] ?> </td>

                    </tr>
                    <tr>
                        <td class="kh-text w-25">ជាអក្សរឡាតាំង</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['name_en'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">កាន់អត្តសញ្ញាណប័ណ្ឌលេខ</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['card_nation_id'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">ភេទ</td>
                        <td class="kh-text font-weight-bold text-info">: <?php if($row['gender']=='1') echo 'ស្រី';else echo 'ប្រុស'; ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">ថ្ងៃខែឆ្នាំកំណើត</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['dob'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">ជនជាតិ</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['ethnicity'] ?>, សញ្ជាតិ  : <?php echo $row['nation_kh'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">លេខទូរសព្ទ</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['person_phone'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">លេខទូរសព្ទអាណាព្យាបាល</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['parent_phone'] ?></td>
                    </tr>
                   
                    <tr>
                        <td class="kh-text w-25">ទីកន្លែងកំណើត</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['pro_name'].' '.$row['dis_name'].' '.$row['com_name'].' '.$row['village_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">អាសយដ្ឋានបច្ចុប្បន្ន</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['province_kh_name'].' '.$row['district_namekh'].' '.$row['commune_namekh'].' '.$row['village_namekh'] ?></td>
                    </tr>
                </table>
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                    <tr>
                        <td class="kh-text w-25">ស្នាក់នៅ</td>
                        <td class="kh-text font-weight-bold text-info">: 
                            <?php echo $row['name_room'].' '.$row['floor_name'].' '.$row['building_name'] ?>
                            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#change_room">ប្តូរបន្ទប់</button>
                        </td>
                    </tr>
                   
                    <tr>
                        <td class="kh-text w-25">វិទ្យាស្ថាន</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['fa_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">ជំនាញ</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['subject_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">សិក្សា</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['year_name'] ?></td>
                    </tr>
                    <tr>
                    <td class="kh-text w-25">យានយន្ត</td>
                        <td class="kh-text font-weight-bold text-info">: 
                        <?php 
                            if($row['ve_id'] == '')
                            {
                                ?>គ្មានទេ <a href="#" data-toggle="modal" data-target="#create_vihicle">បន្ថែមយានយន្ត​ ?</a><?php
                            }
                            else 
                            {
                                echo 'ម៉ាក់​ : '.$row['ve_name'].', ស្លាក់លេខម៉ូត៉ូ : '.$row['ve_status'].', ចុះនៅថ្ងៃទី : '.$row['ve_data_start'].' '.' <button type="button" data-id='.$row['ve_id'].' id="btn_remove" class="btn btn-sm"><i class="fa-solid fa-circle-minus text-danger"></i> remove</button>';
                            }
                        ?> 
                        </td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">ប្រភេទ</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['status_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="kh-text w-25">ថ្ងៃខែចុះឈ្មោះចូលស្នាក់នៅ</td>
                        <td class="kh-text font-weight-bold text-info">: <?php echo $row['register_date'] ?></td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="create_vihicle">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                <form class="needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">បន្ថែមយានជំនិះ</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ម៉ាក់ម៉ូតូ</label><input type="hidden" name="student_id" value="<?php echo $row['id'] ?>">
                        <input type="text" class="form-control" id="name" placeholder="ឧទាហរណ៍ ៖ Hongda" name="name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ស្លាក់លេខម៉ូត៉ូ</label>
                        <input type="text" class="form-control" id="status" placeholder="ឧទាហរណ៍ ៖​ កំពង់ធំ 1A-2354" name="status" required>
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

        <!-- Modal change room -->
        <div class="modal fade" id="change_room">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                <form class="_needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ប្តូរបន្ទប់ស្នាក់នៅ</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="building_id">អគារ</label>
                        <input type="hidden" value="<?php echo $row ['room_id'] ?>" name="old_room_id">
                        <input type="hidden" value="<?php echo $row ['id'] ?>" name="student_id_room">
                        <select name="building_id" class="form-control" id="building_id" required>
                            <option value="" selected disabled><?php echo $row ['building_name'] ?></option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="floor_id">ជាន់ទី</label>
                        <select name="floor_id" class="form-control" id="floor_id" required>
                            <option value="" selected disabled><?php echo $row ['floor_name'] ?></option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="room_id">បន្ទប់លេខ</label>
                        <select name="room_id" class="form-control" id="room_id" required>
                            <option value="" selected disabled><?php echo $row['name_room'] ?></option>
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
                    <button type="submit" class="btn btn-primary">រក្សាទុក</button>
                </div>
                </div>
                </form>
            </div>
        </div>
<?php require_once('../_layout/footer.php') ;?>

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
                var formData = new FormData(this);
                $.ajax({
                    url:url+'controller/vehicleController.php',
                    type:'post',
                    //dataType:'json',
                    data:formData,
                    processData:false,
                    contentType:false,
                    success:function(data)
                    {
                        swal('ជោគជ័យ', 'យានយន្តបានបញ្ចូលដោយជោគជ័យ ','success');
                        setInterval(() => {
                            window.location.reload();
                        }, 2000);
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
                var formData = new FormData(this);
                $.ajax({
                    url:url+'controller/studentController.php',
                    type:'post',
                    //dataType:'json',
                    data:formData,
                    processData:false,
                    contentType:false,
                    success:function(data)
                    {
                        if(data==1)
                        {
                            swal('ជោគជ័យ', 'និស្សិតបានប្តូរបន្ទប់បានដោយជោគជ័យ ','success');
                        }
                        else{
                            swal('ជោគជ័យ', ' ប្តូរបន្តប់បានដោយជោគជ័យ '+data,'warning');
                        }
                        setInterval(() => {
                            window.location.reload();
                        }, 2000);
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
    $(function(){
        $(document).on('click','#btn_remove',function(){
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
                        url:url+'controller/vehicleController.php',
                        type: 'post',
                        //dataType: 'json',
                        data:{_remove_vehicle_row:ID},
                        success:function(data)
                        {
                            swal('Removed',"អ្នកត្រូបានធ្វើការលុបទិន្នន័យ ("+data+" row) បានដោយជោគជ័យ",'success');
                            setInterval(() => {
                                window.location.reload();
                            }, 2000);
                        }
                    });
                    
                } else {
                    swal("ទិន្នន័យមានសុវត្តិភាព ដោយមិនបានធ្វើការលុបចេញពីប្រព័ន្ធនោះទេ");
                }
            });
        });

        get_dropdownList_building('#building_id');
        $('#building_id').change(function(){
            $('#room_id').html('សូមជ្រើសរើបន្តប់');
            var ID_building = $('#building_id').val();
            get_dropdownList_floor_active('#floor_id',ID_building);
        })

        $('#floor_id').change(function(){
            var ID_floor = $('#floor_id').val();
            var ID_building = $('#building_id').val();
            get_room_filter_floor_building('#room_id',ID_building,ID_floor);
        })
    });
</script> 