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
                                <!-- <option>Others</option> -->
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

                <div class="buttons">
                        <img src="template/_admin/images/abc.gif" id="overlay" class="overlay float-right" alt="Image">
                        <!-- <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div> -->
                        
                        <button type="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>


            </div>

           
    </div>
    <script src="public/assets/jquery.js"></script>
    <script src="public/dist/script.js"></script>
    <script src="public/dist/register.js"></script>
    <script src="public/assets/sweetalert.min.js"></script>
</body>
</html>

<script>
    var url = "http://localhost:80/dormitory/";
    $(document).ready(function(){
        // $('#gender').chosen(); 
       
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
