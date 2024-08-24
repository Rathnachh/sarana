<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo_uhst.png" type="image/x-icon">
    <title>register - panel</title>
    <link rel="stylesheet" href="../../public/assets/bootstrap.css">
    <link rel="stylesheet" href="../../public/dist/login.css">
</head>
<body>
    <div class="form-register">
        <h3 style="font-size: 18px;text-align: center; font-weight:400 ; padding: 20px;">Register Form</h3>
        <form action="">
            <div class="page-1 pages pb-4 d-none">
                <div class="form">
                    <h5>Information student</h5>
                    <hr>
                    <div class="form-w">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" id="fname" name="fname" required placeholder="Enter your first nme">
                            </div>
                            <span class="error error_fname"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Last name</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" id="lname" name="lname" placeholder="Enter your last name">
                            </div>
                            <span class="error error_lname"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="gender" id="gender">
                                    <option value="0" disabled selected>-- select gender --</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <span class="error error_gender"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Nationality</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="nation" id="nation">
                                    <option value="1" disabled selected>--select nationality--</option>
                                    <option value="2">Khmer</option>
                                    <option value="3">Thai</option>
                                    <option value="4">Vietname</option>
                                    <option value="5">Lao</option>
                                </select>
                            </div>
                            <span class="error error_nation"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="date" id="dob" name="dob" placeholder="Enter your username">
                            </div>
                            <span class="error error_dob"></span>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-warning w-25 mr-2 back_1">back</button>
                            <button type="button" class="btn btn-outline-success w-25 next_1" style="border-color: #fff; color:#fff">Next</button>
                        </div>
                    </div>
                    
                </div>
                <div class="image">
                    <img src="../../public/assets/images/register-1.svg" alt="">
                </div>
                
            </div>
            
            <div class="page-2 pages pb-4 d-none">
                <div class="form">
                    <h5>Place of place</h5>
                    <hr>
                    <div class="form-w">
                        <div class="form-group">
                            <label for="">Province</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="province" id="province">
                                    <option value="" selected disabled>-- select province --</option>
                                    <option value="1">កំពង់ធំ</option>
                                    <option value="2">ត្បួងឃ្មុំ</option>
                                    <option value="3">ក្រចេះ</option>
                                </select>
                            </div>
                            <span class="error error_province"></span>
                        </div>
                        <div class="form-group">
                            <label for="">District</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="district" id="district">
                                    <option value="" selected disabled>--select district--<district/option>
                                    <option value="1">ស្ទោង</option>
                                    <option value="2">កំពង់ស្វាយ</option>
                                    <option value="3">សណ្ដាន់</option>
                                    <option value="4">សម្បួរព្រៃគុក</option>
                                </select>
                            </div>
                            <span class="error error_district"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Communue</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="communue" id="communue">
                                    <option value="" selected disabled>-- select communue --</option>
                                    <option value="1">ទ្រា</option>
                                    <option value="2">ពពក</option>
                                    <option value="3">បន្ទាយស្ទោង</option>
                                </select>
                            </div>
                            <span class="error error_communue"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Village</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="village" id="village">
                                    <option value="" selected disabled>--select village--</option>
                                    <option value="1">ភូមិទទា</option>
                                    <option value="2">ភូមិកោះ</option>
                                    <option value="3">ភូមិផ្ទះវាល</option>
                                    <option value="4">ភូមិច្រាងសរ</option>
                                </select>
                            </div>
                            <span class="error error_village"></span>
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="button" class="btn btn-outline-warning w-25 mr-2 back_2">back</button>
                            <button type="button" class="btn btn-info w-25 next_2" style="border-color: #fff; color:#fff">Next</button>
                        </div>
                    </div>
                    
                </div>
                <div class="image">
                    <img src="../../public/assets/images/register-1.svg" alt="">
                </div>
                
            </div>
            <div class="page-3 pages pb-4 d-none">
                <div class="form">
                    <h5>Current of place</h5>
                    <hr>
                    <div class="form-w">
                        <div class="form-group">
                            <label for="">Province</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="dprovince" id="dprovince">
                                    <option value="" selected disabled>-- select province --</option>
                                    <option value="">កំពង់ធំ</option>
                                    <option value="">ត្បួងឃ្មុំ</option>
                                    <option value="">ក្រចេះ</option>
                                </select>
                            </div>
                            <span class="error error_dprovince"></span>
                        </div>
                        <div class="form-group">
                            <label for="">District</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="ddistrict" id="ddistrict">
                                    <option value="" selected disabled>--select district--<district/option>
                                    <option value="">ស្ទោង</option>
                                    <option value="">កំពង់ស្វាយ</option>
                                    <option value="">សណ្ដាន់</option>
                                    <option value="">សម្បួរព្រៃគុក</option>
                                </select>
                            </div>
                            <span class="error error_dprovince"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Communue</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="dcommunue" id="dcommunue">
                                    <option value="" selected disabled>-- select communue --</option>
                                    <option value="">ទ្រា</option>
                                    <option value="">ពពក</option>
                                    <option value="">បន្ទាយស្ទោង</option>
                                </select>
                            </div>
                            <span class="error error_dprovince"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Village</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="dvillage" id="dvillage">
                                    <option value="" selected disabled>--select village--</option>
                                    <option value="">ភូមិទទា</option>
                                    <option value="">ភូមិកោះ</option>
                                    <option value="">ភូមិផ្ទះវាល</option>
                                    <option value="">ភូមិច្រាងសរ</option>
                                </select>
                            </div>
                            <span class="error error_dprovince"></span>
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="button" class="btn btn-outline-warning w-25 mr-2 back_3">back</button>
                            <button type="button" class="btn btn-outline-success w-25 next_3" style="border-color: #fff; color:#fff">Next</button>
                        </div>
                    </div>
                    
                </div>
                <div class="image">
                    <img src="../../public/assets/images/register-1.svg" alt="">
                </div>
                
            </div>
            <div class="page-4 pages dnone pb-4">
                <div class="form">
                    <h5>About Student</h5>
                    <hr>
                    <div class="form-w">
                        <div class="form-group">
                            <label for="">Faculty</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="faculty" id="faculty">
                                    <option value="" disabled selected>-- select Faculty --</option>
                                    <option value="">កំពង់ធំ</option>
                                    <option value="">ត្បួងឃ្មុំ</option>
                                    <option value="">ក្រចេះ</option>
                                </select>
                            </div>
                            <span class="error error_faculty"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Major</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="major" id="major">
                                    <option value="" disabled selected>--select district--<district/option>
                                    <option value="">ស្ទោង</option>
                                    <option value="">កំពង់ស្វាយ</option>
                                    <option value="">សណ្ដាន់</option>
                                    <option value="">សម្បួរព្រៃគុក</option>
                                </select>
                            </div>
                            <span class="error error_major"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Degree</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="major" id="major">
                                    <option value="" disabled selected>--select Degree--<district/option>
                                    <option value="">Barchelor Degree</option>
                                    <option value="">Master Degree</option>
                                    <option value="">Phd Degree</option>
                                </select>
                            </div>
                            <span class="error error_major"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Academic year</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="academic" id="academic">
                                    <option value="" selected disabled>-- select Academic --</option>
                                    <option value="">ទ្រា</option>
                                    <option value="">ពពក</option>
                                    <option value="">បន្ទាយស្ទោង</option>
                                </select>
                            </div>
                            <span class="error error_academic"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Generation</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="generation" id="generation">
                                    <option value="" selected disabled>--select Generation--</option>
                                    <option value="">ភូមិទទា</option>
                                    <option value="">ភូមិកោះ</option>
                                    <option value="">ភូមិផ្ទះវាល</option>
                                    <option value="">ភូមិច្រាងសរ</option>
                                </select>
                            </div>
                            <span class="error error_generation"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Building</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="building" id="building">
                                    <option value="" selected disabled>--select Building--</option>
                                    <option value="">ភូមិទទា</option>
                                    <option value="">ភូមិកោះ</option>
                                    <option value="">ភូមិផ្ទះវាល</option>
                                    <option value="">ភូមិច្រាងសរ</option>
                                </select>
                            </div>
                            <span class="error error_building"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Floor</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="building" id="building">
                                    <option value="" selected disabled>--select Floor--</option>
                                    <option value="">ភូមិទទា</option>
                                    <option value="">ភូមិកោះ</option>
                                    <option value="">ភូមិផ្ទះវាល</option>
                                    <option value="">ភូមិច្រាងសរ</option>
                                </select>
                            </div>
                            <span class="error error_building"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Room Number</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="room" id="room">
                                    <option value="" selected disabled>--select Room--</option>
                                    <option value="">ភូមិទទា</option>
                                    <option value="">ភូមិកោះ</option>
                                    <option value="">ភូមិផ្ទះវាល</option>
                                    <option value="">ភូមិច្រាងសរ</option>
                                </select>
                            </div>
                            <span class="error error_room"></span>
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="button" class="btn btn-outline-warning w-25 mr-2 back_4">back</button>
                            <button type="button" class="btn btn-outline-success w-25 next_4" style="border-color: #fff; color:#fff">Next</button>
                        </div>
                    </div>
                    
                </div>
                <div class="image">
                    <img src="../../public/assets/images/register-1.svg" alt="">
                </div>
                
            </div>
            <div class="page-5 pages pb-4 d-none">
                <div class="form">
                    <h5>About Student</h5>
                    <hr>
                    <div class="form-w">
                        <div class="user-img">
                            <img src="assets/images/user.jpg" alt="">
                            <label for="profile_image">select profile<picture></picture></label>
                            <input type="file" class="d-none" id="profile_image">
                        </div>
                        <div class="form-group">
                            <label for="">username</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your  usernme">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">mobile number</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your  usernme">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">parent mobile</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your  usernme">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Vehicle</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="" id="">
                                    <option value="">-- select province --</option>
                                    <option value="">កំពង់ធំ</option>
                                    <option value="">ត្បួងឃ្មុំ</option>
                                    <option value="">ក្រចេះ</option>
                                </select>
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <label for="">Student Type</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="" id="">
                                    <option value="">--select district--<district/option>
                                    <option value="">ស្ទោង</option>
                                    <option value="">កំពង់ស្វាយ</option>
                                    <option value="">សណ្ដាន់</option>
                                    <option value="">សម្បួរព្រៃគុក</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Student Status</label>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <select name="" id="">
                                    <option value="">-- select communue --</option>
                                    <option value="">ទ្រា</option>
                                    <option value="">ពពក</option>
                                    <option value="">បន្ទាយស្ទោង</option>
                                </select>
                            </div>
                           
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="button" class="btn btn-outline-warning w-25 mr-2 back_5">back</button>
                            <button type="button" class="btn btn-outline-success w-25" style="border-color: #fff; color:#fff">Next</button>
                        </div>
                    </div>
                    
                </div>
                <div class="image">
                    <img src="../../public/assets/images/register-1.svg" alt="">
                </div>
                
            </div>
        </form>
        
    </div>

    <script src="../../public/assets/jquery.js"></script>
</body>
</html>

<script>
    $(document).ready(function(){
        $(document).on('click','.next_1',function(){
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var gender = $('#gender').val();
            var nation = $('#nation').val();
            var dob = $('#dob').val();
            //alert(fname+' '+lname+' '+' '+gender+' '+nation+' '+dob);
            if(fname!="" && lname!="" && gender!="" && nation!="" && dob!="")
            {
                $('.page-1').addClass('d-none');
                $('.page-2').removeClass('d-none');
                $('.error_fname').text('');
                $('.error_lname').text('');
                $('.error_gender').text('');
                $('.error_nation').text('');
                $('.error_dob').text('');
            } 
            else 
            {
                if(fname=="") $('.error_fname').text('First name not allow null');
                else $('.error_fname').text('');

                if(lname=="") $('.error_lname').text('Last namt not allow null');
                else $('.error_lname').text('');

                if(gender==null) $('.error_gender').text('please select gender');
                else $('.error_gender').text(null);

                if(nation==null) $('.error_nation').text('Please select nationality');
                else $('.error_nation').text('');

                if(dob=="") $('.error_dob').text('Please select date of birth');
                else $('.error_dob').text('');
            }
        })
        $(document).on('click','.back_2',function(){
            $('.page-1').removeClass('d-none');
            $('.page-2').addClass('d-none');
        })
        $(document).on('click','.next_2',function(){
            var province = $('#province').val();
            var district = $('#district').val();
            var communue = $('#communue').val();
            var village = $('#village').val();
            //alert(province+" "+" "+district+" "+communue+" "+village);

            if(province!=null & district!=null && communue!=null && village!=null)
            {
                $('.page-2').addClass('d-none');
                $('.page-3').removeClass('d-none');
                $('.error_province').text('');
                $('.error_district').text('');
                $('.error_communue').text('');
                $('.error_village').text('');

            }
            else
            {
                if(province==null) $('.error_province').text('please select province');
                else $('.error_province').text('');

                if(district==null) $('.error_district').text('please select district');
                else $('.error_district').text('');

                if(communue==null) $('.error_communue').text('please select communue');
                else $('.error_communue').text('');

                if(village==null) $('.error_village').text('please select village');
                else $('.error_village').text('');
            }
        });
        $(document).on('click','.back_3',function(){
            $('.page-2').removeClass('d-none');
            $('.page-3').addClass('d-none');
        })
        $(document).on('click','.next_3',function(){
            var province = $('#dprovince').val();
            var district = $('#ddistrict').val();
            var communue = $('#dcommunue').val();
            var village = $('#dvillage').val();
            //alert(province+" "+" "+district+" "+communue+" "+village);
            
            if(province!=null & district!=null && communue!=null && village!=null)
            {
                $('.page-3').addClass('d-none');
                $('.page-4').removeClass('d-none');
                $('.error_dprovince').text('');
                $('.error_ddistrict').text('');
                $('.error_dcommunue').text('');
                $('.error_dvillage').text('');

            }
            else
            {
                alert(1111)
                if(province==null) $('.error_dprovince').text('please select province');
                else $('.error_dprovince').text('');

                if(district==null) $('.error_ddistrict').text('please select district');
                else $('.error_ddistrict').text('');

                if(communue==null) $('.error_dcommunue').text('please select communue');
                else $('.error_dcommunue').text('');

                if(village==null) $('.error_dvillage').text('please select village');
                else $('.error_dvillage').text('');
            }
        });
        $(document).on('click','.back_4',function(){
            $('.page-3').removeClass('d-none');
            $('.page-4').addClass('d-none');
        })
        $(document).on('click','.next_4',function(){
            var faculty = $('#faculty').val();
            var major = $('#major').val();
            var academic = $('#academic').val();
            var generation = $('#generation').val();
            var building = $('#building').val();
            var room = $('#room').val();

            if(faculty!=null && major!=null && academic!=null && generation!=null && building!=null && room!=null)
            {
                $('.page-4').addClass('d-none');
                $('.page-5').removeClass('d-none');
                $('.error_faculty').text('');
                $('.error_major').text('');
                $('.error_academic').text('');
                $('.error_generation').text('');
                $('.error_building').text('');
                $('.error_room').text('');
            }
            else
            {
                if(faculty==null) $('.error_faculty').text('please select faculty');
                else $('.error_faculty').text('');

                if(major==null) $('.error_major').text('please select major');
                else $('.error_major').text('');

                if(academic==null) $('.error_academic').text('please select academic');
                else $('.error_academic').text('');

                if(generation==null) $('.error_generation').text('please select generation');
                else $('.error_generation').text('');

                if(building==null) $('.error_building').text('please select building');
                else $('.error_building').text('');

                if(building==null) $('.error_room').text('please select room');
                else $('.error_room').text('');
                 
            }
        })
        $(document).on('click','.back_5',function(){
            $('.page-5').addClass('d-none');
            $('.page-4').removeClass('d-none');
        })
    });
</script>