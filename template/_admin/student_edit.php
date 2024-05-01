<?php require_once('../_layout/head.php') ;?>

<?php


    $conn = new mysqli(HOST,USER,PASS,DB);

    if(isset($_GET['STU_ID']))
    {
        $ST_ID = $_GET['STU_ID'];
        $CADD = $_GET['CADD'] ;
        $ADD = $_GET['ADD'] ;
        $Room_ID = $_GET['RoomID'] ;
    }
    $sql_ethnicity = "SELECT `id`,`ethnicity` FROM `tbl_ethnicity`";
    $data_ethnicity = $conn->query($sql_ethnicity); 

    $sql_nationality = "SELECT `id`,`nation_kh` FROM `tbl_nationality`";
    $data_nationality = $conn->query($sql_nationality); 

    $sql_province = "SELECT `province_id`,`province_kh_name` FROM `tbl_provinces`";
    $data_province = $conn->query($sql_province); 
    
    $sql_comm = "SELECT `com_id`,`commune_namekh` FROM `tbl_communes` ";
    $data_comm = $conn->query($sql_comm); 

    $sql_village ="SELECT `vill_id`,`village_namekh` FROM `tbl_villages`";
    $data_village = $conn->query($sql_village);

    $sql_district = "SELECT `dis_id`,`district_namekh` FROM `tbl_districts`";
    $data_dis = $conn->query($sql_district);

    $sql_faculty = "SELECT id,name FROM tbl_faculty";
    $data_faculty = $conn->query($sql_faculty);

    $sql_major = "SELECT `id`,`subject_name` FROM `tbl_major`";
    $data_major = $conn->query($sql_major);

    $sql_academic = "SELECT `id`,`year_name` FROM `tbl_academic`";
    $data_academic = $conn->query($sql_academic);

    $sql_degree = "SELECT `id`,`degree_name` FROM `tbl_degree`";
    $data_degree = $conn->query($sql_degree);

    $sql_student_type = "SELECT `id`,`name` FROM `tbl_student_type`";
    $data_student_type = $conn->query($sql_student_type);

    $sql_student_status = "SELECT `id`,`status_name` FROM `tbl_student_status`";
    $data_student_status = $conn->query($sql_student_status);

    
?>

<div class="content shadow row p-3 bg-white">
<div class="col-lg-12">
    <div class="title d-flex align-items-center">
    <a href="manage_student.php"><i class="fa-solid fa-arrow-left mr-3" style="font-size:18px"></i></a>
        <h3>កែប្រែព័ត៌មាននិស្សិត</h3>
    </div>
    <div class="info-student my-3 ">
        <form autocomplete="off" method="post" enctype="multipart/form-data" role="form" class="register_form _needs-validation" novalidate>
            <input type="hidden" name="current_add" id="current_add" value="<?php echo $CADD; ?>" >
            <input type="hidden" name="birth_add" id="birth_add" value="<?php echo $ADD; ?>" >
            <input type="hidden" id="RoomID" value="<?php echo $Room_ID; ?>" >
            <div class="row">
               <div class="col-lg-3 mb-3 p-3" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                    <div style="max-height:400px; width:100%;overflow:hidden" class="mb-2">
                        <img src="images/photo-icon.png" style="object-position: 0px -30px;" id="preview" alt="">
                    </div>
                    <div class="form-group">
                    <input type="hidden" name="file_name_update" id="file_name_update">
                    <input type="file" id="profile_image" name="profile_image">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
               </div>
               <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="full_name_kh">គោត្តនាម / នាម</label><input type="hidden" id="stu_id" name="stu_id" value="<?php echo $ST_ID; ?>">
                            <input type="text" class="form-control" placeholder="Enter full name" name="ufull_name_kh" id="ufull_name_kh" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="uen_fullname">ឈ្មោះជាអក្សរឡាតាំង</label>
                            <input type="text" class="form-control" placeholder="Enter full name" name="uen_fullname" id="uen_fullname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="gender">ភេទ</label>
                            <select name="ugender" class="form-control" id="ugender" required>
                                <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសភេទ--</option>
                                <option value="1">ស្រី</option>
                                <option value="0">ប្រុស</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="ethnicity">ជនជាតិ</label> 
                            <select name="uethnicity" class="form-control" id="uethnicity" required>
                                <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសជនជាតិ--</option>
                                
                                 <?php
                                    foreach ($data_ethnicity as $value) {
                                        ?>
                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['ethnicity']; ?></option>
                                        <?php  
                                    }
                                ?>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="unation">សញ្ជាតិ</label> 
                            <select name="unation" class="form-control" id="unation" required>
                                <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសសញ្ជាតិ--</option>
                                <?php
                                    foreach ($data_nationality as $value) {
                                        ?>
                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['nation_kh']; ?></option>
                                        <?php  
                                    }
                                ?>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="uID_card">លេខអត្តសញ្ញាណប័ណ្ឌ</label>
                            <input type="text" class="form-control" placeholder="Enter full name" name="uID_card" id="uID_card">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="udob">ថ្ងៃខែឆ្នាំកំណើត</label>
                            <input type="date" class="form-control" placeholder="Enter full name" required name="udob" id="udob">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    </div>

                    <!--row 1-->
                    <label for="" style="margin-top: 10px;">ទីកន្លែងកំណើត</label>
                    <hr style="margin:0 0 20px 0px;">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="province">ខេត្ត ឬ ក្រុង</label>
                                <select name="uprovince" class="form-control" id="uprovince" required>
                                    <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                                    <?php
                                        foreach ($data_province as $value) {
                                            ?>
                                                <option value="<?php echo $value['province_id']; ?>"><?php echo $value['province_kh_name']; ?></option>
                                            <?php  
                                        }
                                    ?>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="udistrict">ស្រុក ឬ​ ខណ្ឌ</label>
                                <select name="udistrict" class="form-control" id="udistrict" required>
                                <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                                <?php
                                    foreach ($data_dis as $value) {
                                        ?>
                                            <option value="<?php echo $value['dis_id']; ?>"><?php echo $value['district_namekh']; ?></option>
                                        <?php  
                                    }
                                ?>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="ucommunity">ឃុំ ឬ សង្កាត់</label>
                                <select name="ucommunity" class="form-control" id="ucommunity" required>
                                <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                                <?php
                                    foreach ($data_comm as $value) {
                                        ?>
                                            <option value="<?php echo $value['com_id']; ?>"><?php echo $value['commune_namekh']; ?></option>
                                        <?php  
                                    }
                                ?>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="uvillage">ភូមិ</label>
                                <select name="uvillage" class="form-control" id="uvillage" required>
                                <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                                <?php
                                    foreach ($data_village as $value) {
                                        ?>
                                            <option value="<?php echo $value['vill_id']; ?>"><?php echo $value['village_namekh']; ?></option>
                                        <?php  
                                    }
                                ?>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>

            <!--row 2-->
            <label for="" style="margin-top: 10px;">ទីកន្លែងបច្ចុប្បន្ន</label>
            <hr style="margin:0 0 20px 0px;">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="current_province">ខេត្ត ឬ ក្រុង</label>
                        <select name="current_province" class="form-control" id="current_province" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                            <?php
                                foreach ($data_province as $value) {
                                    ?>
                                        <option value="<?php echo $value['province_id']; ?>"><?php echo $value['province_kh_name']; ?></option>
                                    <?php  
                                }
                            ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="current_destrict">ស្រុក ឬ​ ខណ្ឌ</label>
                        <select name="current_destrict" class="form-control" id="current_destrict" required>
                        <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                        <?php
                            foreach ($data_dis as $value) {
                                ?>
                                    <option value="<?php echo $value['dis_id']; ?>"><?php echo $value['district_namekh']; ?></option>
                                <?php  
                            }
                        ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="current_community">ឃុំ ឬ សង្កាត់</label>
                        <select name="current_community" class="form-control" id="current_community" required>
                        <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                        <?php
                            foreach ($data_comm as $value) {
                                ?>
                                    <option value="<?php echo $value['com_id']; ?>"><?php echo $value['commune_namekh']; ?></option>
                                <?php  
                            }
                        ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="current_village">ភូមិ</label>
                        <select name="current_village" class="form-control" id="current_village" required>
                        <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                        <?php
                            foreach ($data_village as $value) {
                                ?>
                                    <option value="<?php echo $value['vill_id']; ?>"><?php echo $value['village_namekh']; ?></option>
                                <?php  
                            }
                        ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
            </div>

            <!--row 2-->
            <label for="" style="margin-top: 10px;">ជាសិស្ស​ ឬនិស្សិត</label>
            <hr style="margin:0 0 20px 0px;">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="_faculty">មហាវិទ្យាល័យ ឬវិទ្យាស្ថាន</label>
                        <select name="_faculty" class="form-control" id="_faculty" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសមហាវិទ្យាល័យ--</option>
                            <?php
                                foreach ($data_faculty as $value) {
                                    ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                    <?php  
                                }
                            ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="major">ជំនាញ</label>
                        <select name="major" class="form-control" id="major" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសមហាវិទ្យាល័យ ឬវិស្ថានជាមុនសិន--</option>
                            <?php
                                foreach ($data_major as $value) {
                                    ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['subject_name']; ?></option>
                                    <?php  
                                }
                            ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-12"> 
                    <div class="form-group">
                        <label for="_academic">ឆ្នាំសិក្សា</label>
                        <select name="_academic" class="form-control" id="_academic" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសឆ្នាំសិក្សា--</option>
                            <?php
                                foreach ($data_academic as $value) {
                                    ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['year_name']; ?></option>
                                    <?php  
                                }
                            ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="degree">កម្រិតសិក្សា</label>
                        <select name="degree" class="form-control" id="degree" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                            <?php
                                foreach ($data_degree as $value) {
                                    ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['degree_name']; ?></option>
                                    <?php  
                                }
                            ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="person_mobile">លេខទូរសព្ទទំនាក់ទំនង</label>
                        <input type="tel" class="form-control" placeholder="Enter full name" name="person_mobile" id="person_mobile">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
             
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="_phone_parent">លេខទូរសព្ទអណាព្យាបាល</label>
                        <input type="tel" class="form-control" placeholder="Enter full name" name="_phone_parent" id="_phone_parent">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="student_type">ប្រភេទនិស្សិត</label>
                        <select name="student_type" class="form-control" id="student_type" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                            <?php
                                foreach ($data_student_type  as $value) {
                                    ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                    <?php  
                                }
                            ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="student_status">ស្ថានភាពនិស្សិត</label>
                        <select name="student_status" class="form-control" id="student_status" required> 
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                            <?php
                                foreach ($data_student_status  as $value) {
                                    ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['status_name']; ?></option>
                                    <?php  
                                }
                            ?>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
                    <img src="images/abc.gif" id="overlay" class="overlay float-right" alt="Image">
                    <button type="submit" class="btn btn-primary mt-2 float-right" id = "register">រក្សាទុក</button>
                </div>
            </div>

        </form>
    </div>
    </div>
</div>


<?php require_once('../_layout/footer.php') ;?>

<script>
    var URL = url+'controller/studentController.php';
    $(document).ready(function(){
        //$('#gender').chosen(); 
        show_row_student();
        //select date of birth address
    //    _select_addressing('#ucommunity','commune_namekh','com_id','comm');
    //    _select_addressing('#udistrict','district_namekh','dis_id','district');
    //    _select_addressing('#uvillage','village_namekh','vill_id ','village');

    //    //select current address
    //    _select_addressing('#current_community','commune_namekh','com_id','comm');
    //    _select_addressing('#current_destrict','district_namekh','dis_id','district');
    //    _select_addressing('#current_village','village_namekh','vill_id ','village');

        // get_ethnicity('#uethnicity'); 
        // get_nation('#unation');

        //get_province('#uprovince');
        //get_province('#current_province'); 

        
        //get_all_faculty('#_faculty');

       // get_all_acedemic('#_academic');

        //get_dropdownList_building('#building_id');

        //studentType('#student_type');

        //studentStatus('#student_status');

        //studentDegree('#degree');

         //handler for getting id building_id to select floor table for id floor
         //$('#floor_id').prop('disabled', true);
         $('#building_id').change(function(){
            var ID_building = $('#building_id').val();
            $('#floor_id').prop('disabled', false);
            get_dropdownList_floor_active('#floor_id',ID_building);
        })
        //$('#room_id').prop('disabled',true);
        $('#floor_id').change(function(){
            var ID_floor = $('#floor_id').val();
            var ID_building = $('#building_id').val();
            $('#room_id').prop('disabled',false);
            get_room_filter_floor_building('#room_id',ID_building,ID_floor);
        })

        //select images

        $('#profile_image').change(function(){
            imageReader(this,'#preview');
        });

        //get_all_list('#_faculty',2,'name','id',URL);

        //get major filter from faculty 
       // $('#major').prop('disabled',true);
        $('#_faculty').change(function(){
            $('#major').html('');
            $('#major').prop('disabled',false);
            var faculty_id = $('#_faculty').val();
            get_all_major('#major',faculty_id);
        })

        //envent handler for place of date address 
       // $('#current_destrict').prop('disabled',true);
        $('#current_province').change(function(){
            $('#current_destrict').html('');
            $('#current_destrict').prop('disabled',false);
            var pro_id = $('#current_province').val();
            get_district('#current_destrict',pro_id);
        })

       // $('#current_community').prop('disabled',true);
        $('#current_destrict').change(function(){
            $('#current_community').html('');
            $('#current_community').prop('disabled',false);
            var dis_id = $('#current_destrict').val();
            get_community('#current_community',dis_id);
        })

        //$('#current_village').prop('disabled',true);
        $('#current_community').change(function(){
            $('#current_village').prop('disabled',false);
           $('#current_village').html('');
           var com_id = $('#current_community').val();
           get_village('#current_village',com_id);
       })
       //envent handler for current Address 0967022966

       //$('#udistrict').prop('disabled',true);
       $('#uprovince').change(function(){
            $('#udistrict').prop('disabled',false);
            $('#udistrict').html('');
            var pro_id = $('#uprovince').val();
            get_district('#udistrict',pro_id);
        })
        //$('#ucommunity').prop('disabled',true);
        $('#udistrict').change(function(){
            $('#ucommunity').prop('disabled',false);
            $('#ucommunity').html('');
            var dis_id = $('#udistrict').val();
            get_community('#ucommunity',dis_id);
        })
        //$('#uvillage').prop('disabled',true);
        $('#ucommunity').change(function(){
            $('#uvillage').prop('disabled',false);
           $('#uvillage').html('');
           var com_id = $('#ucommunity').val();
           get_village('#uvillage',com_id);
       })

    });

    
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
                    url:url+'controller/studentController.php',
                    type:'post',
                    dataType:'json',
                    data:frm,
                    processData:false,
                    contentType:false,
                    beforeSend:function(data)
                    {
                        $('#overlay').show();
                    },
                    success:function(data)
                    {
                        $('#overlay').hide();
                        var email = data['email'];
                        var password = data['password'];

                        swal({
                            title: "ការចុះឈ្មោះទទួលបានជោគជ័យ",
                            text: "Email : "+email+" \n Password : "+password+" \n សម្រាប់ធ្វើការ Login ចូលប្រើប្រព័ន្ធ",
                            icon: "success",
                        });
                    }
                });
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
})();
</script>


<!--Add new building section-->

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
                    url:url+'controller/studentController.php',
                    type:'post',
                   // dataType:'json',
                    data:frm,
                    processData:false,
                    contentType:false,
                    beforeSend:function(data)
                    {
                        $('#overlay').show();
                    },
                    success:function(data)
                    {
                        
                        $('#overlay').hide();
                        window.location.href = 'manage_student.php';
                       
                    }
                });
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
})();
</script>

<!-- function script -->

<script>
    // function _select_addressing(txt_dropdownList,name,id,key)
    // {
    //     $.ajax({
    //         url:url+'controller/studentController.php',
    //         type:'POST',
    //         dataType:'json',
    //         data:{_select_all_address:1},
    //         success:function(data)
    //         {
    //             for(var i=0;i<data[key].length;i++)
    //             {
    //                 $(txt_dropdownList).append(new Option(data[key][i][name],data[key][i][id]));
    //             }
    //         }
    //     });
    // }
    function _select_room(txt_dropdownList,name,id,key)
    {
        $.ajax({
            url:url+'controller/studentController.php',
            type:'POST',
            dataType:'json',
            data:{_select_all_address:1},
            success:function(data)
            {
                
                for(var i=0;i<data[key].length;i++)
                {
                    $(txt_dropdownList).append(new Option(data[key][i][name],data[key][i][id]));

                }
            }
        });
    }
    function show_row_student()
        {
            let stu_id = $('#stu_id').val();
            let current_add = $('#current_add').val();
            let birth_add = $('#birth_add').val();
            let RoomID = $('#RoomID').val();
            $.ajax({
                url:url+'controller/studentController.php',
                type:'POST',
                dataType:'json',
                data:{_show_row_student:stu_id,_current_add:current_add,_birth_add:birth_add,_RoomID:RoomID},
                success:function(data)
                {
                    //console.log(data);
                    $('#preview').attr('src',url+'public/images/'+data['student'][0].image)
                    $('#ufull_name_kh').val(data['student'][0].fname);
                    $('#uen_fullname').val(data['student'][0].	name_en);
                    $('#ugender').val(data['student'][0].gender);
                    
                    $('#uethnicity').val(data['student'][0].ethnicity_id);
                    $('#unation').val(data['student'][0].national_id);
                    $('#uID_card').val(data['student'][0].card_nation_id);
                    $('#udob').val(data['student'][0].dob);
                    $('#_faculty').val(data['student'][0].faculty_id);
                    $('#major').val(data['student'][0].subject_id);
                    $('#degree').val(data['student'][0].degree_id);
                    $('#_academic').val(data['student'][0].academic_id);
                    $('#person_mobile').val(data['student'][0].person_phone);
                    var parent_phone = data['student'][0].parent_phone;
                    $('#_phone_parent').val(parent_phone);
                    $('#student_type').val(data['student'][0].student_type_id);
                    $('#student_status').val(data['student'][0].status_id)
                    $('#file_name_update').val(data['student'][0].image);

                    //select date of birth address
                    var pr = data['birth_address'][0].province_id;
                    $('#uprovince').val(pr);
                   
                    var dis_id = data['birth_address'][0].disctrict_id;
                    $('#udistrict').val(dis_id);

                    var comm_id = data['birth_address'][0].communue_id;
                    $('#ucommunity').val(comm_id);

                    $('#uvillage').val(data['birth_address'][0].village_id);

                    //select date of birth address
                    var cpr = data['current_address'][0].province_id;
                    $('#current_province').val(cpr);

                    $('#current_destrict').val(data['current_address'][0].district_id);

                    var cucomm_id = data['current_address'][0].comm_id;
                    $('#current_community').val(cucomm_id);
                    
                    $('#current_village').val(data['current_address'][0].village_id);

                    $('#building_id').val(data['roomId'][0].id_building);
                    $('#floor_id').val(data['roomId'][0].floor_id);
                    $('#room_id').val(data['roomId'][0].id);
                }
            });
        }
</script>
