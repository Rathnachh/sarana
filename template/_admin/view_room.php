<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow p-3">
            <div class="title d-flex">
                <a href="manage_room.php"><i class="fa-solid fa-arrow-left mr-3" style="font-size:18px"></i></a>
                <h3>ឈ្នោះនិស្សិតដែលស្នាក់នៅក្នុងបន្ទប់ <span>D0-08</span> ឆ្នាំ <?php echo date("Y")?></h3>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive">
                    <thead>
                        <tr>
                            <th>ល.រ</th>
                            <th class="w-25">ឈ្មោះនិស្សិត</th>
                            <th class="">ភេទ</th>
                            <th class="w-25">ថ្ងៃខែឆ្នាំកំណើត</th>
                            <td>មកពីខេត្ត</td>
                            <th class="w-25">ជំនាញ</th>
                            <th class="w-25">យានយន្ត</th>
                            <th class="w-25">ប៊ូតុងចុច</th>
                        </tr>
                    </thead>
                   <tbody>
                        <tr>
                            <td>01</td>
                            <td>ពេញ ចំរើន</td>
                            <td>ប្រុស</td>
                            <td>11-05-2001</td>
                            <td>ត្បួងឃ្មុំ</td>
                            <td class="text-info">វិទ្យាសាស្ត្រកុំព្យូទ័រ</td>
                            <td class="text-success">ត្បួងឃ្មុំ​ 1A-2345</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#user_edit"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>តឿ ទី</td>
                            <td>ប្រុស</td>
                            <td>11-05-2001</td>
                            <td>កំពង់ធំ</td>
                            <td class="text-info">កម្មវិធីកុំព្យូទ័រ</td>
                            <td class="text-danger">គ្មាន</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#user_edit"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>ផេន​ មល់</td>
                            <td>ប្រុស</td>
                            <td>11-05-2001</td>
                            <td>ត្បួងឃ្មុំ</td>
                            <td class="text-info">វិទ្យាសាស្ត្រកុំព្យូទ័រ</td>
                            <td class="text-success">ត្បួងឃ្មុំ 1B-9808</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#user_edit"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>ហាត ឆេងហ៊ាន់</td>
                            <td>ប្រុស</td>
                            <td>11-05-2001</td>
                            <td>កំពង់ធំ</td>
                            <td class="text-info">វិទ្យាសាស្ត្រកុំព្យូទ័រ</td>
                            <td class="text-success">កំពង់ធំ 1C-2390</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#user_edit"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>ជន់ ស៊ីណេត</td>
                            <td>ប្រុស</td>
                            <td>11-05-2001</td>
                            <td>ព្រៃវែង</td>
                            <td class="text-info">វិទ្យាសាស្ត្រកុំព្យូទ័រ</td>
                            <td class="text-danger">គ្មាន</td>
                            <td class="text-right">
                                <a href="#" class="btn btn-sm" data-toggle="modal" data-target="#user_edit"><i class="fa-solid fa-pen-to-square text-success"></i></a>
                            </td>
                        </tr>
                        
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
            ordering: false,
            info: false,
        });
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