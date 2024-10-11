<?php require_once('../_layout/head.php') ;?>

        <div class="content shadow row p-3 bg-white">
            <div class="col-lg-12">
            <div class="title d-flex justify-content-between align-items-center">
                <h3 class="kh-text text-info font-weight-bold">សញ្ជាតិ</h3>
                <img src="images/abc.gif" id="_loadingData" class="overlay" alt="Image">
                <a href="#add_nation" class="btn btn-sm" data-toggle="modal" data-target="#add_nation"><i class="fa-solid fa-plus text-success"></i> បន្ថែមថ្មី </a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive">
                    <thead>
                        <tr>
                            <th class="kh-text text-info">ល.រ</th>
                            <th class="w-50 kh-text text-info">ឈ្មោះ</th>
                            <th class="w-50 kh-text text-info text-right">ប៊ូតុង</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            </div>

        </div>

        <!-- Modal​ Add -->
    <div class="modal fade" id="add_nation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ការកែប្រែសញ្ជាតិ</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ឈ្មោះ</label>
                        <input type="text" class="form-control" id="nation_name" placeholder="Enter username" name="nation_name" required>
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
                    <img src="images/abc.gif" id="overlay" class="overlay" alt="Image">
                    <button type="submit" class="btn btn-outline-info" ><i class="fa-solid fa-address-card"></i> រក្សាទុក</button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    
    <!-- Edit nation -->

    <div class="modal fade" id="update_nation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <div class="card p-3">
            <form action="/action_page.php" class="_needs-validation" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ការកែប្រែជនជាតិ</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="uname">ឈ្មោះ</label>
                        <input type="hidden" name="get_id" id="get_id">
                        <input type="text" class="form-control" id="uname_nation" placeholder="Enter username" name="uname_nation" required>
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
                    <img src="images/abc.gif" id="_overlay" class="overlay" alt="Image">
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
        $('.facultyMainNav').addClass('active');
        select_row()
    })
</script>

<script>
    $(function () {
        $('.facultyMainNav').addClass('active');
        select_row();

        $(document).on('click', '#update_nation_data',function(){
            var id = $(this).attr('val');
            $('#update_nation').modal('show');
            $.ajax({
                url:url+'controller/nationController.php',
                type: 'post',
                dataType: 'json',
                data:{_ID:id},
                success:function(data)
                {
                    $('#uname_nation').val(data[0].nation_kh);
                    $('#get_id').val(data[0].id);
                }
            });
        });    
    })
</script>

<script>
//Add 
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
                var frm = new FormData(this);
                $.ajax({
                    url:url+'controller/nationController.php',
                    type:'post',
                    //dataType:'json',
                    data:frm,
                    processData:false,
                    contentType:false,
                    beforeSend:function()
                    {
                        $('#overlay').show();
                        $('.btn-outline-info').prop('disabled',true);
                    },
                    success:function(data)
                    {
                        $('#overlay').hide();
                        $('.btn-outline-info').prop('disabled',false);
                        if(data>0)
                        {
                            swal('ជោគជ័យ', 'ព័ត៌មានសញ្ចាតិត្រូវបានរក្សាទុកដោយជោគជ័យ','success');
                            select_row()
                        }
                        else
                        {
                            swal('បរាជ័យ', 'ការតភ្ជាប់របស់លោកអ្នកមានបញ្ចា','warning');
                            
                        }
                    }
                });
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
})();
</script>

<script>
    //select alll row
    function select_row()
    {
        $.ajax({
            url:url+'controller/nationController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_all_row:1},
            beforeSend:function()
            {
                $('#_loadingData').show();
            },
            success:function(data)
            {
                if(data!=0)
                {
                    //console.log(data)
                    var active;
                    var n=1;
                    $('tbody').html('');
                    $.each(data, function(key, value) {
                        $('tbody').append(
                            '<tr>\
                                <td>0'+(n++)+'</td>\
                                <td>'+value.nation_kh+'</td>\
                                <td class="text-right">\
                                    <a href="#" id="update_nation_data" val='+value.id+' class="btn btn-sm"><i class="fa-solid fa-pen-to-square text-success"></i></a>\
                                </td>\
                            </tr>\
                        ');
                    });
                }
                else
                {
                    swal('បរាជ័យ', 'ការតភ្ជាប់របស់លោកអ្នកមានបញ្ចា សូមពិនិត្យមើលឡើងវិញ','warning');
                }
               
                $('.table').DataTable();
                $('#_loadingData').hide();
            }
        });
    }
</script>

<!-- //edit -->
<script>
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('_needs-validation');
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
                var frm = new FormData(this);
                $.ajax({
                    url:url+'controller/nationController.php',
                    type:'post',
                    //dataType:'json',
                    data:frm,
                    processData:false,
                    contentType:false,
                    beforeSend:function()
                    {
                        $('#_overlay').show();
                        $('.btn-outline-info').prop('disabled',true);
                    },
                    success:function(data)
                    {
                        $('#_overlay').hide();
                        $('.btn-outline-info').prop('disabled',false);
                        if(data==0)
                        {
                            swal('ជោគជ័យ', 'ព័ត៌មានសញ្ចាតិត្រូវបានរក្សាទុកដោយជោគជ័យ','success');
                            $('#update_nation').modal('hide');
                            select_row()
                        }
                        else
                        {
                            swal('បរាជ័យ', 'ការតភ្ជាប់របស់លោកអ្នកមានបញ្ចា','warning');
                        }
                    }
                });
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
})();
</script>