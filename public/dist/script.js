function get_dropdownList_building(txt_dropdownList)
{
    $.ajax({
        url:url+'controller/buildingController.php',
        type:'POST',
        dataType:'json',
        data:{_get_building:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].building_name,data[i].id));

            }
        }
    });
}

function get_dropdownList_floor(txt_dropdownList,value)
{
    $.ajax({
        url:url+'controller/roomController.php',
        type:'POST',
        dataType:'json',
        data:{_select_floor_by_id_building:value},
        
        success:function(data)
        {
            $(txt_dropdownList).html('');
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].floor_name,data[i].id));

            }
        }
    });
}

function get_dropdownList_floor_active(txt_dropdownList,value)
{
    $.ajax({
        url:url+'controller/roomController.php',
        type:'POST',
        dataType:'json',
        data:{_select_floor_by_id_building_acitve:value},
        success:function(data)
        {
            $(txt_dropdownList).html('');
            $(txt_dropdownList).html('<option value="" selected disabled>~~ សូមជ្រើសរើស ~~</option>');
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].floor_name,data[i].id));

            }
        }
    });
}

function get_dropdownList_floor_all(txt_dropdownList)
{
    $.ajax({
        url:url+'controller/roomController.php',
        type:'POST',
        dataType:'json',
        data:{_select_floor_all_rows:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].floor_name,data[i].id));

            }
        }
    });
}

function get_dropdownList_faculty_all(txt_dropdownList)
{
    $.ajax({
        url:url+'controller/facultyController.php',
        type:'POST',
        dataType:'json',
        data:{_select_faculty_all_rows:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].name,data[i].id));

            }
        }
    });
}

function  get_ethnicity(txt_dropdownList) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_ethnicity_rows:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].ethnicity,data[i].id));

            }
        }
    });
}

function  get_nation(txt_dropdownList) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_nation_rows:1}, 
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].nation_kh,data[i].id));

            }
        }
    });
}

function  get_province(txt_dropdownList) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_province_rows:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].province_kh_name,data[i].province_id));

            }
        }
    });
}


function  get_district(txt_dropdownList,value) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_district_from_prince_id:value},
        success:function(data)
        {
            $(txt_dropdownList).html('');
            $(txt_dropdownList).html('<option value="" selected disabled>~~ សូមជ្រើសរើស ~~</option>');
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].district_namekh,data[i].dis_id));

            }
        }
    });
}

function  get_community(txt_dropdownList,value) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_community_from_prince_dis_id:value},
        success:function(data)
        {
            $(txt_dropdownList).html('');
            $(txt_dropdownList).html('<option value="" selected disabled>~~ សូមជ្រើសរើស ~~</option>');
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].commune_namekh,data[i].com_id));

            }
        }
    });
}

function  get_village(txt_dropdownList,value) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_village_from_comm_id:value},
        success:function(data)
        {
            $(txt_dropdownList).html('');
            $(txt_dropdownList).html('<option value="" selected disabled>~~ សូមជ្រើសរើស ~~</option>');
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].village_namekh,data[i].vill_id));

            }
        }
    });
}

function  get_all_major(txt_dropdownList,value) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_all_major:value},
        success:function(data)
        {
            $(txt_dropdownList).html('');
            $(txt_dropdownList).html('<option value="" selected disabled>~~ សូមជ្រើសរើស ~~</option>');
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].subject_name,data[i].id));

            }
        }
    });
}

function  get_all_faculty(txt_dropdownList) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_all_faculty:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].name,data[i].id));

            }
        }
    });
}

function  get_all_acedemic(txt_dropdownList) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_all_acedemic:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].year_name,data[i].id));

            }
        }
    });
}

function  get_room_filter_floor_building(txt_dropdownList,building_id,floor_id) {
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_building_id:building_id,_floor_id:floor_id},
        success:function(data)
        {
            $(txt_dropdownList).html('');//
            $(txt_dropdownList).html('<option value="" selected disabled>~~ សូមជ្រើសរើស ~~</option>');
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].name_room,data[i].id));

            }
        }
    });
}

function imageReader(input,idimage)
{
    if(input.files && input.files[0])
    {
        var reader = new FileReader(); 
        reader.onload = function(e)
        {
            img = e.target.result;
            $(idimage).attr('src',img);   
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function studentType(txt_dropdownList)
{
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_all_student_type:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].name,data[i].id));

            }
        }
    });
}

function studentStatus(txt_dropdownList)
{
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_all_student_status:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].status_name,data[i].id));

            }
        }
    });
}

function studentDegree(txt_dropdownList)
{
    $.ajax({
        url:url+'controller/studentController.php',
        type:'POST',
        dataType:'json',
        data:{_select_all_degree:1},
        success:function(data)
        {
            for(var i=0;i<data.length;i++)
            {
                $(txt_dropdownList).append(new Option(data[i].degree_name,data[i].id));

            }
        }
    });
}



