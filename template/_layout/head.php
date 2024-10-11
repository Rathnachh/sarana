<?php require_once('../../database/constants.php'); ?>

<?php
if (!isset($_SESSION['admin_name'])) {
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

        .buttons-print {
            color: #fff !important;
            background-color: blue !important;
        }

        .buttons-excel {
            color: #fff !important;
            background-color: green !important;
            margin: 0 5px !important;
        }
    </style>
    <link rel="stylesheet" href="../../public/dist/style.css">

</head>

<body class="bg-light-blue">
    <div id="sidebar" class="bg-info">
        <nav>
            <div class="nav-logo">
                <div class="logo-img">
                    <i class="fa-solid fa-graduation-cap fa-xl text-light ml-3 "></i>
                </div>
                <h3 class="text-light">Administrator</h3>
                <div class="toggle-icon action">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="menu">
                <ul class="">
                    <li>
                        <a href="../_admin/dashboard.php" class="dashboardMainNav"><i class="fa-solid fa-house"></i> ផ្ទាំងគ្រប់គ្រង</a>
                    </li>
                    <li>
                        <a href="../_admin/manage_teacher.php" class="infoTeacherMainNav"><i class="fa-solid fa-user"></i> ព័ត៌មានគ្រូបង្រៀន</a>
                    </li class="">
                    <li>
                        <a href="../_admin/manage_student.php" class="infoStudentMainNav"><i class="fa-solid fa-user-graduate"></i> ព័ត៌មាននិស្សិត</a>
                    </li>
                    <li>
                        <a href="../_admin/manage_user.php" class="usernameMainNav"><i class="fa-solid fa-user-group"></i>ការគ្រប់គ្រង User</a>
                    </li>
                    <li>
                        <a href="../_admin/manage_vehicle.php" class="bicycleMainNav"><i class="fa-solid fa-bicycle"></i>ព័ត៌មានយានយន្ត</a>
                    </li>

                    <li>
                        <a href="student_payment.php" class="paymentInfo"><i class="fa-solid fa-money-bill-1-wave"></i> ព័ត៌មានបង់ប្រាក់</a>
                    </li>
                    <li>
                        <a href="../_admin/report.php" class="report"><i class="fa-solid fa-chart-line"></i> របាយការណ៍</a>
                    </li>
                    <li>
                        <a href="../_admin/add_student.php"><i class="fa-sharp fa-solid fa-user-pen"></i> ចុះឈ្មោះ</a>
                    </li>
                    <hr style="background-color:rgba(255,255,255,0.5);padding:0px;">
                    <li>
                        <a data-toggle="collapse" href="#collapseExample" class="d-flex justify-content-between align-items-center" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="kh-text">ការគ្រប់គ្រងអគារ </span><i class="fa-solid fa-angle-right"></i></a>
                        <div class="collapse pl-3" id="collapseExample">
                            <a href="manage_building.php"><i class="fa-solid fa-building"></i>អគារ</a>
                            <a href="manage_floor.php"><i class="fa-solid fa-arrow-up-from-water-pump"></i>ជាន់នៃអគារ</a>
                            <a href="manage_room.php"><i class="fa-solid fa-person-shelter"></i>បន្ទប់</a>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faculty" class="d-flex justify-content-between align-items-center" role="button" aria-expanded="false" aria-controls="faculty"><span class="kh-text">ការគ្រប់គ្រងវិទ្យាស្ថាន </span><i class="fa-solid fa-angle-right"></i></a>
                        <div class="collapse pl-3" id="faculty">
                            <a href="manage_faculty.php"><i class="fa-solid fa-graduation-cap"></i>វិទ្យាស្ថាន</a>
                            <a href="manage_major.php"><i class="fa-solid fa-book-journal-whills"></i>មុខវិទ្យាសិក្សា</a>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#addresses" class="d-flex justify-content-between align-items-center" role="button" aria-expanded="false" aria-controls="faculty"><span class="kh-text">ការគ្រប់គ្រងអាស័យដ្ឋាន </span><i class="fa-solid fa-angle-right"></i></a>
                        <div class="collapse pl-3" id="addresses">
                            <a href="manage_province.php"><i class="fa-solid fa-location-pin"></i>ខេត្ត / ក្រុង</a>
                            <a href="manage_district.php"><i class="fa-solid fa-location-pin"></i>ស្រុក​ / ខណ្ឌ</a>
                            <a href="manage_communue.php"><i class="fa-solid fa-location-pin"></i>ឃុំ / សង្កាត់</a>
                            <a href="manage_village.php"><i class="fa-solid fa-location-pin"></i>ភូមិ</a>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#other" class="d-flex justify-content-between align-items-center" role="button" aria-expanded="false" aria-controls="faculty"><span class="kh-text">ការគ្រប់គ្រងផ្សេងៗ </span><i class="fa-solid fa-angle-right"></i></a>
                        <div class="collapse pl-3" id="other">
                            <a href="restore_student.php"><i class="fa-brands fa-artstation"></i>សិស្សចាស់</a>
                            <a href="student_status.php"><i class="fa-solid fa-user-check"></i>ស្ថានភាពនិស្សិត</a>
                            <a href="ethnicity.php"><i class="fa-solid fa-audio-description"></i>ជនជាតិ</a>
                            <a href="nationality.php"><i class="fa-solid fa-audio-description"></i>សញ្ជាតិ</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="main" class="bg-light">
        <header class="bg-light shadow-lg py-3">
            <div class="toggle-icon">
                <i class="fa-solid fa-bars text-info"></i>
            </div>
            <div class="title p-2">
                <h3 class="text-center text-info">ប្រព័ន្ធគ្រប់គ្រងអន្តេវាសិកដ្ឋានរបស់និស្សិត</h3>
            </div>
            <div class="user">
                <!-- <i class="fa-solid fa-bell text-info "><span>0</span></i> -->
                <div class="user-img">
                    <img src="../../template/_admin/images/logo3.png" alt="">

                </div>
                <div class="user-menu">
                    <h4>Admin</h4>
                    <a href="change_pass.php"><i class="fas fa-lock"></i> Change password</a>
                    <a href="<?php echo DOMAIN . '/logout.php' ?>"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
                </div>
            </div>
        </header>