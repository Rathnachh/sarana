<?php require_once('../_layout/emp_head.php') ;?>

        <div class="content shadow p-3 bg-white">
            <div class="title d-flex align-items-center">
                <a href="student_payment.php"><i class="fa-solid fa-arrow-left mr-3" style="font-size:18px"></i></a>
                <h3>ការបង់ប្រាក់</h3>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive table-striped" id="List_payment">
                    <thead>
                        <tr>
                            <th class="d-none"></th>
                            <th>ល.រ</th>
                            <th class="w-75">ឈ្មោះនិស្សិត</th>
                            <th class="w-25 text-right">លេខបន្ទប់</th>
                            <th class="d-none"></th>
                            <th class="d-none"></th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>


        <!-- Edit user -->
        

        <!-- Modal -->
        <div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <form class="needs-validation" novalidate>
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLongTitle">បង់ប្រាក់សម្រាប់ការស្នាក់នៅអន្តេវាសិកដ្ឋាន</div>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3 col-lg-3 col-md-3"><label for="">ឈ្នោះ</label></div>
                    <div class="col-sm-8 col-lg-8 col-md-8"><label for="">: <span id="name"></span></label></div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-lg-3 col-md-3"><label for="">បន្ទប់</label></div>
                    <div class="col-sm-8 col-lg-8 col-md-8"><label for="" >: <span id="rom_name"></span></label></div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-lg-3 col-md-3"><label for="">យានយន្ត</label></div>
                    <div class="col-sm-8 col-lg-8 col-md-8"><label for="" >: <span id="ve_name"></span>, <span id="status"></span></label></div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="uname">បង់ប្រាក់ </label><input type="hidden" id="stu_id" name="stu_id">
                    <input type="number" class="form-control" id="payment" value="0" placeholder="Enter money to pay" name="payment" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="uname">ជំពាក់ </label><input type="hidden" id="stu_id">
                    <input type="number" class="form-control" id="payment_remain" value="0" placeholder="Enter money to pay" name="payment_remain" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="feature"> ខ្ញុំយល់ព្រម
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <img src="images/abc.gif" id="overlay" class="overlay" alt="Image">
                <button type="submit" class="btn btn-primary">បង់ប្រាក់</button>
            </div>
            </div>
            </form>
        </div>
        </div>

<?php require_once('../_layout/emp_footer.php') ;?>

<script>
    $(function () {
        $('.paymentInfoMainNav').addClass('active');
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
                let frm = new FormData(this);
                $.ajax({
                    url:url+'controller/paymentController.php', 
                    type:'post',
                    //dataType:'json',
                    data:frm,
                    processData:false,
                    contentType:false,
                    beforeSend:function()
                    {
                        $('#overlay').show();
                    },
                    success:function(data)
                    {
                        if(data == 1)
                        {
                            $('#payment_modal').modal('hide');
                            swal('Warning..!','សម្រាប់ខែនេះបានបង់ប្រាស់ហើយ សូមអរគុណ!!!','warning');
                        }
                        else
                        {
                            $('#payment_modal').modal('hide');
                            swal('Successed','ការបង់ប្រាក់ទទួលបានជោគជ័យ​ សូមអរគុណ!!!','success');
                        }
                        $('#overlay').hide();
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
    var list_data_payment=[],id,datatable;
    $(document).ready(function() {
        list_student_payment();
        datatable = $('#List_payment').DataTable({
            data:list_data_payment,
            
            columns:[
                {
                    data:'id',AutoWidth:true,
                    className:'d-none'
                },
                {data:'n',AutoWidth:true,},
                {data:'fname',AutoWidth:true},
                {
                    data:'name_room',AutoWidth:true,
                    className:'text-right'
                },
                {data:'name',AutoWidth:true,className:'d-none'},
                {data:'status',AutoWidth:true,className:'d-none'}
            ]
        });

        $(document).on('click','tbody tr',function(){
            var row = $(this).closest('tr');
            var ID = row.find('td:eq(0)').text();
            $('#payment_modal').modal('show');
            $('#name').text(row.find('td:eq(2)').text());
            $('#rom_name').text(row.find('td:eq(3)').text());
            $('#stu_id').val(ID);
            var ve_name = row.find('td:eq(4)').text();
            if(ve_name == "")
            {
                $('#ve_name').text('គ្មាន');
                $('#status').text('');
            }
            else
            {
                $('#ve_name').text(ve_name);
                $('#status').text(row.find('td:eq(5)').text());
            }
        });
    });

    function list_student_payment()
    {
        $.ajax({
            url:url+'controller/paymentController.php',
            type: 'post',
            dataType: 'json',
            data:{_select_payment_row:1},
            success:function(data)
            {
                    //console.log(data);
                    list_data_payment=[];
                    list_data_payment=data;
                    datatable.clear();
                    datatable.rows.add(list_data_payment);
                    datatable.draw();
                    //$('#_loadData').hide();
            }
        });
    }
</script>