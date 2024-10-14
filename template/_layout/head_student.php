<?php
require_once('../../database/constants.php');
$conn = new mysqli(HOST, USER, PASS, DB);
?>
<?php
if (!isset($_SESSION['user_role']) && $_SESSION['student_login'] != true) {
    header('Location:' . DOMAIN . '/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - panel</title>
    <link rel="shortcut icon" href="assets/images/logo_uhst.png" type="image/x-icon">
    <link rel="stylesheet" href="../../public/assets/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../../public/assets/dataTables.bootstrap4.css">

    <!-- <link rel="stylesheet" href=" https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"> -->

    <link rel="icon" type="image/png" href="https://www.kbcambodia.com/wp-content/uploads/2016/08/Norton-University.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css">

    <style>
        div.dt-button-collection {
            width: 300px;
        }

        div.dt-button-collection button.dt-button {
            display: inline-block;
            width: 32%;
        }

        div.dt-button-collection h3 {
            margin-top: 5px;
            margin-bottom: 5px;
            font-weight: 100;
            border-bottom: 1px solid #9f9f9f;
            font-size: 1em;
        }

        div.dt-button-collection h3.not-top-heading {
            margin-top: 10px;
        }
    </style>

    <link rel="stylesheet" href="../../public/dist/style.css">

</head>

<body class="bg-info">
    <div id="sidebar">
        <nav>
            <div class="nav-logo">
                <div class="logo-img">
                    <img class="rounded-circle border border-info" src="../../public//images//student.jpg" alt="">
                </div>
                <h3 class="text-light">Student</h3>
                <div class="toggle-icon action">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="menu">
                <ul class="">
                    <li>
                        <a href="home.php" class="dashboardMainNav"><i class="fa-solid fa-house"></i> ទំព័រដើម</a>
                    </li>
                    <li>
                        <a href="info_payment.php" class="infoTeacherMainNav"><i class="fa-solid fa-comment-dollar"></i> ព័ត៌មានបង់ប្រាក់</a>
                    </li>
                    <li>
                        <a href="class_mate.php" class="infoStudentMainNav"><i class="fa-solid fa-user-group"></i> មិត្តរួមបន្ទប់</a>
                    </li>
                    <li>
                        <a href="policy.php" class="usernameMainNav"><i class="fa-solid fa-scale-balanced"></i> បទបញ្ជាផ្ទៃក្នុង</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <div id="main" class="bg-light shadow-lg">
        <header class="bg-white shadow-lg ">
            <div class="toggle-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="title p-2 my-2">
                <h3 class="text-info">ប្រព័ន្ធគ្រប់គ្រងអន្តេវាសិកដ្ឋានរបស់សិស្ស-និស្សិត</h3>
            </div>
            <div class="user">
                <!-- <i class="fa-solid fa-bell text-info"><span>0</span></i> -->
                <div class="user-img border border-info">
                    <img src="<?php echo DOMAIN . '/public/images/' . $_SESSION['image'] ?>" alt="">
                </div>
                <div class="user-menu">
                    <h4 style="font-size:16px"><?php echo $_SESSION['student_name'] ?></h4>
                    <a href="student_details.php" class="kh-text"><i class="fas fa-user"></i> ព័តមានរបស់ខ្ញុំ</a>
                    <a href="change_pass.php" class="kh-text"><i class="fas fa-lock"></i> ផ្លាស់ប្តូរពាក្យសម្ងាត់</a>
                    <a href="<?php echo DOMAIN . '/logout.php' ?>" class="kh-text"><i class="fa-solid fa-arrow-right-from-bracket"></i> ចាកចេញ</a>
                </div>
            </div>
        </header>