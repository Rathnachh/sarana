<?php require_once('../_layout/emp_head.php') ;?>

        <?php
            $conn = new mysqli(HOST,USER,PASS,DB);

            $sql = "SELECT st.id,st.fname,st.gender,st.person_phone,pr.province_kh_name 
            FROM tbl_student_information AS st INNER JOIN tbl_current_address AS cr 
            ON st.current_address_id = cr.id INNER JOIN tbl_provinces AS pr ON cr.province_id = pr.province_id 
            WHERE acept = 0";

            $rs = $conn->query($sql);


             //sql_counter_teacher
             $sql_teacher = "SELECT COUNT(`id`) AS all_teacher FROM `tbl_student_information` WHERE student_type_id = 3 and acept = 1 and feature = 1";
             $data_teacher = $conn->query($sql_teacher);
             $row_all_teacher = $data_teacher->fetch_assoc();
             //sql_counter_student
             $sql_student = "SELECT COUNT(`id`) AS all_student FROM `tbl_student_information` WHERE student_type_id = 4 and acept = 1 and feature = 1";
             $data_student = $conn->query($sql_student);
             $row_all_student = $data_student->fetch_assoc();
             //sql_conter female student
             $sql_student_female = "SELECT COUNT(`id`) AS female_student FROM `tbl_student_information` WHERE student_type_id = 4 AND `gender` = 1 and feature = 1";
             $data_female_student = $conn->query($sql_student_female);
             $row_female_student = $data_female_student->fetch_assoc();
             //sql_conter female teacher
             $sql_teacher_female = "SELECT COUNT(`id`) AS female_teacher FROM `tbl_student_information` WHERE student_type_id = 3 AND `gender` = 1 and acept = 1 and feature = 1";
             $data_teacher_female = $conn->query($sql_teacher_female);
             $row_teacher_female = $data_teacher_female->fetch_assoc();
             //sql_conter poor student
             $sql_poor_student = "SELECT COUNT(`id`) AS poor_student FROM `tbl_student_information` WHERE `status_id`= 6 and acept = 1 and feature = 1";
             $data_poor_student = $conn->query($sql_poor_student);
             $row_poor_student = $data_poor_student->fetch_assoc();
             //sql_conter MoEy student
             $sql_poor_moey = "SELECT COUNT(`id`) AS moey_student FROM `tbl_student_information` WHERE `status_id`= 7 and acept = 1 and feature = 1";
             $data_moey_student = $conn->query($sql_poor_moey);
             $row_moey_student = $data_moey_student->fetch_assoc();
             //sql_conter payment student
             $sql_payment = "SELECT COUNT(`id`) AS pay_student FROM `tbl_student_information` WHERE `status_id`= 4 and acept = 1 and feature = 1";
             $data_pay_student = $conn->query($sql_payment);
             $row_pay_student = $data_pay_student->fetch_assoc();
             //sql_conter vehicle student
             $sql_vehicle = "SELECT COUNT(id) AS vehicle FROM `tbl_vehicle`";
             $data_vehicle = $conn->query($sql_vehicle);
             $row_vehicle = $data_vehicle->fetch_assoc();
 
        ?>
        <div class="content shadow p-3 bg-white">
            <div class="title">
                <h3 class="kh-text font-weight-bolder text-info">ផ្ទាំងគ្រប់គ្រង</h3>
            </div>

            <div class="list-box">
                <div class="box color-1">
                    <span>All Students</span>
                    <h3><?php echo $row_all_student['all_student'] ?>  <span>poeple</span></h3>
                </div> 
                <div class="box color-2 ">
                    <span>Female Students</span>
                    <h3><?php echo $row_female_student['female_student'] ?> <span>poeple</span></h3>
                </div>
                <div class="box color-3 bg-info">
                    <span>All Teachers</span>
                    <h3><?php echo $row_all_teacher['all_teacher'] ?> <span>poeple</span></h3>
                </div>
                <div class="box color-4 bg-primary">
                    <span>Female Teacher</span>
                    <h3><?php echo $row_teacher_female['female_teacher'] ?> <span>poeple</span></h3>
                </div>

                <div class="box color-5">
                    <span>Vihecle</span>
                    <h3><?php echo $row_vehicle['vehicle'] ?> <span>poeple</span></h3>
                </div>
                <div class="box color-6 bg-danger">
                    <span>Poor Students</span>
                    <h3><?php echo $row_poor_student['poor_student'] ?> <span>poeple</span></h3>
                </div>
                <div class="box color-7 bg-success">
                    <span>MoEy Students</span>
                    <h3><?php echo $row_moey_student['moey_student'] ?> <span>poeple</span></h3>
                </div>
                <div class="box color-8 bg-warning">
                    <span>Payment Students</span>
                    <h3><?php echo $row_pay_student['pay_student'] ?> <span>poeple</span></h3>
                </div>
            </div>
            

            <div class="row my-4">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 style="font-size: 15px">អ្នកចុះឈ្មោះស្នាក់នៅថ្មី</h4>
                        <input type="search" class="form-control w-50" placeholder="Search..." id="searchname">
                    </div>
                    <div class="py-2 table-responsive" style="height:310px">
                        <table class="table table-scrollable table-nowrap w-100 table-striped table-hover"  >
                            <thead class="bg-info text-white">
                                <tr>
                                    <th>ល.រ</th>
                                    <th>ឈ្មោះ</th>
                                    <th>ភេទ</th>
                                    <th>មកពីខេត្ត</th>
                                    <th class="text-right">ប៊ូតុង</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if($rs->num_rows > 0)
                                    {
                                        $n=1;
                                        while($row = $rs->fetch_assoc() )
                                        {
                                            $gender = $row['gender']==1 ? 'ស្រី':'ប្រុស';
                                            ?>
                                            <tr>
                                                <td><?php echo '0'.$n++ ?></td>
                                                <td><?php echo $row['fname'] ?></td>
                                                <td><?php echo $gender ?></td>
                                                <td><?php echo $row['province_kh_name'] ?></td>
                                                <td class="text-right">
                                                    <a href="acept.php?STU_ID=<?php echo $row['id']?>" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

           

        </div>

<?php require_once('../_layout/emp_footer.php') ;?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script>
    $(function() {
        $('.dashboardMainNav').addClass('active');
        fetch_chart();
       /// makechart()

       $('#searchname').on('keyup', function(){
            var value = $(this).val();
            $('.table tr').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
       });

    })

    Chart.defaults.font.size = 12;
    Chart.defaults.font.family = 'sans-serif,Khmer OS Battambang';
    function fetch_chart()
    {
        $.ajax({
            url:url+'controller/chartController.php',
            type:'post',
            dataType: 'json',
            data:{fetch:'fetch_chart_data'},
            success:function(data){
                //console.log(data);
                var province = [];
                var total = [];
                var color = [];

                for(var i=0; i<data.length; i++){
                    province.push(data[i].province);
                    total.push(data[i].total);
                    color.push(data[i].color);
                }

                var chart_data = {
                    labels: province,
                    datasets:[
                        {
                            label:'ទិន្នន័យនិស្សិតមកពីបណ្តាខេត្តនានាគិតជា %',
                            backgroundColor:color,
                            color:'#fff',
                            data:total
                        }
                    ]
                };
                var options = {
                    responsive:true,
                };
                var bar_chart = $('#bar_chart');
                var graph = new Chart(bar_chart,{
                    type:'bar',
                    data:chart_data,
                    options:options
                })
            }
        });
    }

</script>

