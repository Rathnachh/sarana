<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="public/dist/register.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/png" href="https://www.kbcambodia.com/wp-content/uploads/2016/08/Norton-University.png">

    <title>Responsive Regisration Form </title> 
</head>
<body>
    <div class="container">
        
        <div style="display: flex;align-items: center;">
            <a href="index.php"><i class="fa-solid fa-arrow-left" style="font-size:18px;padding-right:20px"></i></a>
            <header> ចុះឈ្មោះស្នាក់នៅ</header>
        </div>
        <form id="form_register" autocomplete="off" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>នាម / គោត្តនាម</label>
                            <input type="text" placeholder="Enter your name" name='full_name_kh' required>
                        </div>

                        <div class="input-field">
                            <label>អក្សរឡាតាំង</label>
                            <input type="text" name="en_fullname" placeholder="Enter your name english" required>
                        </div>

                        <div class="input-field">
                            <label>ភេទ</label>
                            <select required id='gender' name='gender'>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                                <option value="1">ស្រី</option>
                                <option value="0">ប្រុស</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>ថ្ងៃខែឆ្នាំកំណើត</label>
                            <input type="date" name="dob" required>
                        </div>
                        <div class="input-field">
                            <label>ជនជាតិ</label>
                            <select name="ethnicity" id="ethnicity" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>សញ្ជាតិ</label>
                            <select name="nation" id="nation" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>លេខទូរសព្ទ</label>
                            <input type="number" name="person_mobile" placeholder="Enter your mobile" >
                        </div>
                        <div class="input-field">
                            <label>អ៊ីម៉ែល</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">ទីកន្លែងកំណើត</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ខេត្ត</label>
                            <select name="province" id="province" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>ស្រុកឬ ខណ្ឌ</label>
                            <select name="district" id="district" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>ឃុំឬ សង្កាត់</label>
                            <select name="community" id="community" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>ភូមិ</label>
                            <select name="village" id="village" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>លេខអត្តសញ្ញាណប័ណ្ឌ</label>
                            <input type="number" name="ID_card" placeholder="Enter your id card" >
                        </div>

                        
                        <div class="input-field">
                            <label>លេខអាណាព្យាបាល</label>
                            <input type="number" name="phone_parent" placeholder="Enter parent phone" >
                        </div>
                        <div class="input-field">
                            <label>ស្ថានភាព</label>
                            <select name="student_status" id="student_status" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>វិទ្យាស្ថាន</label>
                            <select name="_faculty" id="_faculty" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>ជំនាញ</label>
                            <select name="major" id="major" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>សិក្សាឆ្នាំ</label>
                            <select name="_academic" id="_academic" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>កម្រិតសិក្សា</label>
                            <select name="degree" id="degree" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>ប្រភេទ</label>
                            <select name="student_type" id="student_type" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">អាសយដ្ឋានបច្ចុប្បន្ន</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>ខេត្តឬ​ ក្រុង</label>
                            <select name="current_province" id="current_province" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>ស្រុកឬ ខណ្ឌ</label>
                            <select name="current_destrict" id="current_destrict" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>ឃុំឬ សង្កាត់</label>
                            <select name="current_community" id="current_community" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>ភូមិ</label>
                            <select name="current_village" id="current_village" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">អាគារស្នាក់នៅ</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>អាគារ</label>
                            <select name="building_id" id="building_id" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>ជាន់នៃអគារ</label>
                            <select name="floor_id" id="floor_id" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>បន្ទប់លេខ</label>
                            <select name="room_id" id="room_id" required>
                                <option value="" disabled selected>~~ សូមជ្រើសរើស ~~</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>រូមភាព ៤x៦ មួយសន្លឹក</label>
                            <input type="file" name="profile_image" id="profile_image" placeholder="Enter spouse name" required>
                        </div>
                        <div class="input-field">
                        <div style="min-width:250;height:200px;overflow:hidden">
                            <img src="public/images/pic_4x6.webp" id="preview" style="width:100%;height:100%;object-fit: cover;" alt="">
                        </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <img src="template/_admin/images/abc.gif" id="overlay" class="overlay float-right" alt="Image">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button type="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
    <script src="public/assets/jquery.js"></script>
    <script src="public/dist/script.js"></script>
    <script src="public/dist/register.js"></script>
    <script src="public/assets/sweetalert.min.js"></script>
</body>
</html>

<script>
    var url = "http://localhost:80/sarana/";
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

        //handler for getting id building_id to select floor table for id floor

        $('#building_id').change(function(){
            var ID_building = $('#building_id').val();
            get_dropdownList_floor_active('#floor_id',ID_building);
        })

        $('#floor_id').change(function(){
            var ID_floor = $('#floor_id').val();
            var ID_building = $('#building_id').val();
            $('#room_id').html('');
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

<script>
    $(document).ready(function(){
        $('#form_register').on('submit',function(e){
            e.preventDefault();
            var frm = new FormData(this);
            $.ajax({
                url:'controller/registerController.php',
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
                        buttons: true,
                        })
                        .then((saved) => {
                        if (saved) {
                                window.location.href=url+'index.php';
                        }
                    });
                }
            });
        });
    });
</script>

<!--Add new student section-->

