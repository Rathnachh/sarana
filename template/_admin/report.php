<?php require_once('../_layout/head.php') ;?>

        <div class="content p-3 bg-white">
            <div class="title d-flex align-items-center">
                <a href="student_payment.php"><i class="fa-solid fa-arrow-left mr-3 text-info" style="font-size:18px"></i></a>
                <h3 class="text-info kh-text font-weight-bold">របាយការណ៍បង់ប្រាក់</h3>
            </div>
            <div class="row my-3">
                <div class="col-lg-3">
                    <select name="feature" id="feature" class="form-control">
                        <option value="">~ select ~</option>
                        <option value="">របាយការបង់ប្រាក់</option>
                        <!-- <option value="1">របាយការនិស្សិតបានបង់ប្រាក់ហើយ</option>
                        <option value="0">របាយការនិស្សិតមិនទាន់បង់ប្រាក់</option> -->
                    </select>
                </div>
                <div class="col-lg-3">
                    <input type="date" id="start_date" class="form-control" >
                </div>
                <div class="col-lg-3">
                    <input type="date" id="end_date" class="form-control" >
                </div>
                <div class="col-lg-3 d-flex ">
                    <button type="button" id="search" class="form-control w-50">ស្វែងរក</button>
                    <button type="button" id="print" class="form-control w-50">បោះពុម្ភ</button>
                </div>
            </div>
            <div id="report" style="width: 1200px;margin: auto;padding: 20px 50px;background-color: none;">
                <div class="head" style="display: flex;justify-content: space-between;padding: 20px 0;">
                    <div class="left-head" style="text-align: center;font-family: 'Khmer OS Muol Light';margin-top: 5%;">
                        <h3 style="line-height: 1.5;font-weight: bold;font-size: 17px;">ក្រសួងអប់រំយុវជន និងកីឡា</h3>
                        <h4 style="line-height: 1.5;font-weight: bold;font-size: 17px;">សាកលវិទ្យាល័យហេង សំរិន ត្បូងឃ្មុំ</h4>
                    </div>
                    <div class="right-head" class="left-head" style="text-align: center;font-family: 'Khmer OS Muol Light';">
                        <h4 style=" font-family: 'Khmer OS Muol Light';line-height: 1.5;font-size: 18px;">ព្រះរាជាណាចក្រកម្ពុជា</h4>
                        <h3 style=" font-family: 'Khmer OS Muol Light';line-height: 1.5;font-size: 18px;">ជាតិ សាសនា​ ព្រះមហាក្សត្រ</h3>
                    </div>
                </div>
                <h3 style="text-align: center;font-size: 14px;font-family: 'Khmer OS Muol Light';" id="title_pay">របាយការបង់ប្រាក់</h3>
                <table class="table nowrap table-hover w-100 table-bordered">
                    <thead>
                        <tr>
                            <th class="d-none"></th>
                            <th>ល.រ</th>
                            <th class="w-25 text-dark">ឈ្មោះនិស្សិត</th>
                            <th class="">ភេទ</th>
                            <th class="w-25 text-dark">បានបង់ប្រាក់</th>
                            <th class="w-25 text-dark">មិនទាន់បង់ប្រាក់</th>
                            <th class="w-25 text-right">ថ្ងៃបង់ប្រាក់</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <p class="text-end text-sucess">ប្រាក់ដែលបានបង់សរុប​ <span id="total_payment">0.00</span></p>
                <p class="text-end text-danger">ប្រាក់ដែលមិនទាន់បានបង់សរុប​ <span id="total_remain">0.00</span></p>
                <hr>
            </div>

        </div>
    </div>

<?php require_once('../_layout/footer.php') ;?>


<script>
    $(function(){
        $('.report').addClass('active');


        $('#search').click(function(){
            var search = $('#feature').val();
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            var title = $('#feature option:selected').text();
            if(title!='~ select ~')
            {
                $('#title_pay').text('');
                $('#title_pay').text(title);
            }
            $.ajax({
                url:url+'controller/reportController.php',
                type: 'post',
                dataType: 'json',
                data:{feature:search,_start_date:start_date,_end_date:end_date},
                beforeSend:function()
                {
                    $('#_loadingData').show();
                },
                success:function(data)
                {
                    if(data.length>0)
                    {
                        var n=1;
                        var payment_total = 0;
                        var remain_total = 0;
                        $('tbody').html('');
                        $.each(data, function(key, value) {
                            var gender = value.gender==0?'ប្រុស':'ស្រី';
                            payment_total += parseFloat(value.paid);
                            remain_total += parseFloat(value.remain);
                            $('tbody').append(
                                '<tr>\
                                    <td>'+(n++)+'</td>\
                                    <td>'+value.fname+'</td>\
                                    <td>'+gender+'</td>\
                                    <td>'+value.paid+' ៛</td>\
                                    <td>'+value.remain+' ៛</td>\
                                    <td class="text-right">'+value.date_pay+'</td>\
                                </tr>\
                            ');
                        });

                        $('#total_payment').text(payment_total.toFixed(2)+' រៀល');
                        $('#total_remain').text(remain_total.toFixed(2)+' រៀល');
                    }
                    else
                    {
                        $('tbody').html('');
                        swal('បរាជ័យ', 'មិនមានរបាយការ សូមអរគុណ!!!','warning');
                        $('#total_payment').text('0.00');
                        $('#total_remain').text('0.00');
                    }
                }
            });
        })

        

        $('#print').click(function(){
            document.body.innerHTML = document.all.item('report').innerHTML;
            window.print();
            window.location.reload();
        });
    });
</script>
