<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow row p-3 bg-white">
            <div class="col-lg-12">
            <div class="title d-flex justify-content-between align-items-center">
                <h3>ស្រុក / ខណ្ឌ</h3>
                <a href="#add_faculty" class="btn btn-sm" data-toggle="modal" data-target="#add_major"><i class="fa-solid fa-plus text-success"></i> បន្ថែមថ្មី </a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive">
                    <thead>
                        <tr>
                            <th>ល.រ</th>
                            <td class="w-25">Code</td>
                            <td class="w-25">ជាភាសាខ្មែរ</td>
                            <td class="w-25">ស្រុកជាភាសាអង់គ្លេស</td>
                            <th class="w-25 text-right">Modify date</th>
                  
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            </div>

        </div>


        <!-- Edit user -->
        
        </button>

        <!-- Modal -->
        <div class="modal fade" id="add_major" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">បន្ថែមស្រុកថ្មី</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ឈ្មោះខេត្តខ្មែរ</label>
                        <select name="" id="" class="form-control" required></select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ឈ្មោះស្រុកខ្មែរ</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">ឈ្មោះស្រុកអង់គ្លេស</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> ខ្ញុំយល់ព្រម
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-info" ><i class="fa-solid fa-address-card"></i> រក្សាទុក</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
<?php require_once('../_layout/footer.php') ;?>

<script>
    $(function () {
        fetch_district();
        $('.facultyMainNav').addClass('active');
    })
</script>

<script>
    // Disable form submissions if there are invalid fields
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
               
            }
            else
            {
                event.preventDefault();
                alert('ok data was submitted');
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
</script>

<script>
    var listRoom=[],id,datatable;
    $(document).ready(function() {
        
        datatable = $('.table').DataTable({
            data:listRoom,
            columns:[
                {
                    data:'n',AutoWidth:true,
                },
                {
                    className:'text-center',
                    data:'code',AutoWidth:true,
                },
                {
                    data:'district_namekh',AutoWidth:true,
                },
                {
                    data:'district_name',AutoWidth:true,
                },
                {
                    className:'text-right',
                    data:'modify_date',AutoWidth:true,
                }
            ]
        });
    });

    function fetch_district()
    {
        $.ajax({
            url:url+'controller/addressController.php',
            type: 'GET',
            dataType: 'json',
            data:{fetch_district:1},
            success:function(data)
            {
                    console.log(data);
                    listRoom=[];
                    listRoom=data;
                    datatable.clear();
                    datatable.rows.add(listRoom); 
                    datatable.draw();
            }
        });
    }
</script> 