<?php require_once('../_layout/head.php') ;?>
        <div class="content shadow p-3 bg-white">
            <div class="title title d-flex align-items-center justify-content-between">
                <h3>ព័ត៌មានអំពីការបង់ប្រាក់</h3>
                <a href="payment.php"><i class="fa-brands fa-amazon-pay" style="font-size:14px"></i> បង់ប្រាក់</a>
            </div>
            <div class="info-student my-3 ">
                <table class="table nowrap table-hover w-100 table-responsive" id="data_info_payment">
                    <thead>
                        <tr>
                            <th class="d-none"></th>
                            <th>ល.រ</th>
                            <th class="w-25 text-dark">ឈ្មោះនិស្សិត</th>
                            <th class="">ភេទ</th>
                            <th class="w-25 text-dark">បានបង់ប្រាក់</th>
                            <th class="w-25 text-dark">មិនទាន់បង់ប្រាក់</th>
                            <th class="w-25">ថ្ងៃបង់ប្រាក់</th>
                            <th class="w-50 text-right">ថ្ងៃបញ្ចប់ការបង់ប្រាក់</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
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
                    <div class="col-sm-3 col-lg-3 col-md-3"><label for="">លុយជំពាក់</label></div>
                    <div class="col-sm-8 col-lg-8 col-md-8"><label for="" >: <span id="payment_remain"></span> ៛</label></div>
                </div>
                <hr>
                <div class="form-group"> <input type="hidden" id= 'store'>
                    <label for="uname">បង់ប្រាក់ </label><input type="hidden" id="pay_id" name="pay_id">
                        <input type="hidden" id="result" name="result">
                        <input type="hidden" id="result_pay" name="result_pay">
                        <input type="number" class="form-control" id="payment" value="0" placeholder="Enter money to pay" name="payment" required>
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
<?php require_once('../_layout/footer.php') ;?>

<script>
    $(function () {
        $('.paymentInfo').addClass('active');
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
                        //alert(data);
                        $('#overlay').hide();
                        $('#payment_modal').modal('hide');
                        swal('Successed','ការទូទាត់លុយទទួលបានជោគជ័យ​ សូមអរគុណ!!!','success');
                        list_info_payment();
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
        list_info_payment();
        datatable = $('#data_info_payment').DataTable({
            data:list_data_payment,
            //dom: 'Bfrtip',
            buttons: [
                'print','excel'
            ],
            dom:
                "<'row'<'col-md-2'l><'col-md-3'B><'col-md-7'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
            columns:[
                {
                    data:'id',AutoWidth:true,
                    className:'d-none'
                },
                {data:'n',AutoWidth:true,},
                {
                    data:'fname',AutoWidth:true,
                    className:'text-info',
                },
                {
                    data:'gender',AutoWidth:true,
                    'render':function(data)
                    {
                        return data == '1' ? 'ស្រី':'ប្រុស';
                    }
                },
                {
                    data:'paid',AutoWidth:true,
                    className:'text-success',
                    'render':function(data)
                    {
                        return data == '0' ? 'N/A' : data +' ៛';
                    }
                },
                {
                    data:'remain',AutoWidth:true,
                    className:'text-danger',
                    'render':function(data)
                    {
                        return data == '0' ? 'N/A' : data +' ៛';
                    }
                },
                {data:'pay_date',AutoWidth:true,},
                {
                    className:'text-right',
                    data:'pay_end',AutoWidth:true,
                    'render': function(data)
                    {
                        return data != null ? data : 'N/A';
                    }
                },
            ]
        });

        $(document).on('click','tbody tr',function(){
            var row = $(this).closest('tr');
            var ID = row.find('td:eq(0)').text();
            $('#payment').val(0);
            $('#payment_modal').modal('show');
            $('#name').text(row.find('td:eq(2)').text());
            $('#rom_name').text(row.find('td:eq(3)').text());
            $('#pay_id').val(ID);
            var pay = row.find('td:eq(4)').text();
            var remain_pay = row.find('td:eq(5)').text();
            if(remain_pay.length == 6) 
            {
                $('#payment_remain').text(remain_pay.substring(0,4));
                $('#store').val(remain_pay.substring(0,4));
                $('#payment').prop('disabled', true);
            }

            else if (remain_pay.length == 9)
            {
                $('#payment_remain').text(remain_pay.substring(0,7))
                $('#store').val(remain_pay.substring(0,7));
                $('#payment').prop('disabled', false);
            }
 
            else 
            {
                $('#payment_remain').text(remain_pay.substring(0,8))
                $('#store').val(remain_pay.substring(0,8));
                $('#payment').prop('disabled', false);
            }
            
            if(pay.length == 6) $('#result_pay').val(pay.substring(0,4));
            else if(pay.length == 7) $('#result_pay').val(pay.substring(0,7));
            else $('#result_pay').val(pay.substring(0,8));
           
        });

        $('#payment').keyup(function(){
            var remain = $('#payment_remain').text();
            var store = $('#store').val();
            var _pay = $('#result_pay').val();

            var pay = $(this).val();
            if(pay.trim() < 1)
            {
                $('#payment_remain').text(store);
            }
            else
            {
                var total = store - pay;
                var _pay_total = parseFloat(_pay) + parseFloat(pay);
                $('#payment_remain').text('');
                $('#payment_remain').text(total);
                $('#result').val(total);
            }
        });
    });

    function list_info_payment()
    {
        $.ajax({
            url:url+'controller/paymentController.php',
            type: 'post',
            dataType: 'json',
            data:{info_payment:1},
            success:function(data)
            {
                    console.log(data);
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

