<?php require_once('../../database/constants.php'); ?>

<?php
// if(!isset($_SESSION['emp_role']))
// {
//     header('Location:'.DOMIAN.'/index.php');
// }
if (!$_SESSION['emp_role'] == '2') {
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

<body class="bg-info green">
    <div id="sidebar">
        <nav>
            <div class="nav-logo">
                <div class="logo-img">
                    <img src="../../public/assets/images/logo_uhst.png" alt="">
                </div>
                <h3 class="text-light">Employee</h3>
                <div class="toggle-icon action ">
                    <i class="fa-solid fa-bars text-info"></i>
                </div>
            </div>
            <div class="menu">
                <ul class="">
                    <li>
                        <a href="../employee/dashboard.php" class="dashboardMainNav "><i class="fa-solid fa-house"></i> ផ្ទាំងគ្រប់គ្រង</a>
                    </li>
                    <li>
                        <a href="../employee/add_student.php" class="registerMainNav"><i class="fa-solid fa-user"></i> ចុះឈ្មោះ</a>
                    </li class="">
                    <li>
                        <a href="../employee/manage_teacher.php" class="infoTeacherMainNav"><i class="fa-solid fa-user"></i> ព័ត៌មានគ្រូបង្រៀន</a>
                    </li class="">
                    <li>
                        <a href="../employee/manage_student.php" class="infoStudentMainNav"><i class="fa-solid fa-user-graduate"></i> ព័ត៌មាននិស្សិត</a>
                    </li>
                    <li>
                        <a href="../employee/manage_vehicle.php" class="bicycleMainNav"><i class="fa-solid fa-bicycle"></i>ព័ត៌មានយានយន្ត</a>
                    </li>
                    <li>
                        <a href="payment.php" class="paymentInfoMainNav"><i class="fa-solid fa-money-bill-1-wave"></i> បង់ប្រាក់</a>
                    </li>
                    <li>
                        <a href="student_payment.php" class="paymentInfo"><i class="fa-solid fa-money-bill-1-wave"></i> ព័ត៌មានបង់ប្រាក់</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <div id="main" class="bg-light">
        <header class="bg-light shadow-lg">
            <div class="toggle-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="title p-2">
                <h3 class="text-info">ប្រព័ន្ធគ្រប់គ្រងអន្តេវាសិកដ្ឋានរបស់និស្សិត</h3>
            </div>
            <div class="user">
                <!-- <i class="fa-solid fa-bell text-info"><span>0</span></i> -->
                <div class="user-img">
                    <img src="../../public/assets/images/logo_uhst.png" alt="">

                </div>
                <div class="user-menu">
                    <h4>Admin</h4>
                    <a href="change_pass.php"><i class="fas fa-lock"></i> Change password</a>
                    <a href="<?php echo DOMAIN . '/logout.php' ?>"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                </div>
            </div>
        </header>