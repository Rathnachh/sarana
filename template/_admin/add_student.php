<?php require_once('../_layout/head.php') ;?>

<div class="content shadow row p-3 bg-white">
<div class="col-lg-12">
    <div class="title d-flex align-items-center">
    <a href="manage_student.php"><i class="fa-solid fa-arrow-left mr-3 text-info" style="font-size:18px"></i></a>
        <h3 class="text-info kh-text font-weight-bold">ចុះឈ្មោះ</h3>
    </div>
    <div class="info-student my-3 ">
        <form autocomplete="off" method="post" enctype="multipart/form-data" role="form" class="register_form needs-validation" novalidate>
            
            <div class="row">
               <div class="col-lg-3 mb-3 p-3" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                    <div style="max-height:400px; width:100%;overflow:hidden" class="mb-2">
                        <img src="images/photo-icon.png" style="object-position: 0px -30px;" id="preview" alt="">
                    </div>
                    <div class="form-group">
                    <input type="file" id="profile_image" class="form-control" name="profile_image" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
               </div>
               <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="full_name_kh" class="kh-text">គោត្តនាម / នាម</label>
                            <input type="text" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="full_name_kh" id="full_name_kh" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="en_fullname"  class="kh-text">ឈ្មោះជាអក្សរឡាតាំង</label>
                            <input type="text" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="en_fullname" id="en_fullname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="gender"  class="kh-text">ភេទ</label>
                            <select name="gender" class="form-control kh-text" id="gender" required>
                                <option value="" selected disabled>~~ សូមជ្រើសរើស ~~</option>
                                <option value="1">ស្រី</option>
                                <option value="0">ប្រុស</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group ">
                            <label for="ethnicity" class="kh-text"> ជនជាតិ</label>
                            <select name="ethnicity" class="form-control kh-text" id="ethnicity" required>
                                <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="nation" class="kh-text">សញ្ជាតិ</label>
                            <select name="nation" class="form-control kh-text" id="nation" required>
                                <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group ">
                            <label for="ID_card" class="kh-text">លេខអត្តសញ្ញាណប័ណ្ឌ</label>
                            <input type="text" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="ID_card" id="ID_card">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="dob" class="kh-text">ថ្ងៃខែឆ្នាំកំណើត</label>
                            <input type="date" class="form-control kh-text" placeholder="សូមជ្រើសរើស" required name="dob" id="dob">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                        </div>
                    </div>
                    </div>

                    <!--row 1-->
                    <label for="" style="margin-top: 10px;" class="kh-text">ទីកន្លែងកំណើត</label>
                    <hr style="margin:0 0 20px 0px;">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="province" class="kh-text">ខេត្ត ឬ ក្រុង</label>
                                <select name="province" class="form-control" id="province" required>
                                    <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="district" class="kh-text">ស្រុក ឬ​ ខណ្ឌ</label>
                                <select name="district" class="form-control kh-text" id="district" required>
                                    <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="community" class="kh-text">ឃុំ ឬ សង្កាត់</label>
                                <select name="community" class="form-control kh-text" id="community" required>
                                    <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="village" class="kh-text">ភូមិ</label>
                                <select name="village" class="form-control kh-text" id="village" required>
                                    <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>

            <!--row 2-->
            <label for="" style="margin-top: 10px;" class="kh-text">ទីកន្លែងបច្ចុប្បន្ន</label>
            <hr style="margin:0 0 20px 0px;">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="current_province" class="kh-text">ខេត្ត ឬ ក្រុង</label>
                        <select name="current_province" class="form-control kh-text" id="current_province" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="current_destrict" class="kh-text">ស្រុក ឬ​ ខណ្ឌ</label>
                        <select name="current_destrict" class="form-control kh-text" id="current_destrict" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="current_community" class="kh-text">ឃុំ ឬ សង្កាត់</label>
                        <select name="current_community" class="form-control kh-text" id="current_community" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="current_village" class="kh-text">ភូមិ</label>
                        <select name="current_village" class="form-control kh-text" id="current_village" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
            </div>

            <!--row 2-->
            <label for="" style="margin-top: 10px;" class="kh-text">ជាសិស្ស​ ឬនិស្សិត</label>
            <hr style="margin:0 0 20px 0px;">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="_faculty" class="kh-text">មហាវិទ្យាល័យ ឬវិទ្យាស្ថាន</label>
                        <select name="_faculty" class="form-control kh-text" id="_faculty" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="major" class="kh-text">ជំនាញ</label>
                        <select name="major" class="form-control kh-text" id="major" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="_academic" class="kh-text">ឆ្នាំសិក្សា</label>
                        <select name="_academic" class="form-control kh-text" id="_academic" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="degree" class="kh-text">កម្រិតសិក្សា</label>
                        <select name="degree" class="form-control kh-text" id="degree" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="building_id" class="kh-text">អគារ</label>
                        <select name="building_id" class="form-control kh-text" id="building_id" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="floor_id" class="kh-text">ជាន់ទី</label>
                        <select name="floor_id" class="form-control kh-text" id="floor_id" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="room_id" class="kh-text">បន្ទប់លេខ</label>
                        <select name="room_id" class="form-control kh-text" id="room_id" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="person_mobile" class="kh-text">លេខទូរសព្ទទំនាក់ទំនង</label>
                        <input type="tel" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="person_mobile" id="person_mobile">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="email" class="kh-text">អុីម៉ែល</label>
                        <input type="email" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" required name="email" id="email">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="phone_parent" class="kh-text">លេខទូរសព្ទអណាព្យាបាល</label>
                        <input type="tel" class="form-control kh-text" placeholder="សូមវាយបញ្ចូល" name="phone_parent" id="phone_parent  ">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="student_type" class="kh-text">ប្រភេទ</label>
                        <select name="student_type" class="form-control kh-text" id="student_type" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="student_status" class="kh-text">status</label>
                        <select name="student_status" class="form-control kh-text" id="student_status" required>
                            <option value="" selected disabled class="kh-text">~~ សូមជ្រើសរើស ~~</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback kh-text">សូមបំពេញព័ត៍មាន</div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
                    <img src="images/abc.gif" id="overlay" class="overlay float-righ " alt="Image">
                    <button type="submit" class="btn btn-info mt-2 float-right kh-text" id = "register">ចុះឈ្មោះ</button>
                    <button type="button" class="btn btn-danger mt-2 mx-3 float-right kh-text" id = "btn_clear">សម្អាត</button>
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

