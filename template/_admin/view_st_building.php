<?php require_once('../_layout/head.php') ;?>

        <?php

            $conn = new mysqli(HOST,USER,PASS,DB);
            if(isset($_GET['ST']))
            {
                $building_id = $_GET['ST'];
                $sql = "SELECT st.id,st.fname,st.gender,st.dob, pr.province_kh_name,ma.subject_name,de.degree_name,st.person_phone 
                FROM tbl_student_information AS st 
                INNER JOIN tbl_current_address AS cur ON cur.id = st.current_address_id
                INNER JOIN tbl_provinces AS pr ON cur.province_id = pr.province_id
                INNER JOIN tbl_major AS ma ON ma.id = st.subject_id
                INNER JOIN tbl_student_room AS str ON str.id = st.room_id
                INNER JOIN tbl_building as bui ON bui.id = str.id_building
                INNER JOIN tbl_degree AS de ON de.id = st.degree_id
                WHERE bui.id=$building_id AND st.feature=1 AND st.acept=1";

                $data_build = $conn->query($sql);
            }

        ?>

        <div class="content shadow p-3">
            <div class="title d-flex">
                <a href="manage_building.php"><i class="fa-solid fa-arrow-left mr-3" style="font-size:18px"></i></a>
                <h3>ឈ្នោះនិស្សិតដែលស្នាក់នៅ​ <span><?php echo $_GET['BDN'] ?> ឆ្នាំ <?php echo date("Y")?></span></h3>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive" id="view">
                    <thead>
                        <tr>
                            <th>ល.រ</th>
                            <th class="w-25">ឈ្មោះនិស្សិត</th>
                            <th class="">ភេទ</th>
                            <th class="w-25">ថ្ងៃខែឆ្នាំកំណើត</th>
                            <th class="w-25">ជំនាញ</th>
                            <th class="w-25">កម្រិតសិក្សា</th>
                            <td class="w-25">មកពីខេត្ត</td>
                            <td class="w-25">លេខទូរសព្ទ</td> 
                        </tr>
                    </thead>
                   <tbody>
                        <?php
                            if($data_build->num_rows >0)
                            {
                                $n=1;
                                while($row = $data_build->fetch_assoc())
                                {
                                    ?>  
                                         <tr data-href="student_details.php?STU_ID=<?php echo $row['id']?>&link=view_st_building.php?ST=<?php echo $_GET['ST'] ?>&BDN=<?php echo $_GET['BDN']?>">
                                            <td><?php echo $n++; ?></td>
                                            <td><?php echo $row['fname']?></td>
                                            <td><?php echo $row['gender']=='1'?'ស្រី':'ប្រុស'; ?></td>
                                            <td><?php echo $row['dob']?></td>
                                            <td class="text-info"><?php echo $row['subject_name']?></td>
                                            <td><?php echo $row['degree_name']?></td>
                                            <td><?php echo $row['province_kh_name']?></td>
                                            <td><?php echo $row['person_phone']?></td>
                                        </tr>
                                        
                                    <?php
                                }
                            }
                        ?>
                       
                   </tbody>
                </table>
            </div>

        </div>


        <!-- Edit user -->
        
        </button>

        <!-- Modal -->
        <div class="modal fade" id="user_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <form action="/action_page.php" class="needs-validation" novalidate>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ការកែប្រែទៅលើអ្នកប្រើប្រាស់គណនី</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div>
            </form>
        </div>
        </div>
<?php require_once('../_layout/footer.php') ;?>

<script>
    $(function () {
        $('.table').DataTable({
            buttons: [
                'print','excel'
            ],
            dom:
                "<'row'<'col-md-2'l><'col-md-5'B><'col-md-5'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
        });
        
       
    })
</script>
