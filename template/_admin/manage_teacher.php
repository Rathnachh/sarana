<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow p-3 bg-white">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <h3 class="kh-text text-info font-weight-bold">ព័ត៌មានរបស់លោកគ្រូ​ អ្នកគ្រូ​ មន្ត្រី សាស្ត្រាចារ្យដែលស្នាក់នៅក្នុងអន្តេវាសិកដ្ឋានឆ្នាំ <?php echo date("Y")?></h3>
                <!-- <img src="images/abc.gif" id="_loadData" class="overlay" alt="Image"> -->
                <a href="add_teacher.php" class="btn btn-sm"><i class="fa-solid fa-plus text-success"></i> បន្ថែមថ្មី </a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive table-striped " id="List_data_teacher">
                    <thead>
                        <tr>
                            <th class="text-info kh-text">ល.រ</th>
                            <th class="w-25 kh-text text-info">ឈ្មោះ</th>
                            <th class="kh-text text-info ">ភេទ</th>
                            <th class="w-25 kh-text text-info">កម្រិតសិក្សា</th>
                            <th class="kh-text text-info">ជំនាញ</th>
                            <th class="w-25 kh-text text-info">មកពីខេត្ត</th>
                            <th class="w-25 kh-text text-info">លេខទូរសព្ទ</th>
                            <th class="w-25 kh-text text-info text-right my-btn">ប៊ូតុង</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                  
                </table>
            </div>

        </div>

<?php require_once('../_layout/footer.php') ;?>

<script>
    $(function () {
        $('.infoTeacherMainNav').addClass('active');
    })
</script>

<script>
    var ListDataFromTeacher=[],id,datatable;
    $(document).ready(function() {
        list_teacher();

        $(document).on('click', '#btn_active', function(){
            var ID = $(this).attr('data-id');
            var room_id = $(this).attr('data-room_id');
            //alert(room_id)
            $.ajax({
                url:url+'controller/studentController.php',
                dataType: 'json',
                type:'post',
                data:{_ID:ID,_room_id:room_id},
                success:function(data)
                {
                    list_teacher();
                }
            });
       });

        datatable = $('#List_data_teacher').DataTable({
            data:ListDataFromTeacher,
            columns:[
                {
                    data:'n',AutoWidth:true,
                },
                {data:'fname',AutoWidth:true},
                {
                    data:'gender',AutoWidth:true,
                    'render':function(data)
                    {
                        var gender ;
                        gender = data == '1' ? 'ស្រី' : 'ប្រុស';
                        return gender;
                    }
                
                },
                {data:'degree_name',AutoWidth:true},
                {data:'subject_name',AutoWidth:true},
                {data:'province_kh_name',AutoWidth:true},
                {data:'person_phone',AutoWidth:true},
                {'data':'id','name':'person_phone',AutoWidth:true,
                    'render':function(data,type,row){
                        var edit = '<a href="edit_teacher.php?STU_ID='+row['id']+'&RoomID='+row['room_id']+'&ADD='+row['address_place_id']+'&CADD='+row['current_address_id']+'" class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></a>';
                        var feature = row['feature'] == '1' ? '<i class="fa-solid fa-toggle-on text-success"></i>' : '<i class="fa-solid fa-toggle-off text-danger"></i>';
                        var btn_feature = '<button class="btn btn-sm" data-id="'+row['id']+'" data-room_id='+row['room_id']+' id="btn_active">'+feature+'</button>'
                        var view = '<a href="teacher_detail.php?STU_ID='+data+'" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>';
                        return edit+btn_feature+view;
                    }
                }
                
            ]
        });
    });

    function list_teacher()
    {
        $.ajax({
            url:url+'controller/teacherController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_teacher_row:1},
            beforeSend:function()
            {
                $('#_loadData').show();
            },
            success:function(data)
            {
                   console.log(data);
                    ListDataFromTeacher=[];
                    ListDataFromTeacher=data;
                    datatable.clear();
                    datatable.rows.add(ListDataFromTeacher);
                    datatable.draw();
                    $('#_loadData').hide();
            }
        });
    }
</script>