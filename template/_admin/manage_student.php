<?php require_once('../_layout/head.php') ;?>
        <div class="content shadow p-3 bg-white">
            <div class="title d-flex justify-content-between flex-wrap align-items-center">
                <h3>ព័ត៌មានរបស់និស្សិតដែលស្នាក់នៅអន្តេវាសិកដ្ឋានទាងអស់ឆ្នាំ <?php echo date("Y")?></h3>
                <!-- <img src="images/abc.gif" id="_loadData" class="overlay" alt="Image"> -->
                <a href="add_student.php" class="btn btn-sm"><i class="fa-solid fa-plus text-success"></i> ចុះឈ្មោះ </a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive table-striped" id="example">
                    <thead>
                        <tr>
                            <th>ល.រ</th>
                            <th class="w-25">ឈ្មោះ</th>
                            <th class="w-25">ភេទ</th>
                            <th class="w-25">ឆ្នាំសិក្សា</th>
                            <th class="w-25">ជំនាញ</th>
                            <th class="w-25">មកពីខេត្ត</th>
                            <th class="w-25">លេខទូរសព្ទ</th>
                            <th class="w-25">Active</th>
                            <th class="w-25​​ text-right"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
<?php require_once('../_layout/footer.php') ;?>



<script>
    $(function () {
        // $('.table').DataTable({
        //     ordering: false,
        //     info: false,
        // });
        $('.infoStudentMainNav').addClass('active');
        list_student();
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
                    list_student();
                }
            });
       });
    })
</script>

<!--list student section-->
<!-- <script>
    function list_student()
    {
        $.ajax({
            url:url+'controller/studentController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_student_row:1},
            beforeSend:function()
            {
                $('#_loadData').show();
            },
            success:function(data)
            {
                //console.log(data);
                if(data!=0)
                {
                    var n=1;
                    var active ;
                    var gender ;
                    $('tbody').html('');
                    $.each(data, function(key, value) {
                        if(value.feature==1) 
                        {
                            active = '<span class="badge badge-success">active</span>';
                            feature = '<i class="fa-solid fa-toggle-on text-success"></i>';
                        }
                        else 
                        {
                            active = '<span class="badge badge-danger">inactive</span>';
                            feature = '<i class="fa-solid fa-toggle-off text-danger"></i>';
                        }

                        gender = value.gender == '1' ? 'ស្រី' : 'ប្រុស';

                        $('tbody').append(
                            '<tr>\
                                <td>'+(n++)+'</td>\
                                <td>'+value.fname+'</td>\
                                <td>'+gender+'</td>\
                                <td>'+value.year_name+'</td>\
                                <td>'+value.subject_name+'</td>\
                                <td>'+value.province_kh_name+'</td>\
                                <td>'+value.person_phone+'</td>\
                                <td class="text-success">'+active+'</td>\
                                <td class="text-right">\
                                    <a href="student_edit.php?STU_ID='+value.id+'&RoomID='+value.room_id+'&ADD='+value.address_place_id+'&CADD='+value.current_address_id+'" class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></a>\
                                    <a href="student_details.php?STU_ID='+value.id+'" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>\
                                    <button class="btn btn-sm" data-id="'+value.id+'" data-room_id = '+value.room_id+' id="btn_active">'+feature+'</button>\
                                </td>\
                            </tr>\
                        ');
                    });
                }
                else
                {
                    swal('បរាជ័យ', 'ការតភ្ជាប់របស់លោកអ្នកមានបញ្ចា សូមពិនិត្យមើលឡើងវិញ','warning');
                }

                $('#example').DataTable();

                $('#_loadData').hide();
            }
        });
    }

</script> -->


<script>
    var listSlider=[],id,datatable;
    $(document).ready(function() {
        
        datatable = $('#example').DataTable({
            data:listSlider,
            buttons: [
                'print','excel'
            ],
            dom:
                "<'row'<'col-md-2'l><'col-md-3'B><'col-md-7'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>", 
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
                {data:'year_name',AutoWidth:true},
                {data:'subject_name',AutoWidth:true},
                {data:'province_kh_name',AutoWidth:true},
                {data:'person_phone',AutoWidth:true},
                {
                    data:'feature',AutoWidth:true,
                    'render': function(data){
                        var feature = data == '1' ? '<span class="badge badge-success">active</span>' : '<span class="badge badge-danger">inactive</span>';
                        return feature;
                    }
                },
                {'data':'id','name':'person_phone',AutoWidth:true,
                    'render':function(data,type,row){
                        var edit = '<a href="student_edit.php?STU_ID='+row['id']+'&RoomID='+row['room_id']+'&ADD='+row['address_place_id']+'&CADD='+row['current_address_id']+'" class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></a>';
                        var feature = row['feature'] == '1' ? '<i class="fa-solid fa-toggle-on text-success"></i>' : '<i class="fa-solid fa-toggle-off text-danger"></i>';
                        var btn_feature = '<button class="btn btn-sm" data-id="'+row['id']+'" data-room_id='+row['room_id']+' id="btn_active">'+feature+'</button>'
                        var view = '<a href="student_details.php?STU_ID='+data+'&link=manage_student.php?" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>';
                        return edit+btn_feature+view;
                    }
                }
                
            ]
        });
    });

    function list_student()
    {
        $.ajax({
            url:url+'controller/studentController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_student_row:1},
            beforeSend:function()
            {
                $('#_loadData').show();
            },
            success:function(data)
            {
                   console.log(data);
                    listSlider=[];
                    listSlider=data;
                    datatable.clear();
                    datatable.rows.add(listSlider);
                    datatable.draw();
                    $('#_loadData').hide();
            }
        });
    }
</script> 