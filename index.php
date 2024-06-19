<?php require_once('database/constants.php') ?>
<?php
    if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_name']))
    {
        header('Location:'.DOMIAN.'/template/_admin/dashboard.php');
    }
    if(isset($_SESSION['user_id']) && isset($_SESSION['student_name']))
    {
        header('Location:'.DOMIAN.'/template/student/home.php');
    }
    if(isset($_SESSION['emp_role']) && isset($_SESSION['emp_id']) )
    {
        header('Location:'.DOMIAN.'/template/employee/dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo_uhst.png" type="image/x-icon">
    <title>Login - panel</title>
    <link rel="stylesheet" href="public/assets/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="public/dist/login.css">
</head>
<body>
    <div class="form-login card shadow"> 
        <i class="fa-solid fa-user-graduate"></i>
        <div class="title">
            <h3>Login to use System</h3>
        </div>
        <form action="" id="form_login">
            <div class="form-group">
                <label for="">username</label>
                <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input id="username" name="username" value="<?php if(isset($_COOKIE["username"])) echo $_COOKIE["username"]; ?>" type="email" placeholder="Enter your username" required>
                </div>
                <span class="error error-username d-none" id="error_username">email is not registered</span>
            </div>
            <div class="form-group">
                <label for="">password</label>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input id="password" name="password" type="password" value="<?php if(isset($_COOKIE["password"])) echo $_COOKIE["password"];?>" required placeholder="Enter your password">
                </div>
                <span class="error error-password d-none" id="error_password">password is incorrect</span>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" <?php if(isset($_COOKIE["username"])) echo "checked" ?> name="remember"> remember
                    <div class="valid-feedback">Valid.</div>
                </label>
            </div>

            <button type="submit" class="btn btn-outline-info mt-3 mb-2 w-100">Login</button>
            <p style="font-size: 14px;">I want to register <a href="register.php" style="font-size: 14px;">Register ?</a></p>
        </form>
        <p class="copyright">Develop By Group 11</p>
    </div>

    <script src="public/assets/jquery.js"></script>
</body>
</html>

<script>
    $(document).ready(function(){
       $('#form_login').on('submit',function(e){
            e.preventDefault();
            //window.location.href="template/_admin/dashboard.php";
            var formdata = new FormData(this);
            $.ajax({
                url:'controller/userController.php',
                type:'post',
                processData:false,
                contentType:false,
                data:formdata,
                success:function(data)
                {
                    if(data=='USER_NOT_REGISTERED')
                    {
                        //alert('USER_NOT_REGISTERED');
                        $('#error_username').removeClass('d-none');
                    }
                    else if(data=='PASSWORD ERROR')
                    {
                        //alert('PASSWORD ERROR');
                        $('#error_username').addClass('d-none');
                        $('#error_password').removeClass('d-none');
                    }
                    else
                    {
                        if(data=='STUDENT')
                        {
                            //STUDENT DASHBOARD
                            window.location.href="template/student/home.php";
                        }
                        else if(data == 'EMPLOYEE')
                        {
                            window.location.href="template/employee/dashboard.php";
                        }
                        else
                        {
                            window.location.href="template/_admin/dashboard.php";
                        }
                        
                    }
                }
            }); 
       })
    })
</script>

