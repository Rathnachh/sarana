
</div>
<script src="../../public/assets/jquery.js"></script>
<!-- <script src="../../public/assets/jquery.dataTables.js"></script> -->
    <script src="../../public/assets/popper.min.js"></script> 
    <script src="../../public/assets/bootstrap.min.js"></script>   
    <script src="../../public/assets/sweetalert.min.js"></script>
    <!-- <script src="../../public/assets/dataTables.bootstrap4.js"></script> -->

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script> 
    <script src="../../public/dist/script.js"></script>
</body>
</html>

<script>
    var url = "http://localhost:80/sarana/";
   $(document).ready(function(){
        $('.user-img').click(function(){
            $('.user-menu').toggleClass('active');
        });
        $('.toggle-icon').click(function(){
            $('#sidebar').toggleClass('active');
            $('#main').toggleClass('active');
            $('header').toggleClass('active');
        });
        get_dropdownList_building();
        $(document).on('click','#view tbody tr',function(){
            var link = $(this).attr('data-href');
            window.location.href = link;
        })
   });

</script>


<!---manage function -->
<script>
    

</script>