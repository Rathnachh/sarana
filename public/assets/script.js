var ListItem = [];
    var listItem = [];
    let count = 0;

        $('#counts').text(count);

        $('#btnOrder').click(function(){
            getDatafromTable();
        })
        $(document).on('click','.btn-danger',function(){
                $(this).closest('tr').remove();
                //var row = $(this).closest('tr');
                getDatafromTable();
            })
        $(document).on('click','.btn-add-cart',function(){
            var price = $(this).closest('.card-box').find('span').text();
            var image = $(this).closest('.card-box').find('img').attr('src');
            var description = $(this).closest('.card-box').find('h3').text();

            //alert(description);

            var table = '<tr>\
                <td><img src="'+image+'" style="width: 60px;" alt=""></td>\
                <td>'+description+'</td>\
                <td>'+price+'</td>\
                <td><button class="btn btn-sm btn-danger">-</button></td>\
            </tr>';
            $('#list_to_cart').append(table);
            getDatafromTable();
        })
    function getDatafromTable()
    {
        var total = 0;
        ListItem = []
        $('#tblEmp').find('tr:gt(0)').each(function(){
            var ObjItem = {};
            ObjItem.qty = $(this).find('td:eq(1)').text();
            var texts = $(this).find('td:eq(2)').text();
            //alert(texts.slice(1,));
            total = total + parseFloat(texts.slice(1,));
            ObjItem.price = $(this).find('td:eq(2)').text();
            ListItem.push(ObjItem);
        })
        
       // alert(total);
        let couns = ListItem.length;
        $('#counts').text(couns);
        //console.log(ListItem);

    }
    function acionMenu()
    {
        $('.sub-menu').toggleClass('active');
        //alert(09889)
    }
