<?php require_once('../_layout/emp_head.php'); ?>

<div class="content shadow p-3 bg-white">
    <div class="title d-flex justify-content-between align-items-center">
        <h3 class="kh-text text-info font-weight-bold">ព័ត៌មានរបស់លោកគ្រូ​ អ្នកគ្រូ​ មន្ត្រី សាស្ត្រាចារ្យដែលស្នាក់នៅក្នុងអន្តេវាសិកដ្ឋាន</h3>
        <!-- <img src="images/abc.gif" id="_loadData" class="overlay" alt="Image"> -->
        <a href="add_student.php" class="btn btn-sm text-info kh-text"><i class="fa-solid fa-plus text-info "></i> បន្ថែមថ្មី </a>
    </div>
    <div class="info-student my-3 ">
        <table class="table nowrap table-hover w-100 table-responsive table-striped" id="List_data_teacher">
            <thead>
                <tr>
                    <th>ល.រ</th>
                    <th class="kh-text text-info w-25">ឈ្មោះ</th>
                    <th class="kh-text text-info ">ភេទ</th>
                    <th class="kh-text text-info w-25">កម្រិតវប្បធម៌</th>
                    <th class="kh-text text-info ">ជំនាញ</th>
                    <th class="kh-text text-info w-25">មកពីខេត្ត</th>
                    <th class="kh-text text-info w-25">លេខទូរសព្ទ</th>
                    <th class="kh-text text-info w-25 text-right my-btn">ប៊ូតុង</th>
                </tr>
            </thead>
            <tbody></tbody>

        </table>
    </div>

</div>

<?php require_once('../_layout/emp_footer.php'); ?>

<script>
    $(function() {
        $('.infoTeacherMainNav').addClass('active');
    })
</script>

<script>
    var ListDataFromTeacher = [],
        id, datatable;
    $(document).ready(function() {
        list_teacher();

        $(document).on('click', '#btn_active', function() {
            var ID = $(this).attr('data-id');
            var room_id = $(this).attr('data-room_id');
            $.ajax({
                url: url + 'controller/studentController.php',
                dataType: 'json',
                type: 'post',
                data: {
                    _ID: ID,
                    _room_id: room_id
                },
                success: function(data) {
                    list_teacher();
                }
            });
        });

        datatable = $('#List_data_teacher').DataTable({
            data: ListDataFromTeacher,
            columns: [{
                    className: 'kh-text',
                    data: 'n',
                    AutoWidth: true,
                },
                {
                    data: 'fname',
                    className: 'kh-text',
                    AutoWidth: true
                },
                {
                    className: 'kh-text',
                    data: 'gender',
                    AutoWidth: true,
                    'render': function(data) {
                        var gender;
                        gender = data == '1' ? 'ស្រី' : 'ប្រុស';
                        return gender;
                    }

                },
                {
                    className: 'kh-text',
                    data: 'degree_name',
                    AutoWidth: true
                },
                {
                    className: 'kh-text',
                    data: 'subject_name',
                    AutoWidth: true
                },
                {
                    className: 'kh-text',
                    data: 'province_kh_name',
                    AutoWidth: true
                },
                {
                    className: 'kh-text',
                    data: 'person_phone',
                    AutoWidth: true
                },
                {
                    className: 'kh-text',
                    'data': 'id',
                    'name': 'person_phone',
                    AutoWidth: true,
                    'render': function(data, type, row) {
                        var view = '<a href="teacher_detail.php?STU_ID=' + data + '" class="btn btn-sm"><i class="fa-solid fa-eye text-info"></i></a>';
                        return view;
                    }
                }

            ]
        });
    });

    function list_teacher() {
        $.ajax({
            url: url + 'controller/teacherController.php',
            type: 'post',
            dataType: 'json',
            data: {
                _select_teacher_row: 1
            },
            beforeSend: function() {
                $('#_loadData').show();
            },
            success: function(data) {
                console.log(data);
                ListDataFromTeacher = [];
                ListDataFromTeacher = data;
                datatable.clear();
                datatable.rows.add(ListDataFromTeacher);
                datatable.draw();
                $('#_loadData').hide();
            }
        });
    }
</script>