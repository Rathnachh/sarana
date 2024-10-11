<?php require_once('database/constants.php') ?>
<?php
if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_name'])) {
    header('Location:' . DOMAIN . '/template/_admin/dashboard.php');
}
if (isset($_SESSION['user_id']) && isset($_SESSION['student_name'])) {
    header('Location:' . DOMAIN . '/template/student/home.php');
}
if (isset($_SESSION['emp_role']) && isset($_SESSION['emp_id'])) {
    header('Location:' . DOMAIN . '/template/employee/dashboard.php');
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
    <link rel="icon" type="image/png" href="https://www.kbcambodia.com/wp-content/uploads/2016/08/Norton-University.png">
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
                        <!-- <img class="img-fluid rounded mb-4 w-100" loading="lazy" src="https://scontent.fpnh20-1.fna.fbcdn.net/v/t39.30808-6/347226606_746520380557356_1675544049191350779_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=8aNm1d939cYQ7kNvgFZdwlj&_nc_ht=scontent.fpnh20-1.fna&oh=00_AYCXp-PNxt9PrQDn0tGm_GVMHGbYCsFJ2E9lxXxFsuZNgQ&oe=66D61057" width="245" height="80" alt="BootstrapBrain Logo"> -->
                        <div>
                            <div class="user-img d-flex justify-content-center align-items-center">
                               
                                <img src="public/images/login.png"  class="w-50 rounded rounded-circle" alt="Login-logo">

                            </div>
                        </div>
                        <h4 class=" my-4 kh-text text-center fw-bold text-primary">ប្រព័ន្ធគ្រប់គ្រងអន្តេវាសិកដ្ឋាននៃសាកលវិទ្យាល័យ <br>ហេងសំរិន ត្បូងឃ្មុំ </h4>
                        <hr class="border border-primary border-1 opacity-50">
                        <p class="text-dark kh-text text-center">អភិវឌ្ឍន៍ដោយក្រុមនិស្សិតនៃសាកលវិទ្យាល័យន័រតុន ឆ្នាំសិក្សា ២០២៤</p>

                        <div class="text-center d-flex align-items-center gap-2 ">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg> -->
                            <!-- <small class="text-primary kh-text text-center">អភិវឌ្ឍន៍ដោយក្រុមនិស្សិតនៃសកលវិទ្យាល័យន័រតុន</small> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border border-primary rounded-4 shadow-lg ">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <h3 class="text-center">Log in</h3>
                                </div>
                            </div>
                        </div>
                        <form action="" id="form_login">
                            <div class="row gy-3 overflow-hidden">
                                <div class="col-12 mt-5">
                                    <div class="form-floating mb-3">
                                        <input id="username" class="form-control" name="username" value="<?php if (isset($_COOKIE["username"])) echo $_COOKIE["username"]; ?>" type="email" placeholder="Enter your username" required>

                                        <label for="username" class="form-label text-secondary fw-light">អុីមែល</label>
                                    </div>
                                    <span class="error error-username d-none" id="error_username">email is not
                                        registered</span>

                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-2">
                                        <input id="password" class="form-control" name="password" type="password" value="<?php if (isset($_COOKIE["password"])) echo $_COOKIE["password"]; ?>" required placeholder="Enter your password">

                                        <label for="password" class="form-label text-secondary fw-light">លេខសំងាត់</label>
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
                                        <button class="btn btn-primary text-light btn-lg rounded-pill" type="submit">ចូល
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12 text-center pt-4">

                                <p class="fw-light">មិនទាន់មានគណនី? <a href="register.php" class="text-primary">ចុះឈ្មោះ</a></p>

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