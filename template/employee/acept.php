<?php require_once('../_layout/emp_head.php') ;?>
    <?php
        $conn = new mysqli(HOST,USER,PASS,DB);
        if(isset($_GET['STU_ID']))
        {
            $id = $_GET['STU_ID'];
            $sql = "SELECT 
            st.id,st.fname,st.name_en,st.gender,st.dob,st.person_phone,st.parent_phone,st.image,st.register_date,st.card_nation_id,st.acept,st.room_id,
            fa.name,ma.subject_name,de.degree_name,ac.year_name,et.ethnicity,na.nation_kh,stt.name,std.status_name,
            pr.province_kh_name,dis.district_namekh,com.commune_namekh,vil.village_namekh,
            prs.province_kh_name AS pro_name,diss.district_namekh AS dis_name,coms.commune_namekh AS com_name,vils.village_namekh AS village_name,
            bui.building_name,flo.floor_name,str.name_room,fa.name AS fa_name,st.register_date,ve.id AS ve_id,ve.name AS ve_name,ve.status as ve_status,ve.	register_date as ve_data_start
            FROM tbl_student_information AS st 
            INNER JOIN tbl_student_room AS str ON str.id=st.room_id 
            INNER JOIN tbl_faculty AS fa ON st.faculty_id=fa.id 
            INNER JOIN tbl_major AS ma ON ma.id = st.subject_id 
            INNER JOIN tbl_degree AS de ON de.id = st.degree_id 
            INNER JOIN tbl_academic AS ac on ac.id = st.academic_id 
            INNER JOIN tbl_ethnicity AS et ON et.id = st.ethnicity_id 
            INNER JOIN tbl_nationality AS na ON na.id = st.national_id 
            INNER JOIN tbl_current_address as cu on cu.id = st.current_address_id 
            INNER JOIN tbl_place_of_birth AS pl ON pl.id = st.address_place_id 
            INNER JOIN tbl_student_type AS stt ON stt.id = st.student_type_id 
            INNER JOIN tbl_student_status AS std ON std.id = st.status_id
            INNER JOIN tbl_provinces AS pr ON pr.province_id = cu.province_id
            INNER JOIN tbl_districts AS dis ON dis.dis_id = cu.district_id
            INNER JOIN tbl_communes AS com ON com.com_id = cu.comm_id
            INNER JOIN tbl_villages AS vil ON vil.vill_id = cu.village_id
            INNER JOIN tbl_provinces AS prs ON prs.province_id = pl.province_id
            INNER JOIN tbl_districts AS diss ON diss.dis_id = pl.disctrict_id
            INNER JOIN tbl_communes AS coms ON coms.com_id = pl.communue_id
            INNER JOIN tbl_villages AS vils ON vils.vill_id = pl.village_id
            INNER JOIN tbl_building AS bui ON bui.id=str.id_building
            INNER JOIN tbl_floor AS flo ON flo.id = str.floor_id
            LEFT JOIN tbl_vehicle AS ve  ON st.id = ve.student_id
            WHERE st.id = $id";

            $rs = $conn->query($sql);

            $row = $rs->fetch_assoc();
        }
        if(isset($_POST['submit']))
        {
            $stu_id_update = $_POST['student_id'];
            $sql = "UPDATE tbl_student_information SET acept = 1 WHERE id=$stu_id_update";
            $conn->query($sql);
            $_SESSION['msg'] = 'successed';
            echo '<script type="text/javascript">window.location.href = "dashboard.php"</script>';
        }
        if(isset($_POST['student_id']) && isset($_POST['remove']))
        {
            
            $stu_id_update = $_POST['student_id'];
            $sql = "DELETE FROM tbl_student_information WHERE id=$stu_id_update";
            $conn->query($sql);
            $_SESSION['remove'] = 'Remove student successed';

            //remove room
            $room_id = $row['room_id'];
            $sql = "SELECT total_student FROM tbl_student_room WHERE id = $room_id";

            $stm = $conn->query($sql);

            $rs = $stm->fetch_assoc();

            $sum_student_in_room = $rs['total_student']; 

            $sum_student_in_room --;

            if($sum_student_in_room >= 0)
            {
                $sql_update = "UPDATE tbl_student_room SET total_student = $sum_student_in_room WHERE id = $room_id";

                $conn->query($sql_update);
            }

            $sql_user = "DELETE FROM `tbl_users` WHERE `student_id`=$id";
            $conn->query($sql_user);

            echo '<script type="text/javascript">window.location.href = "dashboard.php"</script>';
        }
        //echo 'studnt id is : '.$id;
    ?>
        <div class="content shadow p-3 bg-white">
            <?php
                if(isset($_SESSION['msg']))
                {
                    echo '<div class="alert alert-success text-center" id="msg">Successfully...!</div>';
                    unset($_SESSION['msg']);
                }
                if(isset($_SESSION['remove']))
                {
                    echo '<div class="alert alert-success text-center" id="rmove">Remove student successed...!</div>';
                    unset($_SESSION['remove']);
                }
            ?>
            
            <div class="title d-flex">
                <a href="dashboard.php"><i class="fa-solid fa-arrow-left mr-3" style="font-size:18px"></i></a>
                <h3>ព័ត៌មានលម្អិតរបស់<?php echo $row['name'] ?></h3>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
                    <div class="card">
                    <img src="../../public/images/<?php echo $row['image'] ?>" class="card-img-top w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <table class="table table-borderless ">
                   
                    <tr>
                        <td class="w-25">គោត្តនាម / នាម</td>
                        <td>: <?php echo $row['fname'] ?> ជាអក្សរឡាតាំង : <?php echo $row['name_en'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">កាន់អត្តសញ្ញាណប័ណ្ឌលេខ</td>
                        <td>: <?php echo $row['card_nation_id'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">ភេទ</td>
                        <td>: <?php if($row['gender']=='1') echo 'ស្រី';else echo 'ប្រុស'; ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">ថ្ងៃខែឆ្នាំកំណើត</td>
                        <td>: <?php echo $row['dob'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">ជនជាតិ</td>
                        <td>: <?php echo $row['ethnicity'] ?>, សញ្ជាតិ  : <?php echo $row['nation_kh'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">លេខទូរសព្ទ</td>
                        <td>: <?php echo $row['person_phone'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">លេខទូរសព្ទអាណាព្យាបាល</td>
                        <td>: <?php echo $row['parent_phone'] ?></td>
                    </tr>
                   
                    <tr>
                        <td class="w-25">ទីកន្លែងកំណើត</td>
                        <td>: <?php echo $row['pro_name'].' '.$row['dis_name'].' '.$row['com_name'].' '.$row['village_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">អាសយដ្ឋានបច្ចុប្បន្ន</td>
                        <td>: <?php echo $row['province_kh_name'].' '.$row['district_namekh'].' '.$row['commune_namekh'].' '.$row['village_namekh'] ?></td>
                    </tr>
                </table>
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                    <tr>
                        <td class="w-25">ស្នាក់នៅ</td>
                        <td>: <?php echo $row['name_room'].' '.$row['floor_name'].' '.$row['building_name'] ?></td>
                    </tr>
                   
                    <tr>
                        <td class="w-25">វិទ្យាស្ថាន</td>
                        <td>: <?php echo $row['fa_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">ជំនាញ</td>
                        <td>: <?php echo $row['subject_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">សិក្សា</td>
                        <td>: <?php echo $row['year_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">ប្រភេទ</td>
                        <td>: <?php echo $row['status_name'] ?></td>
                    </tr>
                    <tr>
                        <td class="w-25">ថ្ងៃខែចុះឈ្មោះចូលស្នាក់នៅ</td>
                        <td>: <?php echo $row['register_date'] ?></td>
                    </tr>
                    </table>
                </div>
            </div>
            <form action="" class="pb-3" method="post">
                <input type="hidden" name="student_id" value="<?php echo  $id ?>">
                <button type="submit" name="submit" class="btn btn-primary">Accept</button>
                <button type="submit" name="remove" class="btn btn-danger">remove</button>
            </form>
            
        </div>
        
        <?php require_once('../_layout/emp_footer.php') ;?>

<script>
    $(function(){
        
        setInterval(() => {
            $('#msg').addClass('d-none');
            $('#rmove').addClass('d-none');
            //;
        }, 2000);
    });
</script>