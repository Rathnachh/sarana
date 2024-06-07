<?php require_once('database/constants.php') ?>
<?php
if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_name'])) {
    header('Location:' . DOMIAN . '/template/_admin/dashboard.php');
}
if (isset($_SESSION['user_id']) && isset($_SESSION['student_name'])) {
    header('Location:' . DOMIAN . '/template/student/home.php');
}
if (isset($_SESSION['emp_role']) && isset($_SESSION['emp_id'])) {
    header('Location:' . DOMIAN . '/template/employee/dashboard.php');
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
    <!-- <link rel="stylesheet" href="public/dist/login.css"> -->
    <link rel="stylesheet" href="public/dist/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>
    <section class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row gy-4 align-items-center">
            <div class="col-12 col-md-6 col-xl-7">
                <div class="d-flex justify-content-center">
                    <div class="col-12 col-xl-9">
                        <img class="img-fluid rounded mb-4 w-100" loading="lazy" src="https://www.norton-u.com/images/logo-banner-blue.png" width="245" height="80" alt="BootstrapBrain Logo">
                        <hr class="border-primary-subtle mb-4">
                        <h3 class=" mb-4 kh-text">សូមស្វាគមន៍មកកាន់​អន្តេវាសិកដ្ឋាន</h3>
                        <p class="lead mb-3">Welcome To Our Dormitory System</p>
                        <div class="text-endx d-flex align-items-center gap-2 ">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg> -->
                            <small class="text-primary kh-text">អភិវឌ្ឍន៍ដោយក្រុមទី១១នៃសកលវិទ្យាល័យន័រតុន</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5">
                <div class="card border border-info rounded-4 shadow-lg ">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <h3>Log in</h3>
                                </div>
                            </div>
                        </div>
                        <form  action="" id="form_login">
                            <div class="row gy-3 overflow-hidden">
                                <div class="col-12 mt-5">
                                    <div class="form-floating mb-3">
                                        <input id="username" class="form-control" name="username" value="<?php if (isset($_COOKIE["username"])) echo $_COOKIE["username"]; ?>" type="email" placeholder="Enter your username" required>

                                        <label for="username" class="form-label text-secondary fw-light">Username</label>
                                    </div>
                                    <span class="error error-username d-none" id="error_username">email is not
                                        registered</span>

                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-2">
                                        <input id="password" class="form-control" name="password" type="password" value="<?php if (isset($_COOKIE["password"])) echo $_COOKIE["password"]; ?>" required placeholder="Enter your password">

                                        <label for="password" class="form-label text-secondary fw-light">Password</label>
                                    </div>
                                    <span class="error error-password d-none" id="error_password">password is
                                        incorrect</span>

                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-check fw-light">
                                        <input class="form-check-input" type="checkbox" <?php if (isset($_COOKIE["username"])) echo "checked" ?> name="remember"> remember
                                        <div class="valid-feedback">Valid.</div>
                                    </label>
                                </div>
                                <div class="col-12 ">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg rounded-pill" type="submit">Log in
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12 text-center pt-4">

                                <p class="fw-light">Don't have an account? <a href="#!">Register</a></p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="public/assets/jquery.js"></script>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#form_login').on('submit', function(e) {
            e.preventDefault();
            //window.location.href="template/_admin/dashboard.php";
            var formdata = new FormData(this);
            $.ajax({
                url: 'controller/userController.php',
                type: 'post',
                processData: false,
                contentType: false,
                data: formdata,
                success: function(data) {
                    if (data == 'USER_NOT_REGISTERED') {
                        //alert('USER_NOT_REGISTERED');
                        $('#error_username').removeClass('d-none');
                    } else if (data == 'PASSWORD ERROR') {
                        //alert('PASSWORD ERROR');
                        $('#error_username').addClass('d-none');
                        $('#error_password').removeClass('d-none');
                    } else {
                        if (data == 'STUDENT') {
                            //STUDENT DASHBOARD
                            window.location.href = "template/student/home.php";
                        } else if (data == 'EMPLOYEE') {
                            window.location.href = "template/employee/dashboard.php";
                        } else {
                            window.location.href = "template/_admin/dashboard.php";
                        }

                    }
                }
            });
        })
    })
</script>