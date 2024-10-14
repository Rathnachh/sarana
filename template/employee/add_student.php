<?php require_once('../_layout/emp_head.php') ;?>

<div class="content shadow row p-3 bg-white">
<div class="col-lg-12">
    <div class="title d-flex align-items-center">
    <a href="manage_student.php"><i class="fa-solid fa-arrow-left mr-3 text-info" style="font-size:18px"></i></a>
        <h3 class="kh-text font-weight-bold text-info">ចុះឈ្មោះ</h3>
    </div>
    <div class="info-student my-3 ">
        <form autocomplete="off" method="post" enctype="multipart/form-data" role="form" class="register_form needs-validation" novalidate>
            
            <div class="row">
               <div class="col-lg-3 mb-3 p-3" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                    <div style="max-height:400px; width:100%;overflow:hidden" class="mb-2">
                        <img src="images/photo-icon.png" style="object-position: 0px -30px;" id="preview" alt="">
                    </div>
                    <div class="form-group">
                    <input type="file" id="profile_image" name="profile_image" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
               </div>
               <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="kh-text" for="full_name_kh">គោត្តនាម / នាម</label>
                            <input type="text" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="full_name_kh" id="full_name_kh" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="kh-text" for="en_fullname">ឈ្មោះជាអក្សរឡាតាំង</label>
                            <input type="text" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="en_fullname" id="en_fullname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="kh-text" for="gender">ភេទ</label>
                            <select name="gender" class="form-control" id="gender" required>
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
                            <label class="kh-text" for="ethnicity">ជនជាតិ</label>
                            <select name="ethnicity" class="form-control" id="ethnicity" required>
                                <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសជនជាតិ--</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="kh-text" for="nation">សញ្ជាតិ</label>
                            <select name="nation" class="form-control" id="nation" required>
                                <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសសញ្ជាតិ--</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="kh-text" for="ID_card">លេខអត្តសញ្ញាណប័ណ្ឌ</label>
                            <input type="text" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="ID_card" id="ID_card">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="kh-text" for="dob">ថ្ងៃខែឆ្នាំកំណើត</label>
                            <input type="date" class="form-control" placeholder="សូមវាយបញ្ចូល" required name="dob" id="dob">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    </div>

                    <!--row 1-->
                    <label class="kh-text font-weight-bold" for="" style="margin-top: 10px;">ទីកន្លែងកំណើត</label>
                    <hr style="margin:0 0 20px 0px;">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="kh-text" for="province">ខេត្ត ឬ ក្រុង</label>
                                <select name="province" class="form-control" id="province" required>
                                    <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសខេត្ត--</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="kh-text" for="district">ស្រុក ឬ​ ខណ្ឌ</label>
                                <select name="district" class="form-control" id="district" required>
                                    <option value="" selected disabled>--សូមជ្រើសរើសខេត្តជាមុនសិន--</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="kh-text" for="community">ឃុំ ឬ សង្កាត់</label>
                                <select name="community" class="form-control" id="community" required>
                                    <option value="" selected disabled>--សូមជ្រើសរើសស្រុកជាមុនសិន--</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="kh-text" for="village">ភូមិ</label>
                                <select name="village" class="form-control" id="village" required>
                                    <option value="" selected disabled>--សូមជ្រើសរើសឃុំជាមុនសិន--</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>

            <!--row 2-->
            <label class="kh-text font-weight-bold" for="" style="margin-top: 10px;">ទីកន្លែងបច្ចុប្បន្ន</label>
            <hr style="margin:0 0 20px 0px;">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="current_province">ខេត្ត ឬ ក្រុង</label>
                        <select name="current_province" class="form-control" id="current_province" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសភេទ--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="current_destrict">ស្រុក ឬ​ ខណ្ឌ</label>
                        <select name="current_destrict" class="form-control" id="current_destrict" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសភេទ--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="current_community">ឃុំ ឬ សង្កាត់</label>
                        <select name="current_community" class="form-control" id="current_community" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសភេទ--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="current_village">ភូមិ</label>
                        <select name="current_village" class="form-control" id="current_village" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសភេទ--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
            </div>

            <!--row 2-->
            <label class="kh-text font-weight-bold" for="" style="margin-top: 10px;">ជាសិស្ស​ ឬនិស្សិត</label>
            <hr style="margin:0 0 20px 0px;">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="_faculty">មហាវិទ្យាល័យ ឬវិទ្យាស្ថាន</label>
                        <select name="_faculty" class="form-control" id="_faculty" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសមហាវិទ្យាល័យ--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="major">ជំនាញ</label>
                        <select name="major" class="form-control" id="major" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសមហាវិទ្យាល័យ ឬវិស្ថានជាមុនសិន--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="_academic">ឆ្នាំសិក្សា</label>
                        <select name="_academic" class="form-control" id="_academic" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសឆ្នាំសិក្សា--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="degree">កម្រិតសិក្សា</label>
                        <select name="degree" class="form-control" id="degree" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="building_id">អគារ</label>
                        <select name="building_id" class="form-control" id="building_id" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសអគារ--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="floor_id">ជាន់ទី</label>
                        <select name="floor_id" class="form-control" id="floor_id" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសអគារជាមុនសិន--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="room_id">បន្ទប់លេខ</label>
                        <select name="room_id" class="form-control" id="room_id" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើសជាន់នៃអគារជាមុនសិន--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="person_mobile">លេខទូរសព្ទទំនាក់ទំនង</label>
                        <input type="tel" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="person_mobile" id="person_mobile">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="email">អុីម៉ែល</label>
                        <input type="email" class="form-control" placeholder="សូមវាយបញ្ចូល" required name="email" id="email">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="phone_parent">លេខទូរសព្ទអណាព្យាបាល</label>
                        <input type="tel" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="phone_parent" id="phone_parent  ">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="student_type">ប្រភេទ</label>
                        <select name="student_type" class="form-control" id="student_type" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label class="kh-text" for="student_status">status</label>
                        <select name="student_status" class="form-control" id="student_status" required>
                            <option value="" selected disabled>--សូមធ្វើការជ្រើសរើស--</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
                    <img src="images/abc.gif" id="overlay" class="overlay float-right" alt="Image">
                    <button type="submit" class="btn btn-info mt-2 float-right kh-text" id = "register">ចុះឈ្មោះ</button>
                    <button type="button" class="btn btn-danger mt-2 mx-3 float-right kh-text" id = "btn_clear">សម្អាត</button>
                </div>
            </div>

        </form>
    </div>
    </div>
</div>


<?php require_once('../_layout/emp_footer.php') ;?>

<script>
    var URL = url+'controller/studentController.php';
    $(document).ready(function(){
        //$('#gender').chosen(); 
        get_ethnicity('#ethnicity'); 
        get_nation('#nation');
        get_province('#province');
        get_province('#current_province');
        
        get_all_faculty('#_faculty');

        get_all_acedemic('#_academic');

        get_dropdownList_building('#building_id');

        studentType('#student_type');

        studentStatus('#student_status');

        studentDegree('#degree');

        $('#btn_clear').click(function(){
            $('.form-control').val('');
            $('#preview').attr('src','images/photo-icon.png');
        });


        //handler for getting id building_id to select floor table for id floor

        $('#building_id').change(function(){
            var ID_building = $('#building_id').val();
            get_dropdownList_floor_active('#floor_id',ID_building);
        })

        $('#floor_id').change(function(){
            var ID_floor = $('#floor_id').val();
            var ID_building = $('#building_id').val();
            get_room_filter_floor_building('#room_id',ID_building,ID_floor);
        })

        //select images

        $('#profile_image').change(function(){
            imageReader(this,'#preview');
        });

        //get_all_list('#_faculty',2,'name','id',URL);

        //get major filter from faculty 
        $('#_faculty').change(function(){
            $('#major').html('');
            var faculty_id = $('#_faculty').val();
            get_all_major('#major',faculty_id);
        })

        //envent handler for place of date address 

        $('#current_province').change(function(){
            $('#current_destrict').html('');
            var pro_id = $('#current_province').val();
            get_district('#current_destrict',pro_id);
        })

        $('#current_destrict').change(function(){
           
            $('#current_community').html('');
            var dis_id = $('#current_destrict').val();
            get_community('#current_community',dis_id);
        })

        $('#current_community').change(function(){
           
           $('#current_village').html('');
           var com_id = $('#current_community').val();
           get_village('#current_village',com_id);
       })
       //envent handler for current Address 0967022966

       $('#province').change(function(){
            $('#district').html('');
            var pro_id = $('#province').val();
            get_district('#district',pro_id);
        })

        $('#district').change(function(){
           
            $('#community').html('');
            var dis_id = $('#district').val();
            get_community('#community',dis_id);
        })

        $('#community').change(function(){
           
           $('#village').html('');
           var com_id = $('#community').val();
           get_village('#village',com_id);
       })

    });
</script>

<!--Add new student section-->

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

